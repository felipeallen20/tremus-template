<?php
/**
 * Plugin Name: Woo Product Review Score
 * Description: Añade un sistema ligero de estrellas y puntuación (review_score) para productos WooCommerce, shortcode para mostrar/valorar y una lista administrativa de reviews.
 * Version: 1.2
 * Author: Felipe (Generado por ChatGPT)
 */

if (!defined('ABSPATH')) exit;

class WPRS_Plugin {
    public function __construct() {
        register_activation_hook(__FILE__, array($this, 'on_activate'));
        add_action('wp_enqueue_scripts', array($this, 'frontend_assets'));
        add_action('admin_enqueue_scripts', array($this, 'admin_assets'));

        add_shortcode('product_stars', array($this, 'shortcode_product_stars'));

        add_action('wp_ajax_wprs_submit_rating', array($this, 'ajax_submit_rating'));
        add_action('wp_ajax_nopriv_wprs_submit_rating', array($this, 'ajax_submit_rating'));

        add_action('admin_menu', array($this, 'admin_menu'));
    }

    // Activación: asegurar meta review_score en productos y recalcular
    public function on_activate() {
        $args = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'numberposts' => -1
        );
        $products = get_posts($args);
        foreach ($products as $p) {
            $this->recalculate_product_score($p->ID);
        }
    }

    // Assets frontend (inline CSS + JS en cola)
    public function frontend_assets() {
        wp_register_script('wprs-frontend', plugins_url('wprs-frontend.js', __FILE__), array('jquery'), '1.0', true);
        wp_localize_script('wprs-frontend', 'wprs_ajax', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('wprs-nonce'),
        ));
        wp_enqueue_script('wprs-frontend');

        wp_register_style('wprs-style', plugins_url('wprs-style.css', __FILE__));
        wp_enqueue_style('wprs-style');
    }

    public function admin_assets($hook) {
        if (strpos($hook, 'wprs_reviews') === false && strpos($hook, 'woocommerce_page_wprs_reviews') === false && strpos($hook, 'toplevel_page_wprs_reviews') === false) return;
        wp_enqueue_style('wprs-admin-style');
    }

    // Shortcode [product_stars id="123" simple="true"]
    public function shortcode_product_stars($atts) {
        $atts = shortcode_atts(array(
            'id' => 0,
            'simple' => 'false', // si es true, solo muestra las estrellas pequeñas
        ), $atts, 'product_stars');

        $product_id = intval($atts['id']);
        if (!$product_id) {
            global $product;
            if (is_object($product)) $product_id = $product->get_id();
        }
        if (!$product_id) return 'Producto no encontrado.';

        // obtener promedio y cantidad de reviews
        $average = get_post_meta($product_id, '_wc_average_rating', true);
        if ($average === '') $average = 0;
        $count = get_post_meta($product_id, '_wc_review_count', true);
        if ($count === '') $count = 0;

        // detectar si el usuario ya votó (por user_id o cookie)
        $user_voted = false;
        $user_id = get_current_user_id();
        if ($user_id) {
            $args = array(
                'post_id' => $product_id,
                'user_id' => $user_id,
                'status' => 'approve',
                'type' => 'review'
            );
            $comments = get_comments($args);
            if (!empty($comments)) $user_voted = true;
        } else {
            $cookie = isset($_COOKIE['wprs_voted_' . $product_id]) ? sanitize_text_field($_COOKIE['wprs_voted_' . $product_id]) : false;
            if ($cookie) $user_voted = true;
        }

        // atributo simple = true → solo estrellas pequeñas
        $simple = filter_var($atts['simple'], FILTER_VALIDATE_BOOLEAN);

        ob_start(); ?>
        <div class="wprs-wrapper <?php echo $simple ? 'wprs-simple' : 'wprs-full'; ?>" data-product-id="<?php echo esc_attr($product_id); ?>">
            <div class="wprs-stars" data-average="<?php echo esc_attr($average); ?>" data-count="<?php echo esc_attr($count); ?>">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <span class="wprs-star <?php echo ($i <= round($average)) ? 'filled' : ''; ?>" data-value="<?php echo $i; ?>">&#9733;</span>
                <?php endfor; ?>
            </div>

            <?php if (!$simple): ?>
                <div class="wprs-meta">
                    <span class="wprs-average"><?php echo number_format((float)$average, 2); ?></span>
                    <span class="wprs-count">(<?php echo intval($count); ?>)</span>
                </div>
                <?php if (!$user_voted): ?>
                    <div class="wprs-rate-here">Haz clic en las estrellas para valorar</div>
                <?php else: ?>
                    <div class="wprs-already">Ya has votado</div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <?php
        return ob_get_clean();
    }

    // AJAX handler para guardar la review (guarda como comentario con meta 'rating')
    public function ajax_submit_rating() {
        check_ajax_referer('wprs-nonce', 'nonce');

        $product_id = intval($_POST['product_id']);
        $rating = intval($_POST['rating']);
        if (!$product_id || $rating < 1 || $rating > 5) wp_send_json_error('Datos incorrectos');

        $user_id = get_current_user_id();
        $author = $user_id ? wp_get_current_user()->display_name : sanitize_text_field($_POST['author'] ?? 'Anon');
        $content = sanitize_text_field($_POST['content'] ?? '');

        // prevenir doble voto: check user_id o IP/cookie
        if ($user_id) {
            $existing = get_comments(array('post_id' => $product_id, 'user_id' => $user_id, 'meta_key' => 'rating', 'status' => 'approve'));
            if (!empty($existing)) wp_send_json_error('Ya has votado este producto');
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
            $existing = get_comments(array('post_id' => $product_id, 'meta_key' => 'rating', 'status' => 'approve'));
            foreach ($existing as $c) {
                $c_ip = get_comment_meta($c->comment_ID, 'wprs_ip', true);
                if ($c_ip && $c_ip === $ip) wp_send_json_error('Ya se ha registrado un voto desde esta IP');
            }
        }

        // insertar comentario
        $commentdata = array(
            'comment_post_ID' => $product_id,
            'comment_author' => $author,
            'comment_content' => $content,
            'user_id' => $user_id,
            'comment_approved' => 1,
            'comment_type' => 'review'
        );
        $comment_id = wp_insert_comment($commentdata);
        if (!$comment_id) wp_send_json_error('No se pudo guardar la review');

        update_comment_meta($comment_id, 'rating', $rating);
        update_comment_meta($comment_id, 'wprs_ip', $_SERVER['REMOTE_ADDR']);

        // recalcular agregados de producto (usar meta de WooCommerce _wc_average_rating y _wc_review_count si existen)
        $this->recalculate_product_score($product_id);

        // poner cookie simple para invitados
        setcookie('wprs_voted_' . $product_id, '1', time() + 60 * 60 * 24 * 365, COOKIEPATH, COOKIE_DOMAIN);

        wp_send_json_success(array('message' => 'Gracias por tu voto'));
    }

    // Recalcula promedio, conteo y campo review_score (guardado en postmeta 'review_score')
    public function recalculate_product_score($product_id) {
        // obtener todos los ratings para este producto
        $comments = get_comments(array('post_id' => $product_id, 'meta_key' => 'rating', 'status' => 'approve'));
        $count = count($comments);
        $sum = 0;
        foreach ($comments as $c) {
            $r = get_comment_meta($c->comment_ID, 'rating', true);
            $sum += floatval($r);
        }
        $avg = $count ? ($sum / $count) : 0;

        // guardar usando los meta keys de WooCommerce para compatibilidad
        update_post_meta($product_id, '_wc_review_count', intval($count));
        update_post_meta($product_id, '_wc_average_rating', floatval($avg));

        // tu review_score: ejemplo simple: promedio * log(count+1)
        $quality = $count ? round($avg * log($count + 1), 2) : 0;
        update_post_meta($product_id, 'review_score', $quality);

        return array('count' => $count, 'average' => $avg, 'quality' => $quality);
    }

    // Admin menu con lista de reviews
    public function admin_menu() {
        add_menu_page('WPRS Reviews', 'WPRS Reviews', 'manage_options', 'wprs_reviews', array($this, 'admin_page_reviews'), 'dashicons-star-filled', 56);
    }

    public function admin_page_reviews() {
        if (!current_user_can('manage_options')) return;
        ?>
        <div class="wrap">
            <h1>Lista de reviews</h1>
            <h2>Resumen por producto</h2>
            <?php $this->render_products_summary_table(); ?>
            <h2>Reviews recientes</h2>
            <?php $this->render_reviews_table(); ?>
        </div>
        <?php
    }

    private function render_products_summary_table() {
        $products = get_posts(array('post_type' => 'product', 'numberposts' => -1));
        echo '<table class="widefat fixed"><thead><tr><th>Producto</th><th>Avg</th><th>Count</th><th>Review Score</th></tr></thead><tbody>';
        foreach ($products as $p) {
            $avg = get_post_meta($p->ID, '_wc_average_rating', true) ?: 0;
            $count = get_post_meta($p->ID, '_wc_review_count', true) ?: 0;
            $score = get_post_meta($p->ID, 'review_score', true) ?: 0;
            echo '<tr>';
            echo '<td><a href="' . get_edit_post_link($p->ID) . '">' . esc_html($p->post_title) . '</a></td>';
            echo '<td>' . esc_html(number_format((float)$avg,2)) . '</td>';
            echo '<td>' . intval($count) . '</td>';
            echo '<td>' . esc_html($score) . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    }

    private function render_reviews_table() {
        $comments = get_comments(array('number' => 100, 'meta_key' => 'rating', 'status' => 'approve'));
        echo '<table class="widefat fixed"><thead><tr><th>Producto</th><th>Autor</th><th>Rating</th><th>Contenido</th><th>Fecha</th></tr></thead><tbody>';
        foreach ($comments as $c) {
            $rating = get_comment_meta($c->comment_ID, 'rating', true);
            $post = get_post($c->comment_post_ID);
            echo '<tr>';
            echo '<td><a href="' . get_edit_post_link($post->ID) . '">' . esc_html($post->post_title) . '</a></td>';
            echo '<td>' . esc_html($c->comment_author) . '</td>';
            echo '<td>' . esc_html($rating) . '</td>';
            echo '<td>' . esc_html(wp_trim_words($c->comment_content, 20)) . '</td>';
            echo '<td>' . esc_html($c->comment_date) . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    }
}

new WPRS_Plugin();




<?php
/*
Plugin Name: Tremus Search Bar
Description: A real-time WooCommerce product search bar.
Version: 1.0
Author: Jules
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Tremus_Search_Bar {

    public function __construct() {
        add_shortcode('tremus_search', array($this, 'render_search_bar'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_frontend_assets'));
        add_action('wp_ajax_tremus_search', array($this, 'tremus_search_callback'));
        add_action('wp_ajax_nopriv_tremus_search', array($this, 'tremus_search_callback'));
    }

    public function tremus_search_callback() {
        if (!isset($_POST['search_term'])) {
            wp_send_json_error('Missing search term.');
        }

        $search_term = sanitize_text_field($_POST['search_term']);
        $limit = 5;

        // --- Refactored Product Search Logic ---

        // 1. Search by keyword (s)
        $keyword_args = array(
            'post_type'      => 'product',
            'posts_per_page' => $limit,
            's'              => $search_term,
            'fields'         => 'ids',
        );
        $keyword_query = new WP_Query($keyword_args);
        $product_ids = $keyword_query->posts;

        // 2. Search by SKU
        $sku_args = array(
            'post_type'      => 'product',
            'posts_per_page' => $limit,
            'meta_query'     => array(
                array(
                    'key'     => '_sku',
                    'value'   => $search_term,
                    'compare' => 'LIKE',
                ),
            ),
            'fields'         => 'ids',
        );
        $sku_query = new WP_Query($sku_args);
        $product_ids = array_merge($product_ids, $sku_query->posts);

        // 3. Search by Tag
        $tag_args = array(
            'post_type'      => 'product',
            'posts_per_page' => $limit,
            'tax_query'      => array(
                array(
                    'taxonomy' => 'product_tag',
                    'field'    => 'name',
                    'terms'    => $search_term,
                    'operator' => 'LIKE',
                ),
            ),
            'fields'         => 'ids',
        );
        $tag_query = new WP_Query($tag_args);
        $product_ids = array_merge($product_ids, $tag_query->posts);

        // 4. Merge, unique, and limit results
        $unique_product_ids = array_unique($product_ids);
        $final_product_ids = array_slice($unique_product_ids, 0, $limit);

        $products = array();
        if (!empty($final_product_ids)) {
            $final_args = array(
                'post_type' => 'product',
                'post__in'  => $final_product_ids,
                'orderby'   => 'post__in',
            );
            $products_query = new WP_Query($final_args);

            if ($products_query->have_posts()) {
                while ($products_query->have_posts()) {
                    $products_query->the_post();
                    $product = wc_get_product(get_the_ID());
                    $products[] = array(
                        'id'      => get_the_ID(),
                        'title'   => get_the_title(),
                        'url'     => get_the_permalink(),
                        'image'   => get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'),
                        'price'   => $product->get_price_html(),
                        'on_sale' => $product->is_on_sale(),
                    );
                }
            }
            wp_reset_postdata();
        }

        // Search for categories
        $category_args = array(
            'taxonomy' => 'product_cat',
            'name__like' => $search_term,
            'hide_empty' => true,
        );
        $categories_query = new WP_Term_Query($category_args);
        $categories = array();
        if (!empty($categories_query->terms)) {
            foreach ($categories_query->terms as $category) {
                $categories[] = array(
                    'id' => $category->term_id,
                    'name' => $category->name,
                    'url' => get_term_link($category->term_id, 'product_cat'),
                );
            }
        }

        wp_send_json_success(array('products' => $products, 'categories' => $categories));
    }

    public function enqueue_frontend_assets() {
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
        wp_enqueue_style('tremus-style', plugin_dir_url(__FILE__) . 'tremus-style.css');
        wp_enqueue_script('tremus-frontend', plugin_dir_url(__FILE__) . 'tremus-frontend.js', array('jquery'), null, true);
        wp_localize_script('tremus-frontend', 'tremus_ajax', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'shop_page_url' => get_permalink(wc_get_page_id('shop')),
        ));
    }

    public function render_search_bar() {
        ob_start();
        ?>
        <div class="tremus-search-container">
            <form role="search" method="get" class="tremus-search-form" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="search" class="tremus-search-field" placeholder="<?php echo esc_attr_x('Busca tus productos...', 'placeholder', 'tremus-search-bar'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                <button type="submit" class="tremus-search-submit"><i class="fas fa-search"></i></button>
                <input type="hidden" name="post_type" value="product" />
            </form>
            <div class="tremus-search-results"></div>
        </div>
        <?php
        return ob_get_clean();
    }

}

new Tremus_Search_Bar();

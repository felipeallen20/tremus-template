<?php
define('WP_DEBUG', true);

// === Cargar CSS personalizado para los shortcodes Tremus ===
function tremus_enqueue_custom_styles() {
    // CSS principal
    wp_enqueue_style(
        'tremus-custom-shortcodes',
        get_stylesheet_directory_uri() . '/assets/css/custom-shortcodes.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'tremus-global-custom',
        get_stylesheet_directory_uri() . '/assets/css/global-custom.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'responsive',
        get_stylesheet_directory_uri() . '/assets/css/responsive.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'woocommerce-styles',
        get_stylesheet_directory_uri() . '/assets/css/woocommerce-styles.css',
        array(),
        '1.0.0'
    );

    // JS del buscador de productos
    wp_enqueue_script(
        'tremus-product-search',
        get_stylesheet_directory_uri() . '/assets/js/custom-product-search.js',
        array('jquery'),
        '1.0.0',
        true
    );

    // JS del submenu
     wp_enqueue_script(
        'tremus-submenu',
        get_stylesheet_directory_uri() . '/assets/js/tremus-submenu.js',
        array('jquery'),
        '1.0.4',
        true
    );

    // global
     wp_enqueue_script(
        'tremus-global',
        get_stylesheet_directory_uri() . '/assets/js/global.js',
        array('jquery'),
        '1.0.0',
        true
    );

    // Pasar admin-ajax.php al JS
    wp_localize_script('tremus-product-search', 'tremusSearch', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));

    // JS para la tarjeta de producto personalizada (botones de cantidad)
    wp_enqueue_script(
        'tremus-custom-product-card',
        get_stylesheet_directory_uri() . '/assets/js/custom-product.js',
        array('jquery'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'tremus_enqueue_custom_styles');

//Shortcodes
require_once get_stylesheet_directory() . '/shortcodes/recently-viewed-products.php';

// 1️⃣ Agregar el campo personalizado en la pantalla de creación de categorías
add_action('product_cat_add_form_fields', function() {
    ?>
    <div class="form-field">
        <label for="tooltip-text"><?php _e('Texto del tooltip', 'woocommerce'); ?></label>
        <input type="text" name="tooltip-text" id="tooltip-text" value="">
        <p class="description">Texto breve que aparecerá como tooltip al pasar el mouse sobre la categoría.</p>
    </div>
    <?php
});

// 2️⃣ Agregar el campo en la pantalla de edición de categorías
add_action('product_cat_edit_form_fields', function($term) {
    $value = get_term_meta($term->term_id, 'tooltip-text', true);
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="tooltip-text"><?php _e('Texto del tooltip', 'woocommerce'); ?></label></th>
        <td>
            <input type="text" name="tooltip-text" id="tooltip-text" value="<?php echo esc_attr($value); ?>">
            <p class="description">Texto breve que aparecerá como tooltip al pasar el mouse sobre la categoría.</p>
        </td>
    </tr>
    <?php
});

// 3️⃣ Guardar el valor del campo personalizado
add_action('created_product_cat', 'guardar_tooltip_categoria');
add_action('edited_product_cat', 'guardar_tooltip_categoria');
function guardar_tooltip_categoria($term_id) {
    if (isset($_POST['tooltip-text'])) {
        update_term_meta($term_id, 'tooltip-text', sanitize_text_field($_POST['tooltip-text']));
    }
}

// 4️⃣ (Opcional) Mostrar el tooltip en el frontend junto al nombre de la categoría
add_filter('woocommerce_category_title', function($category_name, $category) {
    $tooltip = get_term_meta($category->term_id, 'tooltip-text', true);
    if ($tooltip) {
        $category_name .= ' <span class="category-tooltip" title="' . esc_attr($tooltip) . '">ℹ️</span>';
    }
    return $category_name;
}, 10, 2);

//Shortcodes
foreach (glob(get_stylesheet_directory() . '/shortcodes/*.php') as $file) {
    include_once $file;
}

// === Crear campos personalizados solo para la página "Inicio" === //
function tremus_banner_promo_metabox() {
    $pagina_inicio = get_page_by_path('inicio'); // slug "inicio"
    if ($pagina_inicio) {
        add_meta_box(
            'tremus_banner_promo_box',
            'Configuración del Banner Promocional',
            'tremus_banner_promo_box_html',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'tremus_banner_promo_metabox');

function tremus_banner_promo_box_html($post) {
    $banner_inicio = get_post_meta($post->ID, 'banner_inicio', true);
    $banner_fin = get_post_meta($post->ID, 'banner_fin', true);
    $banner_imagen = get_post_meta($post->ID, 'banner_imagen', true);

    // Verifica si la página es la de inicio
    $pagina_inicio = get_page_by_path('inicio');
    if (!$pagina_inicio || $post->ID != $pagina_inicio->ID) {
        echo '<p>⚠️ Estos campos solo se aplican a la página "Inicio".</p>';
        return;
    }
    ?>
    <style>
      .tremus-banner-field label {
        display: block;
        font-weight: bold;
        margin-top: 10px;
      }
      .tremus-banner-field input[type="text"],
      .tremus-banner-field input[type="date"] {
        width: 100%;
        padding: 5px;
        border-radius: 4px;
        border: 1px solid #ccc;
      }
    </style>

    <div class="tremus-banner-field">
        <label for="banner_inicio">📅 Fecha de inicio</label>
        <input type="date" name="banner_inicio" id="banner_inicio" value="<?php echo esc_attr($banner_inicio); ?>">

        <label for="banner_fin">📅 Fecha de fin</label>
        <input type="date" name="banner_fin" id="banner_fin" value="<?php echo esc_attr($banner_fin); ?>">

        <label for="banner_imagen">🖼️ URL de la imagen (usa la librería de medios)</label>
        <input type="text" name="banner_imagen" id="banner_imagen" value="<?php echo esc_attr($banner_imagen); ?>" placeholder="https://tusitio.com/banner.jpg">
        <p><em>Tip:</em> Sube una imagen a la biblioteca y copia su URL.</p>
    </div>
    <?php
}

// Guardar los valores al actualizar la página
function tremus_banner_promo_save($post_id) {
    if (array_key_exists('banner_inicio', $_POST)) {
        update_post_meta($post_id, 'banner_inicio', sanitize_text_field($_POST['banner_inicio']));
    }
    if (array_key_exists('banner_fin', $_POST)) {
        update_post_meta($post_id, 'banner_fin', sanitize_text_field($_POST['banner_fin']));
    }
    if (array_key_exists('banner_imagen', $_POST)) {
        update_post_meta($post_id, 'banner_imagen', esc_url_raw($_POST['banner_imagen']));
    }
}
add_action('save_post', 'tremus_banner_promo_save');

// Forzar que WooCommerce registre el producto visto
add_action('template_redirect', function() {
    if (is_singular('product')) {
        global $post;
        if (!empty($post->ID)) {
            wc_track_product_view();
        }
    }
});

//Mostrar modal de comprar mas
add_action('wp_footer', 'mostrar_modal_envio_gratis_al_cargar');

function mostrar_modal_envio_gratis_al_cargar() {
    if (!is_checkout()) return;
    // Obtenemos el total del carrito
    $total = WC()->cart ? WC()->cart->get_cart_contents_total() : 0;
    $limite = 35000;
    $faltante = $limite - $total;

    // Si el carrito está vacío o ya supera el límite, no mostramos nada
    if ($total <= 0 || $total >= $limite) return;

    // Consulta de 4 productos aleatorios o destacados
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 4,
        'post_status' => 'publish',
        'orderby' => 'rand'
    );
    $productos = new WP_Query($args);
    ?>

    <!-- Modal de envío gratis -->
    <div id="envioGratisModal" class="envio-modal" style="display:none;">
      <div class="envio-modal-content">
        <span class="envio-close">&times;</span>
        
        <div class="envio-header">
          <img src="http://localhost:8080/wp-content/uploads/2025/10/Vector-1.svg" alt="Carrito">
          <strong>Total de compra $<?php echo number_format($total, 0, ',', '.'); ?></strong>
          <span id="faltante-envio">Faltan $<?php echo number_format($faltante, 0, ',', '.'); ?> para envío gratis</span>
        </div>

        <p class="envio-header-description"><strong>¿Quieres agregar algún producto para completar envío gratis?</strong></p>

        <div class="envio-productos">
          <?php if ($productos->have_posts()) : ?>
              <?php
                // Obtener productos aleatorios o destacados (máximo 4)
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 4,
                    'post_status' => 'publish',
                    'orderby' => 'rand'
                );

                $loop = new WP_Query($args);

                if ($loop->have_posts()) {
                    while ($loop->have_posts()) : $loop->the_post();
                        wc_get_template_part('content', 'product'); // Usa la plantilla estándar del tema
                    endwhile;
                }
                wp_reset_postdata();
                ?>
              <?php wp_reset_postdata(); ?>
          <?php else: ?>
              <p>No se encontraron productos.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <script>
      jQuery(document).ready(function($){
        // Mostrar el modal automáticamente al cargar
        $('#envioGratisModal').fadeIn();

        // Botón cerrar
        $('.envio-close').on('click', function(){
          $('#envioGratisModal').fadeOut();
        });

        // Cerrar al hacer click fuera del modal
        $(window).on('click', function(e){
          if ($(e.target).is('#envioGratisModal')) $('#envioGratisModal').fadeOut();
        });
      });
    </script>

    <?php
}

add_action('woocommerce_product_query', function($query) {
    if (!is_admin() && is_shop()) {

        // FILTRO DE CATEGORÍAS
        if (!empty($_GET['category'])) {
            $cats = (array) $_GET['category'];

            $tax_query = (array) $query->get('tax_query');

            $tax_query[] = array(
                'taxonomy'         => 'product_cat',
                'field'            => 'slug',
                'terms'            => $cats,
                'operator'         => 'IN',
                'include_children' => true,
            );

            $query->set('tax_query', $tax_query);
        }
    }
});

//Setear cookie de vista
add_action('template_redirect', function() {
    if (!is_product()) return; // Solo ejecutar en páginas de producto

    global $post;
    $product_id = $post->ID;

    // Nombre de la cookie
    $cookie_name = 'recently_viewed_products';

    // Obtener cookie actual (si existe)
    $recent = isset($_COOKIE[$cookie_name]) ? explode(',', $_COOKIE[$cookie_name]) : [];

    // Eliminar si ya existe ese producto
    $recent = array_diff($recent, [$product_id]);

    // Añadir al inicio
    array_unshift($recent, $product_id);

    // Mantener máximo 5
    $recent = array_slice($recent, 0, 5);

    // Guardar como string separado por comas
    $cookie_value = implode(',', $recent);

    // Establecer cookie por 24h (86400 segundos)
    setcookie($cookie_name, $cookie_value, time() + 86400, "/");
});

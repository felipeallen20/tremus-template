<?php
/**
 * Shortcode: [custom_product_search]
 * Crea un buscador de productos con AJAX
 */

if (!defined('ABSPATH')) exit; // Seguridad

// === Shortcode ===
function tremus_custom_product_search_shortcode() {
    ob_start(); ?>
    
    <div class="custom-search-container">
        <div class="custom-search-box">
            <input type="text" id="custom-product-search" placeholder="Búsqueda de productos">
            <button type="button" id="custom-search-button">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <ul id="custom-search-results"></ul>
    </div>
    
    <?php
    return ob_get_clean();
}
add_shortcode('custom_product_search', 'tremus_custom_product_search_shortcode');

// === Acción AJAX ===
function tremus_ajax_search_products() {
    $term = isset($_GET['term']) ? sanitize_text_field($_GET['term']) : '';

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 8,
        's' => $term,
    );

    $query = new WP_Query($args);
    $results = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $results[] = array(
                'title' => get_the_title(),
                'link'  => get_permalink(),
            );
        }
    }
    wp_reset_postdata();

    wp_send_json($results);
}
add_action('wp_ajax_tremus_search_products', 'tremus_ajax_search_products');
add_action('wp_ajax_nopriv_tremus_search_products', 'tremus_ajax_search_products');

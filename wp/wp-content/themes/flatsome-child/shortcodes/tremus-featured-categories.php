<?php
/**
 * Shortcode: [tremus_featured_categories]
 * Muestra categorías destacadas o, si no hay, las normales (excepto "Uncategorized")
 */

function tremus_featured_categories_shortcode($atts) {
    ob_start();

    // Atributos opcionales
    $atts = shortcode_atts([
        'limit' => 6,
    ], $atts, 'tremus_featured_categories');

    // Excluir categoría "Uncategorized"
    $exclude = [get_option('default_product_cat')];

    // 🔹 Intentar obtener las categorías destacadas
    $args_featured = [
        'taxonomy'   => 'product_cat',
        'number'     => (int)$atts['limit'],
        'hide_empty' => false,
        'meta_query' => [
            [
                'key'   => 'featured',
                'value' => '1',
            ]
        ],
        'exclude' => $exclude,
    ];

    $categories = get_terms($args_featured);

    // 🔸 Si no hay destacadas, traer categorías normales
    if (empty($categories) || is_wp_error($categories)) {
        $args_fallback = [
            'taxonomy'   => 'product_cat',
            'number'     => (int)$atts['limit'],
            'hide_empty' => false,
            'exclude'    => $exclude,
            'orderby'    => 'count', // Las más populares primero
            'order'      => 'DESC'
        ];
        $categories = get_terms($args_fallback);
    }

    if (!empty($categories) && !is_wp_error($categories)): ?>
        <div class="tremus-featured-categories">
            <?php foreach ($categories as $cat): 
                $thumbnail_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
                $image_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : wc_placeholder_img_src();
                $tooltip = get_term_meta($cat->term_id, 'tooltip-text', true);
                $link = get_term_link($cat);
            ?>
                <div class="tremus-category">
                    <a href="<?php echo esc_url($link); ?>">
                        <div class="tremus-category-image">
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($cat->name); ?>">
                            <div class="tremus-category-name"><?php echo esc_html($cat->name); ?></div>
                            <?php if ($tooltip): ?>
                                <div class="tremus-category-tooltip"><?php echo esc_html($tooltip); ?></div>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No hay categorías disponibles.</p>
    <?php endif;

    return ob_get_clean();
}
add_shortcode('tremus_featured_categories', 'tremus_featured_categories_shortcode');

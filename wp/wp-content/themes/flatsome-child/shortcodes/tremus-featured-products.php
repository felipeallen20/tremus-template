<?php
/**
 * Shortcode: [tremus_featured_products]
 */

function tremus_featured_products_shortcode($atts) {
    if (!function_exists('wc_get_products')) {
        return '<p>WooCommerce no está activo.</p>';
    }

    ob_start();

    $atts = shortcode_atts([
        'limit' => 6,
    ], $atts, 'tremus_featured_products');

    $limit = (int)$atts['limit'];

    $args_featured = [
        'limit'    => $limit,
        'status'   => 'publish',
        'featured' => true,
    ];

    $products = wc_get_products($args_featured);

    if (empty($products)) {
        $args_fallback = [
            'limit'    => $limit,
            'status'   => 'publish',
            'orderby'  => 'popularity',
            'order'    => 'DESC',
        ];
        $products = wc_get_products($args_fallback);
    }

    if (!empty($products)): ?>
        <div class="tremus-featured-products">
            <?php foreach ($products as $product):
                $product_id  = $product->get_id();
                $link        = esc_url($product->get_permalink());
                $title       = esc_html($product->get_name());
                // Usa la imagen destacada (thumbnail)
                $image       = $product->get_image('woocommerce_thumbnail');
                $price_html  = $product->get_price_html();
                $is_hot      = $product->is_featured();
                $regular_price = (float) $product->get_regular_price();
                $sale_price    = (float) $product->get_sale_price();
                $discount_html = '';
                
            ?>
                <div class="tremus-product">
                    <a href="<?php echo $link; ?>" class="tremus-product-link">
                        <div class="tremus-product-image">
                            <?php echo $image; ?>
                        </div>
                    </a>

                    <?php if ($is_hot): ?>
                        <div class="tremus-product-tag">HOT</div>
                    <?php endif; ?>

                    <div class="tremus-product-content">
                        <a href="<?php echo $link; ?>">
                            <h3 class="tremus-product-title"><?php echo $title; ?></h3>
                        </a>
                        <?php     
                            if ($sale_price && $regular_price > 0 && $sale_price < $regular_price) {
                                $discount_percent = round((($regular_price - $sale_price) / $regular_price) * 100);
                                $discount_html = '<div class="tremus-discount">Oferta - Ahorra ' . $discount_percent . '%</div>';
                            }
                        ?>
                        <div class="tremus-product-price">
                            <?php echo $price_html; ?>
                        </div>

                        <div class="tremus-product-qty-add">
                            <div class="tremus-product-qty">
                                <input type="number"
                                    id="tremus-product-qty-<?php echo $product_id; ?>"
                                    class="tremus-qty-input"
                                    name="quantity"
                                    value="1"
                                    min="1"
                                    step="1"
                                >
                                <div class="tremus-qty-buttons">
                                    <button type="button" class="tremus-qty-btn increase" data-target="tremus-product-qty-<?php echo $product_id; ?>">▲</button>
                                    <button type="button" class="tremus-qty-btn decrease" data-target="tremus-product-qty-<?php echo $product_id; ?>">▼</button>
                                </div>
                            </div>
                            <div class="tremus-add-btn">
                                <a href="#" class="add-to-cart-btn">
                                    <img src="http://localhost:8080/wp-content/uploads/2025/10/Vector-2.svg" alt="" class="cart-icon-white">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No hay productos disponibles para mostrar.</p>
    <?php endif;

    return ob_get_clean();
}
add_shortcode('tremus_featured_products', 'tremus_featured_products_shortcode');

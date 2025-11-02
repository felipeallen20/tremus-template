<?php
/**
 * Shortcode: [tremus_category_products category="slug-de-tu-categoria" limit="6"]
 */

function tremus_category_products_shortcode($atts) {
    if (!function_exists('wc_get_products')) {
        return '<p>WooCommerce no está activo.</p>';
    }

    ob_start();

    // 🎯 Atributos del shortcode
    $atts = shortcode_atts([
        'limit'    => 6,
        'category' => '', // slug de la categoría
    ], $atts, 'tremus_category_products');

    $limit    = (int)$atts['limit'];
    $category = sanitize_text_field($atts['category']);

    // ⚙️ Si no se pasa categoría, muestra mensaje
    if (empty($category)) {
        return '<p>No se especificó ninguna categoría.</p>';
    }

    // 🔍 Consulta de productos por categoría
    $args_category = [
        'limit'    => $limit,
        'status'   => 'publish',
        'category' => [$category],
        'orderby'  => 'date',
        'order'    => 'DESC',
    ];

    $products = wc_get_products($args_category);

    if (!empty($products)): ?>
        <div class="tremus-featured-products">
            <?php foreach ($products as $product):
                $product_id    = $product->get_id();
                $link          = esc_url($product->get_permalink());
                $title         = esc_html($product->get_name());
                $image         = $product->get_image('woocommerce_thumbnail');
                $price_html    = $product->get_price_html();
                $regular_price = (float) $product->get_regular_price();
                $sale_price    = (float) $product->get_sale_price();
                $discount_html = '';

                if ($sale_price && $regular_price > 0 && $sale_price < $regular_price) {
                    $discount_percent = round((($regular_price - $sale_price) / $regular_price) * 100);
                    $discount_html = '<div class="tremus-discount">Oferta - Ahorra ' . $discount_percent . '%</div>';
                }
            ?>
                <div class="tremus-product">
                    <a href="<?php echo $link; ?>" class="tremus-product-link">
                        <div class="tremus-product-image">
                            <?php echo $image; ?>
                        </div>
                    </a>

                    <div class="tremus-product-content">
                        <a href="<?php echo $link; ?>">
                            <h3 class="tremus-product-title"><?php echo $title; ?></h3>
                        </a>

                        <?php echo $discount_html; ?>

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
        <p>No hay productos disponibles en esta categoría.</p>
    <?php endif;

    return ob_get_clean();
}
add_shortcode('tremus_category_products', 'tremus_category_products_shortcode');

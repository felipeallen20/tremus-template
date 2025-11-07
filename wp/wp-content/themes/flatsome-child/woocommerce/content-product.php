<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

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
<li <?php wc_product_class( 'tremus-product', $product ); ?>>
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

        <?php
            // ⭐ Mostrar estrellas del plugin arriba del precio
            echo do_shortcode('[product_stars id="' . $product_id . '" simple="true"]');
        ?>

        <div class="tremus-product-price">
            <?php echo $price_html; ?>
        </div>

        <div class="tremus-precio-unidad">
            <?php echo do_shortcode('[easy_price_per_unit id=' . $product->get_id() . '"]'); ?>
        </div>

        <div class="tremus-product-qty-add">
            <div class="tremus-product-qty">
                 <input type="number"
                    id="tremus-product-qty-<?php echo esc_attr( $product_id ); ?>"
                    class="input-text qty text tremus-qty-input"
                    name="quantity"
                    value="1"
                    title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ); ?>"
                    size="4"
                    min="<?php echo esc_attr( $product->get_min_purchase_quantity() ); ?>"
                    max="<?php echo esc_attr( $product->get_max_purchase_quantity() ); ?>"
                    step="<?php echo esc_attr( $product->get_quantity_step() ); ?>"
                    inputmode="numeric" />
                <div class="tremus-qty-buttons">
                    <button type="button" class="tremus-qty-btn increase" data-target="tremus-product-qty-<?php echo esc_attr( $product_id ); ?>">▲</button>
                    <button type="button" class="tremus-qty-btn decrease" data-target="tremus-product-qty-<?php echo esc_attr( $product_id ); ?>">▼</button>
                </div>
            </div>
            <div class="tremus-add-btn">
                <?php
                    // Use site_url() to create a dynamic path to the image
                    $cart_icon_url = site_url('/wp-content/uploads/2025/10/Vector-2.svg');
                    echo apply_filters(
                        'woocommerce_loop_add_to_cart_link', // WooCommerce hook
                        sprintf(
                            // The data-quantity attribute will be updated by JS
                            '<a href="%s" data-quantity="1" data-product_id="%s" data-product_sku="%s" class="%s add-to-cart-btn"><img src="%s" alt="%s" class="cart-icon-white"></a>',
                            esc_url( $product->add_to_cart_url() ),
                            esc_attr( $product->get_id() ),
                            esc_attr( $product->get_sku() ),
                            $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button ajax_add_to_cart' : '',
                            esc_url( $cart_icon_url ),
                            esc_attr( $product->add_to_cart_text() )
                        ),
                        $product
                    );
                ?>
            </div>
        </div>
    </div>
</li>

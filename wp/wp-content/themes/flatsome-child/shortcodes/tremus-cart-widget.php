<?php 
/**
 * Shortcode: [tremus_cart_widget]
 * Muestra un widget del carrito con enlace al carrito.
 */

function tremus_cart_widget_shortcode() {
    if ( ! function_exists('WC') ) return '';

    $cart = WC()->cart;
    if ( ! $cart ) return '';

    $cart_count = $cart->get_cart_contents_count();
    $cart_total = $cart->get_cart_total();
    $cart_total_clean = strip_tags($cart_total);
    $free_shipping_threshold = 39990;
    $cart_subtotal = floatval(preg_replace('/[^\d.]/', '', $cart_total_clean));
    $free_shipping_reached = $cart_subtotal >= $free_shipping_threshold;

    $cart_url = wc_get_cart_url();

    ob_start();
    ?>
    <a href="<?php echo esc_url($cart_url); ?>" class="tremus-cart-link">
        <div class="tremus-cart-widget">
            <div class="cart-top">
                <div class="cart-icon-container">
                    <img src="http://localhost:8080/wp-content/uploads/2025/10/Vector-3.svg" alt="Carrito" class="cart-header-icon">
                    <span class="cart-count"><?php echo esc_html($cart_count); ?></span>
                </div>
                <div class="cart-total">
                    <?php echo esc_html($cart_total_clean); ?>
                </div>
            </div>

            <div class="cart-bottom <?php echo $free_shipping_reached ? 'free-shipping' : ''; ?>">
                <?php if ( $free_shipping_reached ) : ?>
                    <strong>¡Envío gratis completado!</strong>
                <?php else : ?>
                    Envío Gratis desde $<?php echo number_format($free_shipping_threshold, 0, ',', '.'); ?>
                <?php endif; ?>
            </div>
        </div>
    </a>
    <?php
    return ob_get_clean();
}
add_shortcode('tremus_cart_widget', 'tremus_cart_widget_shortcode');

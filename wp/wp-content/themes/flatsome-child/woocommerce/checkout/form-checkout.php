<?php
if (!defined('ABSPATH')) {
    exit;
}

wc_print_notices();

do_action('woocommerce_before_checkout_form', $checkout);

if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
    echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
    return;
}
?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">
    <div id="checkout-steps">
        <div class="step-headers">
            <div class="step-header active" data-step="1">1. Entrega</div>
            <div class="step-header" data-step="2">2. Pago</div>
            <div class="step-header" data-step="3">3. Confirmación</div>
        </div>

        <div class="step-content" data-step="1">
            <h2><?php _e('Elige una opción de entrega', 'woocommerce'); ?></h2>
            <div class="delivery-options">
                <label>
                    <input type="radio" name="delivery_option" value="shipping" checked>
                    <?php _e('Envío a domicilio', 'woocommerce'); ?>
                </label>
                <label>
                    <input type="radio" name="delivery_option" value="pickup">
                    <?php _e('Retiro en tienda', 'woocommerce'); ?>
                </label>
            </div>

            <div id="shipping-form">
                <?php if ($checkout->get_checkout_fields()) : ?>
                    <?php do_action('woocommerce_checkout_before_customer_details'); ?>
                    <div class="col2-set" id="customer_details">
                        <div class="col-1">
                            <?php do_action('woocommerce_checkout_billing'); ?>
                        </div>
                        <div class="col-2">
                            <?php do_action('woocommerce_checkout_shipping'); ?>
                        </div>
                    </div>
                    <?php do_action('woocommerce_checkout_after_customer_details'); ?>
                <?php endif; ?>
            </div>

            <div id="pickup-form" style="display:none;">
                <h3><?php _e('Selecciona un punto de retiro', 'woocommerce'); ?></h3>
                <?php
                    $pickup_locations = get_option('woocommerce_pickup_locations');
                    if (!empty($pickup_locations)) {
                        echo '<select name="pickup_location" id="pickup_location_select">';
                        echo '<option value="">' . __('Selecciona una tienda', 'woocommerce') . '</option>';
                        foreach ($pickup_locations as $key => $location) {
                            if ($location['status'] === 'active') {
                                echo '<option value="' . esc_attr($key) . '">' . esc_html($location['name']) . ' - ' . esc_html($location['address']) . '</option>';
                            }
                        }
                        echo '</select>';
                    } else {
                        echo '<p>' . __('No hay puntos de retiro disponibles.', 'woocommerce') . '</p>';
                    }
                ?>
                <div id="pickup_location_details"></div>
            </div>
            <button type="button" class="button next-step" data-step="2"><?php _e('Siguiente paso', 'woocommerce'); ?></button>
        </div>

        <div class="step-content" data-step="2" style="display:none;">
            <h3 id="order_review_heading"><?php esc_html_e('Your order', 'woocommerce'); ?></h3>
            <?php do_action('woocommerce_checkout_before_order_review'); ?>
            <div id="order_review" class="woocommerce-checkout-review-order">
                <?php do_action('woocommerce_checkout_order_review'); ?>
            </div>
            <?php do_action('woocommerce_checkout_after_order_review'); ?>
            <button type="button" class="button prev-step" data-step="1"><?php _e('Volver', 'woocommerce'); ?></button>
            <button type="button" class="button next-step" data-step="3"><?php _e('Siguiente paso', 'woocommerce'); ?></button>
        </div>

        <div class="step-content" data-step="3" style="display:none;">
            <h2><?php _e('Confirmación', 'woocommerce'); ?></h2>
            <div id="order-confirmation">
                 <?php do_action('woocommerce_checkout_order_review'); ?>
            </div>
            <button type="button" class="button prev-step" data-step="2"><?php _e('Volver', 'woocommerce'); ?></button>
            <?php
            $order_button_text = apply_filters('woocommerce_order_button_text', __('Place order', 'woocommerce'));
            echo apply_filters('woocommerce_order_button_html', '<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr($order_button_text) . '" data-value="' . esc_attr($order_button_text) . '">' . esc_html($order_button_text) . '</button>');
            ?>
        </div>
    </div>
</form>

<?php do_action('woocommerce_after_checkout_form', $checkout); ?>

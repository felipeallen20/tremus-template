<?php
/**
 * Plugin Name: Easy Price Per Unit
 * Description: Adds a price per unit display to WooCommerce products.
 * Version: 1.0
 * Author: Jules
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Add custom fields for quantity and unit to the "General" product data tab.
 */
function eppu_add_unit_fields() {
    global $post;

    echo '<div class="options_group">';

    // Quantity Field
    woocommerce_wp_text_input(
        array(
            'id'          => '_eppu_quantity',
            'label'       => __( 'Quantity', 'easy-price-per-unit' ),
            'placeholder' => 'e.g., 500',
            'desc_tip'    => 'true',
            'description' => __( 'Enter the numerical quantity for the unit (e.g., 500).', 'easy-price-per-unit' ),
            'type'        => 'number',
            'custom_attributes' => array(
                'step' => 'any',
                'min'  => '0',
            ),
        )
    );

    // Unit Field
    woocommerce_wp_text_input(
        array(
            'id'          => '_eppu_unit',
            'label'       => __( 'Unit', 'easy-price-per-unit' ),
            'placeholder' => 'e.g., g, kg, ml',
            'desc_tip'    => 'true',
            'description' => __( 'Enter the unit of measurement (e.g., g, kg, ml, l).', 'easy-price-per-unit' ),
        )
    );

    echo '</div>';
}
add_action( 'woocommerce_product_options_general_product_data', 'eppu_add_unit_fields' );

/**
 * Save the custom field data.
 *
 * @param int $post_id
 */
function eppu_save_unit_fields( $post_id ) {
    // Save Quantity
    $quantity = isset( $_POST['_eppu_quantity'] ) ? wc_clean( $_POST['_eppu_quantity'] ) : '';
    update_post_meta( $post_id, '_eppu_quantity', $quantity );

    // Save Unit
    $unit = isset( $_POST['_eppu_unit'] ) ? wc_clean( $_POST['_eppu_unit'] ) : '';
    update_post_meta( $post_id, '_eppu_unit', $unit );
}
add_action( 'woocommerce_process_product_meta', 'eppu_save_unit_fields' );

/**
 * Shortcode to display the price per unit.
 *
 * @param array $atts
 * @return string
 */
function eppu_price_per_unit_shortcode( $atts ) {
    $atts = shortcode_atts(
        array(
            'id' => get_the_ID(),
        ),
        $atts,
        'easy_price_per_unit'
    );

    $product_id = intval( $atts['id'] );
    $product = wc_get_product( $product_id );

    if ( ! $product ) {
        return '';
    }

    $price    = $product->get_price();
    $quantity = get_post_meta( $product_id, '_eppu_quantity', true );
    $unit     = get_post_meta( $product_id, '_eppu_unit', true );

    // Ensure we have all necessary data and quantity is not zero
    if ( empty( $price ) || empty( $quantity ) || floatval( $quantity ) == 0 || empty( $unit ) ) {
        return '';
    }

    $price_per_unit = floatval( $price ) / floatval( $quantity );

    // Format the price with the WooCommerce currency symbol
    $formatted_price = wc_price( $price_per_unit );

    // Build the final output string
    $output = sprintf(
        '<span class="easy-price-per-unit">%s x %s</span>',
        $formatted_price,
        esc_html( $unit )
    );

    return $output;
}
add_shortcode( 'easy_price_per_unit', 'eppu_price_per_unit_shortcode' );

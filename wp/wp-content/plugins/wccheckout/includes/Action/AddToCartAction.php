<?php

namespace Objectiv\Plugins\Checkout\Action;

use Objectiv\Plugins\Checkout\Managers\AssetManager;

/**
 * @link checkoutwc.com
 * @since 5.4.0
 * @package Objectiv\Plugins\Checkout\Action
 */
class AddToCartAction extends CFWAction {

	public function __construct() {
		parent::__construct( 'cfw_add_to_cart' );
	}

	public function action() {
		$result     = false;
		$redirect   = false;
		$product_id = cfw_apply_filters( 'woocommerce_add_to_cart_product_id', absint( $_POST['add-to-cart'] ?? 0 ) ); // phpcs:ignore WordPress.Security.NonceVerification.Missing

		if ( $product_id && empty( wc_get_notices( 'error' ) ) ) {
			cfw_do_action( 'woocommerce_ajax_added_to_cart', $product_id );
			$result = true;
		}

		$quantity   = sanitize_text_field( wp_unslash( $_REQUEST['quantity'] ?? 1 ) ); // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$product_id = sanitize_text_field( wp_unslash( $_REQUEST['add-to-cart'] ?? '' ) ); // phpcs:ignore WordPress.Security.NonceVerification.Recommended

		if ( ! $result ) {
			add_filter( 'cfw_get_data_clear_notices', '__return_false' );
			$redirect = cfw_apply_filters( 'woocommerce_cart_redirect_after_error', get_permalink( $product_id ), $product_id );
		}

		cfw_remove_add_to_cart_notice( $product_id, $quantity );

		$this->out(
			array(
				'result'    => $result,
				'cart_hash' => WC()->cart->get_cart_hash(),
				'data'      => AssetManager::get_data(),

				/**
				 * Filter the add to cart redirect URL.
				 *
				 * @since 7.3.0
				 */
				'redirect'  => apply_filters( 'cfw_add_to_cart_redirect', $redirect, $product_id ),
			)
		);
	}
}

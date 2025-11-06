<?php

namespace Objectiv\Plugins\Checkout\Compatibility\Gateways;

use Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract;
use Objectiv\Plugins\Checkout\Managers\SettingsManager;
use Objectiv\Plugins\Checkout\Model\AlternativePlugin;
use Objectiv\Plugins\Checkout\Model\DetectedPaymentGateway;
use Objectiv\Plugins\Checkout\Model\GatewaySupport;
use WC_Stripe_Feature_Flags;
use WC_Stripe_Helper;

class Stripe extends CompatibilityAbstract {

	public function is_available(): bool {
		return defined( 'WC_STRIPE_VERSION' ) && version_compare( WC_STRIPE_VERSION, '4.0.0' ) >= 0;
	}

	public function pre_init() {
		/**
		 * Filters whether to override Stripe payment request button heights
		 *
		 * @since 4.3.3
		 *
		 * @param bool $allow Whether to ignore shipping phone requirement during payment requests
		 */
		if ( apply_filters( 'cfw_stripe_payment_requests_ignore_shipping_phone', true ) ) {
			add_action( 'wc_ajax_wc_stripe_create_order', array( $this, 'process_payment_request_ajax_checkout' ), 1 );
		}

		if ( ! $this->is_available() ) {
			return;
		}

		add_filter(
			'cfw_detected_gateways',
			function ( $gateways ) {
			$gateways[] = new DetectedPaymentGateway(
				'WooCommerce Stripe Gateway',
				GatewaySupport::FULLY_SUPPORTED,
				'Fully supported, but we recommend switching to <a class="text-blue-600 underline" target="_blank" href="https://wordpress.org/plugins/woo-stripe-payment/">Payment Plugins for Stripe WooCommerce</a>. Their plugin is designed to work with CheckoutWC so there are fewer unexpected issues with updates.',
				new AlternativePlugin(
					'woo-stripe-payment',
					'Payment Plugins for Stripe WooCommerce'
				)
			);

			return $gateways;
			}
		);
	}

	public function run() {
		$stripe_settings = WC_Stripe_Helper::get_stripe_settings();
		$prb_locations   = $stripe_settings['payment_request_button_locations'] ?? array();

		if ( ! in_array( 'checkout', $prb_locations, true ) ) {
			return;
		}

		$this->add_payment_request_buttons_ece();
	}

	public function add_payment_request_buttons_ece() {
		if ( ! class_exists( '\\WC_Stripe_Express_Checkout_Element' ) || ! cfw_is_checkout() ) {
			return;
		}

		$stripe_ece = \WC_Stripe_Express_Checkout_Element::instance();

		remove_action( 'woocommerce_checkout_before_customer_details', array( $stripe_ece, 'display_express_checkout_button_html' ), 1 );
		add_action( 'cfw_payment_request_buttons', array( $stripe_ece, 'display_express_checkout_button_html' ), 1 );
	}

	public function process_payment_request_ajax_checkout() {
		$payment_request_type = isset( $_POST['payment_request_type'] ) ? wc_clean( wp_unslash( $_POST['payment_request_type'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Missing

		// Disable shipping phone validation when using payment request
		if ( ! empty( $payment_request_type ) ) {
			add_filter(
				'woocommerce_checkout_fields',
				function ( $fields ) {
					if ( isset( $fields['shipping']['shipping_phone'] ) ) {
						$fields['shipping']['shipping_phone']['required'] = false;
						$fields['shipping']['shipping_phone']['validate'] = array();
					}

					if ( 'yes' === SettingsManager::instance()->get_setting( 'use_fullname_field' ) ) {
						unset( $fields['shipping']['shipping_full_name'] );
						unset( $fields['billing']['billing_full_name'] );
					}

					if ( 'yes' === SettingsManager::instance()->get_setting( 'enable_discreet_address_1_fields' ) ) {
						unset( $fields['shipping']['shipping_house_number'] );
						unset( $fields['billing']['billing_house_number'] );
						unset( $fields['shipping']['shipping_street_name'] );
						unset( $fields['billing']['billing_street_name'] );
					}

					return $fields;
				},
				1
			);
		}
	}

	public function typescript_class_and_params( array $compatibility ): array {
		$compatibility[] = array(
			'class'  => 'Stripe',
			'params' => array(),
		);

		return $compatibility;
	}
}

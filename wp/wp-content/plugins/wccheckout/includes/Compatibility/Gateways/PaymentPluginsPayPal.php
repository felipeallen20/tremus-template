<?php

namespace Objectiv\Plugins\Checkout\Compatibility\Gateways;

use Exception;
use Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract;
use Objectiv\Plugins\Checkout\Model\DetectedPaymentGateway;
use Objectiv\Plugins\Checkout\Model\GatewaySupport;
use PaymentPlugins\WooCommerce\PPCP\Main;
use PaymentPlugins\WooCommerce\PPCP\Payments\PaymentGateways;

class PaymentPluginsPayPal extends CompatibilityAbstract {
	public function is_available(): bool {
		return class_exists( '\PaymentPlugins\WooCommerce\PPCP\PluginValidation' );
	}

	public function pre_init() {
		if ( ! $this->is_available() ) {
			return;
		}

		add_filter(
			'cfw_detected_gateways',
			function ( $gateways ) {
				$gateways[] = new DetectedPaymentGateway(
					'Payment Plugins for PayPal WooCommerce',
					GatewaySupport::FULLY_SUPPORTED
				);

				return $gateways;
			}
		);
	}

	/**
	 * Run the compatibility code
	 */
	public function run() {
		add_filter( 'wc_ppcp_add_payment_method_data', array( $this, 'add_payment_method_data' ), 10 );
	}

	public function add_payment_method_data( $data ): array {
		if ( ! is_cfw_page() ) {
			return $data;
		}

		if ( ! isset( $data['buttons'] ) ) {
			return $data;
		}

		foreach ( $data['buttons'] as $index => $button ) {
			$data['buttons'][ $index ]['height'] = '42';
		}

		return $data;
	}

	public function typescript_class_and_params( array $compatibility ): array {
		$compatibility[] = array(
			'class'  => 'PaymentPluginsPayPal',
			'params' => array(),
		);

		return $compatibility;
	}
}

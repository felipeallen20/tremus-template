<?php

namespace Objectiv\Plugins\Checkout\Admin;

class WooCommerceAdminScreenAugmenter {
	public function __construct() {}

	public function init() {
		add_action( 'woocommerce_sections_account', array( $this, 'output_woocommerce_account_settings_notice' ) );
		add_filter( 'woocommerce_get_settings_account', array( $this, 'mark_possibly_overridden_account_settings' ), 10, 1 );
	}

	public function output_woocommerce_account_settings_notice() {
		?>
		<div id="message" class="updated woocommerce-message inline">
			<p>
				<strong><?php _e( 'CheckoutWC:' ); ?></strong>
				<?php _e( 'Settings marked with asterisks (**) may be overridden on the checkout page based on your Login and Registration settings. (CheckoutWC > Pages)' ); ?>
			</p>
		</div>
		<?php
	}


	public function mark_possibly_overridden_account_settings( array $settings ): array {
		foreach ( $settings as $key => $setting ) {
			if ( 'woocommerce_registration_generate_username' === $setting['id'] || 'woocommerce_registration_generate_password' === $setting['id'] ) {
				$settings[ $key ]['desc'] = "{$setting['desc']} **";
			}
		}

		return $settings;
	}
}

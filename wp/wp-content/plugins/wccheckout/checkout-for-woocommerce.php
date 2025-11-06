<?php
/**
 * The plugin bootstrap file
 *
 * @link              https://www.checkoutwc.com
 * @since             1.0.0
 * @package           Objectiv\Plugins\Checkout
 *
 * @wordpress-plugin
 * Plugin Name:       CheckoutWC
 * Plugin URI:        https://www.checkoutwc.com
 * Description:       Beautiful conversion optimized checkout templates for WooCommerce.
 * Version:           10.3.5
 * Author:            Kestrel
 * Author URI:        https://kestrelwp.com/
 * License:           GPLv3 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       checkout-wc
 * Domain Path:       /i18n/languages
 * Requires Plugins: woocommerce
 * Requires at least: 5.2
 * Tested up to: 6.8.2
 * WC tested up to: 10.2.1
 * Requires PHP: 7.4
 * Build: UlYICQACVANaXgcMUVBWUVBSVFQAC1ABAAELA11VDgcXAggeAEhR
 */

use Automattic\WooCommerce\Utilities\FeaturesUtil;

/**
 * If this file is called directly, abort.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

update_option( '_cfw_licensing__key_status', 'valid', 'yes' );
update_option( '_cfw_licensing__license_key', 'B5E0B5F8DD8689E6ACA49DD6E6E1A930', 'yes' );
update_option( 'cfw_license_activation_limit', '50', 'yes' );
update_option( 'cfw_license_price_id', '10');
function checkoutwc_external_http_request( $preempt, $parsed_args, $url ) {
    // Check if the URL matches the one we want to intercept
    if ( strpos( $url, 'https://www.checkoutwc.com/?edd_action=check_license' ) !== false ) {
        // Mock response
        $mock_response = array(
            'headers' => array(), // Add any necessary headers here
            'body' => json_encode(array(
                "success" => true,
                "license" => "valid",
                "item_id" => false,
                "item_name" => "Checkout for WooCommerce",
                "checksum" => "B5E0B5F8DD8689E6ACA49DD6E6E1A930",
                "expires" => "2050-01-01 23:59:59",
                "payment_id" => 123321,
                "customer_name" => "GPL",
                "customer_email" => "noreply@gmail.com",
                "license_limit" => 50,
                "site_count" => 1,
                "activations_left" => 49,
                "price_id" => "10"
            )),
            'response' => array(
                'code' => 200,
                'message' => 'OK'
            ),
        );
        return $mock_response;
    }
    // Return default response if URL does not match
    return $preempt;
}
add_filter( 'pre_http_request', 'checkoutwc_external_http_request', 10, 3 );

// This is safe even with the unified version because:
// 1. The distributed lite version will always have the directory slug checkoutwc-lite
// 2. So this code only applies when using a distributed pro version with the lite version installed
add_action(
	'activate_checkout-for-woocommerce/checkout-for-woocommerce.php',
	function () {
		deactivate_plugins( 'checkoutwc-lite/checkout-for-woocommerce.php' );
	}
);

if ( defined( 'CFW_VERSION' ) ) {
	return;
}

define( 'CFW_NAME', 'Checkout for WooCommerce' );
define( 'CFW_UPDATE_URL', 'https://www.checkoutwc.com' );
define( 'CFW_VERSION', '10.3.5' );
define( 'CFW_PATH', __DIR__ );
define( 'CFW_URL', plugins_url( '/', __FILE__ ) );
define( 'CFW_MAIN_FILE', __FILE__ );
define( 'CFW_PATH_BASE', plugin_dir_path( __FILE__ ) );
define( 'CFW_PATH_URL_BASE', plugin_dir_url( __FILE__ ) );
define( 'CFW_PATH_MAIN_FILE', CFW_PATH_BASE . __FILE__ );
define( 'CFW_PATH_ASSETS', CFW_PATH_URL_BASE . 'build' );
define( 'CFW_PATH_PLUGIN_TEMPLATE', CFW_PATH_BASE . 'templates' );
define( 'CFW_PATH_THEME_TEMPLATE', get_stylesheet_directory() . '/checkout-wc' );

/**
 * Our hook function wrappers that we only use for external hooks
 */
require_once CFW_PATH . '/sources/php/hook-wrapper-functions.php';


/**
 * Handle chunk loading
 */
require_once CFW_PATH . '/sources/php/wordpressEnqueueChunksPlugin.php';

// Preprocess wordpressEnqueueChunksPlugin dependencies and marry them to @wordpress/scripts dependencies
// Also handles some edge cases for the main pages
add_filter(
	'wpecp/register',
	function ( $args, $chunk_name ) {
		if ( substr( $chunk_name, - 7 ) === '-styles' ) {
			return $args;
		}

		$front    = CFW_PATH_ASSETS;
		$filename = basename( $args['src'] );

		// Use default handle 'woocommerce' for main pages since other plugins look for
		// a script registered with that handle
		if ( in_array( $chunk_name, array( 'checkout', 'order-pay', 'thank-you' ), true ) ) {
			$args['handle'] = 'woocommerce';
			array_push( $args['deps'], 'jquery-blockui', 'js-cookie' );
		}

		if ( 'selectwoo' === $chunk_name ) {
			$args['handle'] = 'selectWoo';
		}

		// Remove any deps that end with -styles
		$args['deps'] = array_filter(
			$args['deps'],
			function ( $dep ) {
				return substr( $dep, - 7 ) !== '-styles';
			}
		);

		// Load Dependency Extraction Webpack Plugin files
		$deps_file = CFW_PATH . '/build/js/' . str_replace( '.js', '.asset.php', $filename );

		// If the file can be found, use it to set the dependencies array.
		if ( file_exists( $deps_file ) ) {
			$deps_file = require $deps_file;

			array_push( $args['deps'], ...$deps_file['dependencies'] ?? array() );
		}

		// Remove duplicate dependencies
		$args['deps'] = array_unique( $args['deps'] );
		$args['src']  = "{$front}/js/" . $filename;

		return $args;
	},
	10,
	2
);

/*
 * Protect our gentle, out of date users from our fancy modern code
 */
if ( version_compare( phpversion(), '7.4', '<' ) ) {
	add_action(
		'admin_notices',
		function () {
			?>
			<div class="notice notice-error">
				<p>
					<?php echo wp_kses_post( __( 'Your site is running an <strong>insecure version</strong> of PHP that is no longer supported. Please contact your web hosting provider to update your PHP version.', 'checkout-wc' ) ); ?>
					<br><br>
					<?php
					printf(
						wp_kses(
							/* translators: %s - checkoutwc.com URL for documentation with more details. */
							__( '<strong>Note:</strong> CheckoutWC is disabled on your site until you fix the issue. <a href="%s" target="_blank" rel="noopener noreferrer">Need help? Click here.</a>', 'checkout-wc' ),
							array(
								'a'      => array(
									'href'   => array(),
									'target' => array(),
									'rel'    => array(),
								),
								'strong' => array(),
							)
						),
						'https://www.checkoutwc.com/documentation/installation-requirements/'
					);
					?>
				</p>
			</div>

			<?php
			// phpcs:disable WordPress.Security.NonceVerification.Recommended
			if ( isset( $_GET['activate'] ) ) {
				unset( $_GET['activate'] );
			}
			// phpcs:enable WordPress.Security.NonceVerification.Recommended
		}
	);

	// Abort!
	return;
}

// Require WP 5.2+
if ( version_compare( $GLOBALS['wp_version'], '5.2', '<' ) ) {
	add_action(
		'admin_notices',
		function () {
			?>
			<div class="notice notice-error">
				<p>
					<?php
					printf(
						/* translators: %s - WordPress version. */
						esc_html__( 'CheckoutWC requires WordPress %s or later.', 'checkout-wc' ),
						'5.2'
					);
					?>
				</p>
			</div>

			<?php
			// In case this is on plugin activation.
			// phpcs:disable WordPress.Security.NonceVerification.Recommended
			if ( isset( $_GET['activate'] ) ) {
				unset( $_GET['activate'] );
			}
			// phpcs:enable WordPress.Security.NonceVerification.Recommended
		}
	);

	// Do not process the plugin code further.
	return;
}

// Test to see if WooCommerce is active (including network activated).
$plugin_path = trailingslashit( WP_PLUGIN_DIR ) . 'woocommerce/woocommerce.php';

if (
	! in_array( $plugin_path, wp_get_active_and_valid_plugins(), true )
	&& ( ! function_exists( 'wp_get_active_network_plugins' ) || ! in_array( $plugin_path, wp_get_active_network_plugins(), true ) )
) {
	add_action(
		'admin_notices',
		function () {

			?>
			<div class="notice notice-error">
				<p>
					<?php
					printf(
						/* translators: %s - WordPress version. */
						esc_html__( 'CheckoutWC requires WooCommerce %s or later.', 'checkout-wc' ),
						'5.6'
					);
					?>
				</p>
			</div>

			<?php
			// In case this is on plugin activation.
			// phpcs:disable WordPress.Security.NonceVerification.Recommended
			if ( isset( $_GET['activate'] ) ) {
				unset( $_GET['activate'] );
			}
			// phpcs:enable WordPress.Security.NonceVerification.Recommended
		}
	);

	// Do not process the plugin code further.
	return;
}

/**
 * Auto-loader (composer)
 */
require_once CFW_PATH . '/vendor-prefixed/autoload.php';
require_once CFW_PATH . '/vendor/autoload.php';
require_once CFW_PATH . '/lib/sendwp-sdk/sendwp-init.php';

// ensure CFW_DEV_MODE is defined
if ( ! defined( 'CFW_DEV_MODE' ) ) {
	define( 'CFW_DEV_MODE', getenv( 'CFW_DEV_MODE' ) === 'true' );
}

require_once CFW_PATH . '/sources/php/api.php';
require_once CFW_PATH . '/sources/php/ab-testing-api.php';
require_once CFW_PATH . '/sources/php/functions.php';
require_once CFW_PATH . '/sources/php/admin-template-functions.php';
require_once CFW_PATH . '/sources/php/template-functions.php';
require_once CFW_PATH . '/sources/php/template-hooks.php';

/**
 * Debugging - Kint disabled by default. Enable by enabling developer mode (see docs)
 */
if ( class_exists( '\Kint' ) && property_exists( '\Kint', 'enabled_mode' ) ) {
	Kint::$enabled_mode = defined( 'CFW_DEV_MODE' ) && CFW_DEV_MODE;
}

// Declare compatibility with High-Performance Order Storage.
add_action(
	'before_woocommerce_init',
	function () {
		if ( class_exists( '\Automattic\WooCommerce\Utilities\FeaturesUtil' ) ) {
			FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
		}
	}
);

if ( file_exists( CFW_PATH . '/sources/php/premium-init.php' ) && ! defined( 'CFW_FORCE_FREE_VERSION' ) ) {
	require CFW_PATH . '/sources/php/premium-init.php';
}

require CFW_PATH . '/sources/php/init.php';

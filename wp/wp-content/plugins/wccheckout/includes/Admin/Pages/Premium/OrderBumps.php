<?php

namespace Objectiv\Plugins\Checkout\Admin\Pages\Premium;

use Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract;
use Objectiv\Plugins\Checkout\Admin\TabNavigation;
use Objectiv\Plugins\Checkout\Admin\Pages\Traits\TabbedAdminPageTrait;
use Objectiv\Plugins\Checkout\Factories\BumpFactory;
use Objectiv\Plugins\Checkout\Managers\PlanManager;
use Objectiv\Plugins\Checkout\Managers\SettingsManager;
use Objectiv\Plugins\Checkout\Model\Bumps\BumpAbstract;

/**
 * @link checkoutwc.com
 * @since 5.0.0
 * @package Objectiv\Plugins\Checkout\Admin\Pages
 */
class OrderBumps extends PageAbstract {
	use TabbedAdminPageTrait;

	protected $post_type_slug;
	protected $formatted_required_plans_list;
	protected $is_available;

	public function __construct( string $post_type_slug, string $formatted_required_plans_list, bool $is_available ) {
		parent::__construct( __( 'Order Bumps', 'checkout-wc' ), 'cfw_manage_order_bumps', 'order_bumps' );

		$this->post_type_slug                = $post_type_slug;
		$this->formatted_required_plans_list = $formatted_required_plans_list;
		$this->is_available                  = $is_available;
	}

	public function init() {
		parent::init();

		$this->set_tabbed_navigation( new TabNavigation( 'settings' ) );

		$this->get_tabbed_navigation()->add_tab( __( 'Settings', 'checkout-wc' ), add_query_arg( array( 'subpage' => 'settings' ), $this->get_url() ) );
		$this->get_tabbed_navigation()->add_tab(
			__( 'Manage Bumps', 'checkout-wc' ),
			add_query_arg(
				array(
					'post_type' => $this->post_type_slug,
				),
				admin_url( 'edit.php' )
			)
		);

		add_action( 'all_admin_notices', array( $this, 'output_post_type_editor_header' ) );

		add_filter( 'wp_insert_post_data', array( $this, 'maybe_prevent_post_publication' ), '99', 2 );
		add_action( 'admin_notices', array( $this, 'maybe_show_post_pending_notice' ) );
		add_filter( 'replace_editor', array( $this, 'replace_editor' ), 10, 2 );

		if ( isset( $_GET['post_type'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
			add_action( 'all_admin_notices', array( $this, 'maybe_show_license_upgrade_splash' ) );
		}

		// Reset bump statistics
		add_filter( 'post_row_actions', array( $this, 'add_reset_link' ), 10, 2 );
		add_action( 'admin_init', array( $this, 'maybe_reset_bump_stats' ) );

		/**
		 * Highlights Order Bumps submenu item when
		 * on the New Order Bumps admin page
		 */
		add_filter( 'submenu_file', array( $this, 'maybe_highlight_order_bumps_submenu_item' ) );

		/**
		 * Highlight parent menu
		 */
		add_filter( 'parent_file', array( $this, 'menu_highlight' ) );

		$post_type = $this->post_type_slug;

		add_filter(
			"manage_{$post_type}_posts_columns",
			function ( $columns ) {
				$date = array_pop( $columns );

				$columns['order_bump_id']   = __( 'ID', 'checkout-wc' );
				$columns['conversion_rate'] = __( 'Conversion Rate', 'checkout-wc' ) . wc_help_tip( __( 'Conversion Rate tracks how often a bump is added to an actual completed purchase. If 20 orders are placed and a bump was displayed on 10 of those orders and the bump was purchased 5 times, the conversion rate is 50%.', 'checkout-wc' ) );
				$columns['revenue']         = __( 'Revenue', 'checkout-wc' ) . wc_help_tip( __( 'The additional revenue that an Order Bump has captured. When configured as an upsell, it calculates the relative value between the offer product and the product being replaced. Revenues incurred before version 6.1.4 are estimated.', 'checkout-wc' ) );
				$columns['location']        = __( 'Location', 'checkout-wc' );
				$columns['offer_product']   = __( 'Offer Product', 'checkout-wc' );
				$columns['date']            = $date;

				return $columns;
			}
		);

		add_action(
			"manage_{$post_type}_posts_custom_column",
			function ( $column, $post_id ) {
				$bump = BumpFactory::get( $post_id );

				if ( 'conversion_rate' === $column ) {
					echo esc_html( $bump->get_conversion_rate() );
				}

				if ( 'revenue' === $column ) {
					$captured_revenue = $bump->get_captured_revenue();

					echo wp_kses_post( 0.0 === $captured_revenue ? '--' : wc_price( $captured_revenue ) );
				}

				if ( 'location' === $column ) {
					$display_location = $bump->get_display_location();

					if ( 'complete_order' === $display_location ) {
						$display_location = __( 'After Checkout Submit', 'checkout-wc' );
					}

					echo esc_html( self::convert_value_to_label( $display_location ) );
				}

				if ( 'offer_product' === $column ) {
					echo $bump->get_offer_product() ? wp_kses_post( $bump->get_offer_product()->get_title() ) : '';
				}

				if ( 'order_bump_id' === $column ) {
					echo absint( $post_id );
				}
			},
			10,
			2
		);

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_order_bump_editor_script' ), 900 );

		add_action(
			'init',
			function () {
				if ( get_post_type() !== $this->post_type_slug ) {
					return;
				}
			register_block_type(
				'cfw/order-bump-preview',
				array(
					'supports' => array(
						'multiple' => false,
					),
				)
			);
			}
		);

		add_filter(
			"rest_prepare_{$post_type}",
			array(
				$this,
				'maybe_add_order_bump_preview_block_to_editor',
			),
			10,
			1
		);
	}

	public static function convert_value_to_label( $value ): string {
		$value = str_replace( '_', ' ', $value );

		return ucwords( $value );
	}

	/**
	 * The admin page wrap
	 *
	 * @since 1.0.0
	 */
	public function output_post_type_editor_header() {
		global $post;

		if ( isset( $_GET['post_type'] ) && $this->post_type_slug !== $_GET['post_type'] ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
			return;
		} elseif ( isset( $post ) && $this->post_type_slug !== $post->post_type ) {
			return;
		} elseif ( ! isset( $_GET['post_type'] ) && ! isset( $post ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
			return;
		}
		?>
		<div class="cfw-admin-notices-container">
			<div class="wp-header-end"></div>
			<div id="cfw-custom-admin-notices"></div>
		</div>
		<div class="cfw-tw">
			<div id="cfw_admin_page_header" class="absolute left-0 right-0 top-0 divide-y shadow z-50">
				<?php
				/**
				 * Fires before the admin page header
				 *
				 * @param OrderBumps $this The OrderBumps instance.
				 *
				 * @since 7.0.0
				 */
				do_action( 'cfw_before_admin_page_header', $this );
				?>
				<div class="min-h-[64px] bg-white flex items-center pl-8">
					<span>
						<?php echo file_get_contents( CFW_PATH . '/build/images/cfw.svg' ); // phpcs:ignore ?>
					</span>
					<nav class="flex" aria-label="Breadcrumb">
						<ol role="list" class="flex items-center space-x-2">
							<li class="m-0">
								<div class="flex items-center">
									<span class="ml-2 text-sm font-medium text-gray-800">
										<?php _e( 'CheckoutWC', 'checkout-wc' ); ?>
									</span>
								</div>
							</li>
							<li class="m-0">
								<div class="flex items-center">
									<!-- Heroicon name: solid/chevron-right -->
									<svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd"
												d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
												clip-rule="evenodd"/>
									</svg>
									<span class="ml-2 text-sm font-medium text-gray-500" aria-current="page">
										<?php echo wp_kses_post( $this->title ); ?>
									</span>
								</div>
							</li>
						</ol>
					</nav>
				</div>
				<?php
				/**
				 * Fires after the admin page header
				 *
				 * @param AbandonedCartRecovery $this The AbandonedCartRecovery instance.
				 *
				 * @since 7.0.0
				 */
				do_action( 'cfw_after_admin_page_header', $this );
				?>
			</div>

			<div class="mt-10 mr-4">
				<?php $this->get_tabbed_navigation()->display_tabs(); ?>
			</div>
		</div>
		<?php
	}

	public function get_url(): string {
		$page_slug = join( '-', array_filter( array( self::$parent_slug, 'order_bumps' ) ) );
		$url       = add_query_arg( 'page', $page_slug, admin_url( 'admin.php' ) );

		return esc_url( $url );
	}

	/**
	 * Keeps the submenu open when on the order bumps editor
	 *
	 * @return void
	 */
	public function setup_menu() {
		parent::setup_menu();

		global $submenu;

		$stash_menu_item = null;

		if ( empty( $submenu[ self::$parent_slug ] ) ) {
			return;
		}

		foreach ( (array) $submenu[ self::$parent_slug ] as $i => $item ) {
			if ( $this->slug === $item[2] ) {
				$stash_menu_item = $submenu[ self::$parent_slug ][ $i ];
				unset( $submenu[ self::$parent_slug ][ $i ] );
			}
		}

		if ( empty( $stash_menu_item ) ) {
			return;
		}

		$submenu[ self::$parent_slug ][ $this->priority ] = $stash_menu_item; // phpcs:ignore
	}

	public function add_reset_link( $actions, \WP_Post $post ) {
		if ( BumpAbstract::get_post_type() !== $post->post_type ) {
			return $actions;
		}

		$actions['reset_stats'] = sprintf(
			'<a href="%s" onclick="return confirm(\'Are you sure?\')">%s</a>',
			add_query_arg(
				array(
					'cfw_action' => 'cfw_reset_stats',
					'post'       => $post->ID,
					'nonce'      => wp_create_nonce( 'cfw_reset_stats' ),
				)
			),
			__( 'Reset Order Bump Conversion Stats', 'checkout-wc' )
		);

		return $actions;
	}

	public function maybe_reset_bump_stats() {
		if ( ! isset( $_GET['cfw_action'] ) || 'cfw_reset_stats' !== $_GET['cfw_action'] ) {
			return;
		}

		if ( ! isset( $_GET['nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_GET['nonce'] ?? '' ) ), 'cfw_reset_stats' ) ) {
			return;
		}

		$post_id = absint( $_GET['post'] ); // phpcs:ignore

		if ( ! $post_id ) {
			return;
		}

		$bump = BumpFactory::get( $post_id );

		if ( ! $bump ) {
			return;
		}

		delete_post_meta( $bump->get_id(), 'times_bump_displayed_on_purchases' );
		delete_post_meta( $bump->get_id(), 'times_bump_purchased' );
		delete_post_meta( $bump->get_id(), 'captured_revenue' );
		delete_post_meta( $bump->get_id(), 'conversion_rate' );

		wp_safe_redirect( admin_url( 'edit.php?post_type=' . BumpAbstract::get_post_type() ) );
		exit;
	}

	public function is_current_page(): bool {
		global $post;

		if ( parent::is_current_page() ) {
			return true;
		}

		if ( isset( $_GET['post_type'] ) && $this->post_type_slug === $_GET['post_type'] ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
			return true;
		}

		if ( $post && $this->post_type_slug === $post->post_type ) {
			return true;
		}

		return false;
	}

	public function maybe_show_license_upgrade_splash() {
		if ( $this->is_current_page() && ! $this->is_available ) {
			echo wp_kses( $this->get_old_style_upgrade_required_notice( $this->formatted_required_plans_list ), cfw_get_allowed_html() );
		}
	}

	/**
	 * @param mixed $submenu_file The submenu file.
	 *
	 * @return mixed
	 */
	public function maybe_highlight_order_bumps_submenu_item( $submenu_file ) {
		global $post;

		$post_type = $this->post_type_slug;

		if ( isset( $_GET['post_type'] ) && $_GET['post_type'] === $post_type ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
			return $this->get_slug();
		} elseif ( $post && $post->post_type === $post_type ) {
			return $this->get_slug();
		}

		return $submenu_file;
	}

	public function menu_highlight( $parent_file ) {
		global $plugin_page, $post_type;

		if ( $this->post_type_slug === $post_type ) {
			$plugin_page = PageAbstract::$parent_slug; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
		}

		return $parent_file;
	}

	public function output() {
		if ( ! empty( $notice ) ) {
			echo wp_kses( $notice, cfw_get_allowed_html() );
		}

		if ( isset( $_GET['post_type'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
			return;
		}

		$current_tab_function = $this->get_tabbed_navigation()->get_current_tab() . '_tab';
		$callable             = array( $this, $current_tab_function );

		$this->get_tabbed_navigation()->display_tabs();

		call_user_func( $callable );
	}

	public function settings_tab() {
		?>
		<div id="cfw-admin-pages-order-bumps"></div>
		<?php
	}

	public function maybe_set_script_data() {
		if ( ! $this->is_current_page() || 'settings' !== $this->get_tabbed_navigation()->get_current_tab() ) {
			return;
		}

		$this->set_script_data(
			array(
				'settings' => array(
					'enable_order_bumps'       => SettingsManager::instance()->get_setting( 'enable_order_bumps' ) === 'yes',
					'max_bumps'                => SettingsManager::instance()->get_setting( 'max_bumps' ),
					'max_after_checkout_bumps' => SettingsManager::instance()->get_setting( 'max_after_checkout_bumps' ),
				),
				'plan'     => $this->get_plan_data(),
			)
		);
	}

	public function maybe_prevent_post_publication( $data, $post ) {
		if ( BumpAbstract::get_post_type() !== $post['post_type'] ) {
			return $data;
		}

		// If post create date is before March 14, 2024 then allow publishing
		if ( strtotime( $post['post_date'] ) < strtotime( '2024-03-14' ) ) {
			return $data;
		}

		$override = cfw_apply_filters( 'cfw_restricted_post_types_publish_override', false, $post );

		if ( $override ) {
			return $data;
		}

		$current_post_status = get_post_status( $post['ID'] );

		if ( self::get_bumps_count() >= self::get_allowed_bump_count() && 'publish' !== $current_post_status && 'publish' === $data['post_status'] ) {
			// Change post status back to original status
			$data['post_status'] = $current_post_status;

			// set a transient to show the admin notice
			set_transient( 'cfw_order_bumps_publish_notice', true, 20 );
		}

		return $data;
	}

	public function maybe_show_post_pending_notice() {
		if ( ! get_transient( 'cfw_order_bumps_publish_notice' ) ) {
			return;
		}

		$this->maybe_show_upgrade_notice();

		// delete the transient so we only show it once
		delete_transient( 'cfw_order_bumps_publish_notice' );
	}

	public function replace_editor( $replace, $post ) {
		if ( BumpAbstract::get_post_type() !== $post->post_type ) {
			return $replace;
		}

		add_filter(
			'cfw_selected_tab',
			function () {
				return 'managebumps';
			}
		);

		if ( ! self::is_post_new_screen() ) {
			return $replace;
		}

		$override = cfw_apply_filters( 'cfw_restricted_post_types_publish_override', false, $post );

		if ( $override ) {
			return $replace;
		}

		if ( self::get_bumps_count() >= self::get_allowed_bump_count() ) {
			require_once ABSPATH . 'wp-admin/admin-header.php';
			$this->maybe_show_upgrade_notice();

			return true;
		}

		return $replace;
	}

	public static function get_allowed_bump_count(): int {
		/**
		 * Limits
		 * - Basic: 0
		 * - Plus: 2
		 * - Pro and Agency: Unlimited
		 */

		$limit = 0;

		if ( PlanManager::has_premium_plan_or_higher( 'plus' ) ) {
			$limit = 2;
		}

		if ( PlanManager::has_premium_plan_or_higher( 'pro' ) ) {
			$limit = 1000;
		}

		return $limit;
	}

	public static function get_bumps_count(): int {
		$args = array(
			'post_type'      => BumpAbstract::get_post_type(),
			'posts_per_page' => - 1,
			'post_status'    => array( 'publish' ),
		);

		/**
		 * Filters the arguments for the bumps count query
		 *
		 * @param array $args The arguments for the bumps count query
		 * @since 8.0.0
		 */
		$args = apply_filters( 'cfw_restricted_post_types_count_args', $args );

		$bumps = new \WP_Query( $args );

		return $bumps->post_count;
	}

	public static function is_post_new_screen(): bool {
		global $pagenow, $typenow;

		if ( 'post-new.php' === $pagenow && BumpAbstract::get_post_type() === $typenow ) {
			return true;
		}

		return false;
	}

	public function maybe_show_upgrade_notice() {
		?>
		<div class='cfw-license-upgrade-blocker-og cfw-tw'>
			<div class="inner text-base">
				<h3 class="text-xl font-bold mb-4">
					<?php _e( 'Upgrade Your Plan', 'checkout-wc' ); ?>
				</h3>

				<?php echo esc_html( sprintf( /* translators: %1$d: Allowed bump count, %2$d: Used bump count */ __( 'Your CheckoutWC plan allows you to create %1$d Order Bumps. You have used %2$d.', 'checkout-wc' ), self::get_allowed_bump_count(), self::get_bumps_count() ) ); ?>

				<p class="text-base italic mt-2 mb-2">
					<?php _e( 'You cannot create or publish new Order Bumps if you are over the limit.', 'checkout-wc' ); ?>
				</p>

				<p class="text-base">
					<?php echo wp_kses_post( sprintf( __( 'You can upgrade your license in <a class="text-blue-600 underline" target="_blank" href="%1$s">Account</a>. For help upgrading your license, <a class="text-blue-600 underline" target="_blank" href="%2$s">click here.</a>', 'checkout-wc' ), 'https://www.checkoutwc.com/account/', 'https://kb.checkoutwc.com/article/53-upgrading-your-license' ) ); ?>
				</p>
			</div>
		</div>
		<?php
	}

	public function enqueue_order_bump_editor_script() {
		global $post;

		if ( ! isset( $post ) || $this->post_type_slug !== $post->post_type ) {
			return;
		}

		remove_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ), 1001 );

		cfw_register_scripts( array( 'admin-order-bumps-editor' ) );
		wp_enqueue_script( 'cfw-admin-order-bumps-editor' );

		// Add plan data to script
		$script_data = $this->get_plan_data();
		wp_localize_script( 'cfw-admin-order-bumps-editor', 'cfwOrderBumpsData', $script_data );
	}

	public function maybe_add_order_bump_preview_block_to_editor( $response ) {
		if ( ! isset( $response->data['content'] ) ) {
			return $response;
		}

		$content = $response->data['content']['raw'];

		if ( strpos( $content, '<!-- wp:cfw/order-bump-preview' ) === false ) {
			// Prepend the block to the content
			$content = '<!-- wp:cfw/order-bump-preview {"lock":{"move":true,"remove":true}} /-->' . $content;
		}

		$response->data['content']['raw'] = $content;

		return $response;
	}
}

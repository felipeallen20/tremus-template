<?php
/**
 * Plugin Name: Easy Related Products
 * Description: Easily add related products to a product.
 * Version: 1.1
 * Author: Jules
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Add a new "Easy Related Products" tab to the product data metabox.
 */
function erp_add_related_products_tab( $tabs ) {
    $tabs['easy_related_products'] = array(
        'label'    => __( 'Easy Related Products', 'easy-related-products' ),
        'target'   => 'easy_related_products_options',
        'class'    => array( 'show_if_simple', 'show_if_variable' ),
        'priority' => 21, // After "Linked Products"
    );
    return $tabs;
}
add_filter( 'woocommerce_product_data_tabs', 'erp_add_related_products_tab' );

/**
 * Add the panel for the "Easy Related Products" tab.
 */
function erp_add_related_products_panel() {
    global $post;

    $related_products = get_post_meta( $post->ID, '_erp_related_products', true );
    ?>
    <div id="easy_related_products_options" class="panel woocommerce_options_panel">
        <div class="options_group">
            <p class="form-field">
                <label for="erp_related_products"><?php _e( 'Related Products', 'woocommerce' ); ?></label>
                <select class="wc-product-search" multiple="multiple" style="width: 50%;" id="erp_related_products" name="erp_related_products[]" data-placeholder="<?php esc_attr_e( 'Search for a product&hellip;', 'woocommerce' ); ?>" data-action="woocommerce_json_search_products_and_variations" data-exclude="<?php echo intval( $post->ID ); ?>">
                    <?php
                    if ( ! empty( $related_products ) ) {
                        foreach ( $related_products as $product_id ) {
                            $product = wc_get_product( $product_id );
                            if ( is_object( $product ) ) {
                                echo '<option value="' . esc_attr( $product_id ) . '"' . selected( true, true, false ) . '>' . wp_kses_post( $product->get_formatted_name() ) . '</option>';
                            }
                        }
                    }
                    ?>
                </select> <?php echo wc_help_tip( __( 'Select products to display as related products.', 'woocommerce' ) ); ?>
            </p>
        </div>
    </div>
    <?php
}
add_action( 'woocommerce_product_data_panels', 'erp_add_related_products_panel' );


/**
 * Save the custom field data.
 *
 * @param int $post_id
 */
function erp_save_related_products_field( $post_id ) {
    if ( isset( $_POST['erp_related_products'] ) ) {
        $related_products = array_map( 'intval', (array) $_POST['erp_related_products'] );
        update_post_meta( $post_id, '_erp_related_products', $related_products );
    }
}
add_action( 'woocommerce_process_product_meta', 'erp_save_related_products_field' );


/**
 * Hide the default "Linked Products" tab with JavaScript.
 */
function erp_hide_linked_products_tab_js() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // Hide the "Linked Products" tab
            $('.linked_product_options').hide();

            // If our tab is the first one visible after "General", make it active
            if (!$('.product_data_tabs .active').is(':visible')) {
                $('.product_data_tabs .easy_related_products_tab').addClass('active');
                $('#easy_related_products_options').show();
            }
        });
    </script>
    <?php
}
add_action( 'admin_footer', 'erp_hide_linked_products_tab_js' );


/**
 * Shortcode to display related products.
 *
 * @param array $atts
 * @return string
 */
function erp_related_products_shortcode( $atts ) {
    $atts = shortcode_atts(
        array(
            'id' => get_the_ID(),
        ),
        $atts,
        'easy_related_products'
    );

    $product_id = $atts['id'];
    $related_products_ids = get_post_meta( $product_id, '_erp_related_products', true );

    if ( empty( $related_products_ids ) ) {
        return '';
    }

    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'post__in'       => $related_products_ids,
        'orderby'        => 'post__in',
    );

    $related_products = new WP_Query( $args );

    ob_start();

    if ( $related_products->have_posts() ) {
        woocommerce_product_loop_start();
        while ( $related_products->have_posts() ) {
            $related_products->the_post();
            wc_get_template_part( 'content', 'product' );
        }
        woocommerce_product_loop_end();
    }

    wp_reset_postdata();

    return ob_get_clean();
}
add_shortcode( 'easy_related_products', 'erp_related_products_shortcode' );

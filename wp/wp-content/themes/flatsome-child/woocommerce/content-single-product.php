<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see              https://docs.woocommerce.com/document/template-structure/
 * @package          WooCommerce/Templates
 * @version          3.6.0
 * @flatsome-version 3.19.9
 */

defined( 'ABSPATH' ) || exit;

global $product;

?>
<div class="container">
	<?php
	/**
	 * Hook: woocommerce_before_single_product.
	 *
	 * @hooked wc_print_notices - 10
	 */
	do_action( 'woocommerce_before_single_product' );

	if ( post_password_required() ) {
		echo get_the_password_form(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		return;
	}
	?>
</div>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	// 🔹 Aquí va el encabezado Tremus personalizado
	global $post;
	$product_cats = wp_get_post_terms( $post->ID, 'product_cat' );
	if ( ! empty( $product_cats ) && ! is_wp_error( $product_cats ) ) {
		$main_cat = $product_cats[0];
		$shop_title = 'PRODUCTOS <span class="tremus-category-highlight">/ ' . esc_html( $main_cat->name ) . '</span>';
	} else {
		$shop_title = 'PRODUCTOS';
	}
	?>

	<?php
	// Layout del producto
	wc_get_template_part( 'single-product/layouts/product', get_theme_mod( 'product_layout', 'right-sidebar-small' ) );

	do_action( 'woocommerce_after_single_product' );
	?>
</div>
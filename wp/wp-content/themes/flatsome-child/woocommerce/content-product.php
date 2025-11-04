<?php
/**
 * Tremus - Custom WooCommerce product card
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Asegurar producto válido y visible
if ( ! $product || ! is_a( $product, 'WC_Product' ) || ! $product->is_visible() ) {
	return;
}

$product_id    = $product->get_id();
$product_link  = get_permalink( $product_id );
$product_title = get_the_title( $product_id );
$thumb_html    = $product->get_image( 'woocommerce_thumbnail' );
$price_html    = $product->get_price_html();

// Asegurar descripción corta sin romper
$short_desc_raw = $product->get_short_description();
if ( empty( $short_desc_raw ) ) {
	$short_desc_raw = get_the_excerpt( $product_id );
}
$short_desc = wp_trim_words( wp_strip_all_tags( $short_desc_raw ), 20, '...' );

// Botón de agregar al carrito (manejo seguro según tipo)
if ( $product->is_type( 'simple' ) || $product->is_type( 'downloadable' ) ) {
	$add_url   = esc_url( $product->add_to_cart_url() );
	$add_class = 'button tremus-product-add-to-cart ajax_add_to_cart';
} else {
	$add_url   = esc_url( $product_link );
	$add_class = 'button tremus-product-add-to-cart';
}

$add_text = 'AGREGAR AL CARRITO (+)';
?>

<li <?php wc_product_class( 'tremus-product-card', $product ); ?>>
	<div class="tremus-product-inner">

		<!-- Imagen -->
		<a href="<?php echo esc_url( $product_link ); ?>" class="tremus-product-thumb-link" aria-label="<?php echo esc_attr( $product_title ); ?>">
			<div class="tremus-product-thumb">
				<?php echo $thumb_html; ?>
			</div>
		</a>

		<!-- Texto -->
		<div class="tremus-product-content">
			<a href="<?php echo esc_url( $product_link ); ?>" class="tremus-product-title-link">
				<h3 class="tremus-product-title"><?php echo esc_html( $product_title ); ?></h3>
			</a>

			<?php if ( $short_desc ) : ?>
				<p class="tremus-product-description"><?php echo esc_html( $short_desc ); ?></p>
			<?php endif; ?>

			<?php
				// ⭐ Mostrar estrellas del plugin arriba del precio
				echo do_shortcode('[product_stars id="' . $product_id . '" simple="true"]');
			?>

			<?php if ( $price_html ) : ?>
				<div class="tremus-product-price"><?php echo wp_kses_post( $price_html ); ?></div>
			<?php endif; ?>

			<div class="tremus-precio-unidad">
				<?php echo do_shortcode('[easy_price_per_unit id=' . $product->get_id() . '"]'); ?>
			</div>
		</div>

		<!-- Botón -->
		<div class="tremus-product-button-wrap">
			<a href="<?php echo $add_url; ?>"
			   data-quantity="1"
			   data-product_id="<?php echo esc_attr( $product_id ); ?>"
			   data-product_sku="<?php echo esc_attr( $product->get_sku() ); ?>"
			   class="<?php echo esc_attr( $add_class ); ?>">
			   <?php echo esc_html( $add_text ); ?>
			</a>
		</div>

	</div>
</li>

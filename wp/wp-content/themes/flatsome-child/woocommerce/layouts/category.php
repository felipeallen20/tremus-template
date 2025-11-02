<?php
/**
 * Category layout with left sidebar.
 *
 * @package          Flatsome/WooCommerce/Templates
 * @flatsome-version 3.18.7
 */

?>
<div class="row category-page-row">

		<div class="col large-3 hide-for-medium <?php flatsome_sidebar_classes(); ?>">
			<form id="custom-filters" class="custom-shop-filters" method="GET" action="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
				<!-- Filtro: Despacho -->
				<div class="filter-section">
					<label class="filter-option filter-shipping">
					<input type="checkbox" name="envio[]" value="express"> Despacho express
					</label>
					<label class="filter-option filter-shipping">
					<input type="checkbox" name="envio[]" value="tienda"> Retiro en Tienda
					</label>
				</div>

				<!-- Filtro: Categorías dinámicas -->
				<?php
				$categories = get_terms(array(
					'taxonomy' => 'product_cat',
					'hide_empty' => true,
					'parent' => 0,
				));
				?>
				<div class="filter-section">
					<h4 class="filter-title">Filtrar por categorías</h4>
					<ul class="category-filter-list">
					<?php foreach ($categories as $cat) : ?>
						<li class="filter-item" data-category="<?php echo esc_attr($cat->slug); ?>">
						<label class="filter-option">
							<input type="checkbox" name="category[]" value="<?php echo esc_attr($cat->slug); ?>">
							<?php echo esc_html($cat->name); ?>
						</label>
						<?php
						$subcats = get_terms(array(
							'taxonomy' => 'product_cat',
							'hide_empty' => true,
							'parent' => $cat->term_id,
						));
						if (!empty($subcats)) : ?>
							<ul class="subcategory-list">
							<?php foreach ($subcats as $sub) : ?>
								<li>
								<label class="filter-option sub">
									<input type="checkbox" name="subcategory[]" value="<?php echo esc_attr($sub->slug); ?>">
									<?php echo esc_html($sub->name); ?>
								</label>
								</li>
							<?php endforeach; ?>
							</ul>
						<?php endif; ?>
						</li>
					<?php endforeach; ?>
					</ul>
				</div>

				<!-- Filtro: Precio -->
				<div class="filter-section">
					<h4 class="filter-title">Filtrar precio</h4>
					<label class="filter-option"><input type="checkbox" name="price[]" value="5000"> Menos de $5.000</label>
					<label class="filter-option"><input type="checkbox" name="price[]" value="8000"> Menos de $8.000</label>
					<label class="filter-option"><input type="checkbox" name="price[]" value="10000"> Menos de $10.000</label>
					<label class="filter-option"><input type="checkbox" name="price[]" value="15000"> Menos de $15.000</label>
				</div>

				<!-- Filtro: Preferencia (maquetado, no funcional aún) -->
				<div class="filter-section">
					<h4 class="filter-title">Filtrar por preferencia</h4>
					<label class="filter-option"><input type="checkbox" name="pref[]" value="comida-preparada"> Comida preparada</label>
					<label class="filter-option"><input type="checkbox" name="pref[]" value="proteina"> Alto en proteína</label>
					<label class="filter-option"><input type="checkbox" name="pref[]" value="gourmet"> Comida gourmet</label>
					<label class="filter-option"><input type="checkbox" name="pref[]" value="keto"> Productos Keto</label>
					<label class="filter-option"><input type="checkbox" name="pref[]" value="sin-azucar"> Sin azúcar</label>
					<label class="filter-option"><input type="checkbox" name="pref[]" value="sin-gluten"> Sin gluten</label>
					<label class="filter-option"><input type="checkbox" name="pref[]" value="veganos"> Veganos</label>
					<label class="filter-option"><input type="checkbox" name="pref[]" value="vegetarianos"> Vegetarianos</label>
				</div>

			</form>
		</div>

		<div class="col large-9">
		<?php
		/**
		 * Hook: woocommerce_before_main_content.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20 (FL removed)
		 * @hooked WC_Structured_Data::generate_website_data() - 30
		 */
		do_action( 'woocommerce_before_main_content' );

		if ( fl_woocommerce_version_check( '8.8.0' ) ) {
			/**
			 * Hook: woocommerce_shop_loop_header.
			 *
			 * @since 8.8.0
			 *
			 * @hooked woocommerce_product_taxonomy_archive_header - 10
			 */
			do_action( 'woocommerce_shop_loop_header' );
		} else {
			do_action( 'woocommerce_archive_description' );
		}

		if ( woocommerce_product_loop() ) {

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked wc_print_notices - 10
			 * @hooked woocommerce_result_count - 20 (FL removed)
			 * @hooked woocommerce_catalog_ordering - 30 (FL removed)
			 */
			do_action( 'woocommerce_before_shop_loop' );

			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 *
					 * @hooked WC_Structured_Data::generate_product_data() - 10
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'product' );
				}
			}

			woocommerce_product_loop_end();

			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action( 'woocommerce_after_shop_loop' );
		} else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action( 'woocommerce_no_products_found' );
		}
		?>

		<?php
			/**
			 * Hook: flatsome_products_after.
			 *
			 * @hooked flatsome_products_footer_content - 10
			 */
			do_action( 'flatsome_products_after' );
			/**
			 * Hook: woocommerce_after_main_content.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );
		?>
		</div>
		
		<div class="col large-12">
			<?php echo do_shortcode('[tremus_recently_viewed]'); ?>
		</div>

		<div class="col large-12">
			<div class="newsletter-shop-container">
				<div class="newsletter-shop-content">
					<h2 class="newsletter-shop-title">Recibe nuestras últimas novedades</h2>
					<div class="newsletter-shop-form">
						<input type="text" placeholder="Mi Correo Electrónico">
						<button type="button">Suscribirme</button>
					</div>
				</div>
			</div>
		</div>
</div>

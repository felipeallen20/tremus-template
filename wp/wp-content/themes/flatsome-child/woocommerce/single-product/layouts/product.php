<?php
defined('ABSPATH') || exit;
global $product;
?>

<div class="custom-single-product container">

	<div class="custom-product-header">
		<?php woocommerce_breadcrumb(); ?>
	</div>

	<div class="custom-product-content row">
		
		<!-- Galería -->
		<div class="product-gallery col large-6">
			<?php do_action('woocommerce_before_single_product_summary'); ?>
		</div>

		<!-- Información -->
		<div class="product-info col large-6">
			<h1 class="product-title"><?php the_title(); ?></h1>
			
			<p class="product-sku"><b>SKU</b>: <?php echo esc_html( $product->get_sku() ?: 'N/A' ); ?></p>

			<div class="product-content-row">
				<!-- Precio -->
				<div class="product-price">
					<?php echo $product->get_price_html(); ?>
				</div>

				<!-- Indicadores -->
				<ul class="product-meta-icons">
					<li><span class="available-stock-dot"></span> Stock disponible</li>
					<li><img src="http://localhost:8080/wp-content/uploads/2025/10/depositphotos_224915412-stock-illustration-delivery-motorcycle-icon-trendy-delivery-1.svg" alt="Envío Express"> Envío express</li>
					<li><img src="http://localhost:8080/wp-content/uploads/2025/10/depositphotos_224915412-stock-illustration-delivery-motorcycle-icon-trendy-delivery-2.svg" alt="Retiro en tienda"> Retiro en tienda</li>
				</ul>
			</div>

			<!-- Etiquetas dinámicas -->
			<div class="product-tags">
				<?php
				if ( function_exists('get_field') ) {
					$tags = get_the_terms( $product->get_id(), 'product_tag' );
					if ( $tags && ! is_wp_error( $tags ) ) {
						foreach ( $tags as $tag ) {
							$image_url = get_field( 'imagen_etiqueta', 'product_tag_' . $tag->term_id );
							if ( !empty($image_url) ) {
								echo '<img src="' . esc_url( $image_url ) . '" alt="' . esc_attr( $tag->name ) . '" class="product-tag-image" />';
							}
						}
					}
				}
				?>
			</div>

			<!-- Precio por unidad  -->
			<?php
			$precio_x_unidad = get_post_meta( $product->get_id(), 'precio_x_unidad', true );
			$unidad          = get_post_meta( $product->get_id(), 'unidad', true );

			if ( $precio_x_unidad && $unidad ) :
			?>
				<div class="tremus-precio-unidad">
					<span><?php echo esc_html( $precio_x_unidad . ' x ' . $unidad ); ?></span>
				</div>
			<?php endif; ?>

			<!-- Botón de compra -->
			<div class="product-cart">
				<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
					<div class="quantity-wrapper">
						<?php
						if ( ! $product->is_sold_individually() ) {
							woocommerce_quantity_input( array(
								'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
								'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
								'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(),
							) );
						}
						?>
					</div>

					<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="custom-add-to-cart-button">
						<i class="fa-solid fa-cart-shopping"></i>
						<span>Agregar al carro</span>
					</button>
				</form>
			</div>

			<div class="product-custom-description">
				<?php
				$desc = $product->get_description();
				echo $desc ? wpautop($desc) : '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod elit in justo pharetra, nec varius lacus sagittis.</p>';
				?>
			</div>
		</div>
	</div>

	<!-- Descripción -->
	<div class="custom-product-description container">
		<h2>Descripción</h2>
		<?php
		$desc = $product->get_description();
		echo $desc ? wpautop($desc) : '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod elit in justo pharetra, nec varius lacus sagittis.</p>';
		?>
	</div>
	<section class="tremus-product-ingredients">
		<div class="tremus-ingredients-container">
			
			<div class="tremus-ingredients-text">
			<h3>Agregar ingredientes destacados o que puedan causar alergias</h3>

			<div class="ingredient-block">
				<h4>Base (bizcocho)</h4>
				<ul>
				<li>Harina integral o mezcla de harina de avena + harina de almendra (más fibra y proteína que la harina refinada).</li>
				<li>Cacao puro en polvo sin azúcar (fuente de antioxidantes).</li>
				<li>Huevos (aportan proteína y estructura, se pueden sustituir parcialmente por linaza o chía hidratada si quieres opción más ligera).</li>
				<li>Endulzante natural: dátiles molidos, miel, sirope de agave o stevia/eritritol.</li>
				<li>Aceite saludable: aceite de coco o de oliva suave en lugar de mantequilla.</li>
				</ul>
			</div>

			<div class="ingredient-block">
				<h4>Relleno de manjar saludable</h4>
				<ul>
				<li>Manjar de dátiles: dátiles remojados + un poco de leche vegetal + esencia de vainilla.</li>
				<li>Manjar light casero: leche descremada o vegetal + endulzante natural + pizca de bicarbonato cocinados lentamente.</li>
				<li>Opcional: agregar un toque de mantequilla de maní natural para darle más cremosidad.</li>
				</ul>
			</div>

			<div class="ingredient-block">
				<h4>Cobertura</h4>
				<ul>
				<li>Ganache de chocolate saludable: chocolate amargo (70% cacao o más) + leche vegetal o yogur griego.</li>
				<li>Se puede endulzar ligeramente con miel o stevia.</li>
				<li>Para un efecto brillante, agregar una cucharadita de aceite de coco.</li>
				</ul>
			</div>

			<div class="ingredient-block">
				<h4>Extras</h4>
				<ul>
				<li>Frutos secos (nueces, almendras, avellanas) para aportar crocancia y grasas buenas.</li>
				<li>Frutas frescas (frutillas, frambuesas, arándanos) para decorar y balancear lo dulce.</li>
				<li>Semillas (chía, sésamo, zapallo) como topping nutritivo.</li>
				</ul>
			</div>
			</div>

			<div class="tremus-ingredients-image">
				<img src="http://localhost:8080/wp-content/uploads/2025/10/informacionnutricional-1.png" alt="Información nutricional e ingredientes">
			</div>

		</div>
	</section>

	<div class="col large-12">
		<h2>Valoraciones</h2>

		<?php echo do_shortcode('[product_stars id="' . $product->get_id() . '"]'); ?>
	</div>

	<div class="col large-12">
		<h2>Productos Relacionados</h2>
		<?php
		// Obtiene los productos relacionados (máximo 4)
		$related_ids = wc_get_related_products( $product->get_id(), 4 );

		if ( $related_ids ) {
			$args = array(
				'post_type'      => 'product',
				'post__in'       => $related_ids,
				'posts_per_page' => 4,
				'orderby'        => 'rand',
			);

			$related_query = new WP_Query( $args );

			if ( $related_query->have_posts() ) : ?>
				<ul class="products columns-4">
					<?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
						<?php wc_get_template_part( 'content', 'product' ); ?>
					<?php endwhile; ?>
				</ul>
			<?php endif;
			wp_reset_postdata();
		} else {
			echo '<p>No hay productos relacionados.</p>';
		}
		?>
	</div>

	<div class="col large-12">
		<?php echo do_shortcode('[tremus_recently_viewed]'); ?>
	</div>
</div>

<?php
/**
 * Encabezado personalizado para la tienda Tremus
 */

$shop_title = is_shop() ? 'PRODUCTOS' : single_cat_title('', false);
?>

<div class="tremus-shop-header-container">
	<div class="tremus-shop-header">
		<div class="tremus-shop-header-left">
			<h2 class="tremus-shop-title"><?php echo esc_html( $shop_title ); ?></h2>
			<div class="tremus-shop-underline"></div>
		</div>

		<div class="tremus-shop-header-right">
			<div class="tremus-shop-ordering custom-ordering">
				<div class="custom-show">
				<span>Mostrar:</span>
				<a href="#" class="show-option" data-count="15">15</a> /
				<a href="#" class="show-option" data-count="25">25</a> /
				<a href="#" class="show-option" data-count="45">45</a>
				</div>

				<div class="custom-order-select">
				<select id="custom-orderby">
					<option value="menu_order" selected>Ordenar por popularidad</option>
					<option value="rating">Ordenar por puntuación</option>
					<option value="date">Ordenar por los últimos</option>
					<option value="price">Ordenar por precio: bajo a alto</option>
					<option value="price-desc">Ordenar por precio: alto a bajo</option>
				</select>
				</div>
			</div>
		</div>
	</div>
</div>
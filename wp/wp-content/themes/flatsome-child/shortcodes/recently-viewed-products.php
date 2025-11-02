<?php
function tremus_recently_viewed_products() {
   // Leer nuestra cookie personalizada
    $viewed_products = ! empty( $_COOKIE['recently_viewed_products'] )
        ? array_map( 'absint', explode( ',', $_COOKIE['recently_viewed_products'] ) )
        : array();

    // Mostrar los más recientes primero
    $viewed_products = array_reverse( $viewed_products );

    // Limitar a 5 productos
    $viewed_products = array_slice( $viewed_products, 0, 5 );

    ob_start(); ?>

    <section class="tremus-recently-viewed">
        <h2 class="tremus-section-title">Vistos recientemente</h2>

        <?php if ( ! empty( $viewed_products ) ) :
            $args = array(
                'post_type' => 'product',
                'post__in'  => $viewed_products,
                'orderby'   => 'post__in',
            );

            $products = new WP_Query( $args );

            if ( $products->have_posts() ) : ?>
                <div class="recently-viewed-products-row">
                    <?php while ( $products->have_posts() ) : $products->the_post(); global $product; ?>
                        <div class="recently-viewed-product">
                            <a href="<?php the_permalink(); ?>" class="recently-viewed-product-link">
                                <div class="recently-viewed-product-left">
                                    <div class="recently-viewed-product-image">
                                        <?php echo $product->get_image('woocommerce_thumbnail'); ?>
                                    </div>
                                </div>
                                <div class="recently-viewed-product-right">
                                    <h3 class="recently-viewed-product-title"><?php the_title(); ?></h3>
                                    <span class="recently-viewed-product-price"><?php echo $product->get_price_html(); ?></span>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p class="tremus-no-products">Aún no has visto ningún producto.</p>
            <?php endif;
            wp_reset_postdata();
        else : ?>
            <p class="tremus-no-products">Aún no has visto ningún producto.</p>
        <?php endif; ?>
    </section>

    <?php
    return ob_get_clean();
}
add_shortcode('tremus_recently_viewed', 'tremus_recently_viewed_products');
?>

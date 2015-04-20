<?php
/**
 * Related Products
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop,$theme_options_data;


if ( empty( $product ) || ! $product->exists() ) {
    return;
}

$posts_per_page = $theme_options_data['thim_woo_related_product_column'];;
$related = $product->get_related( $posts_per_page );

if ( sizeof( $related ) == 0 ) return;

$args = apply_filters( 'woocommerce_related_products_args', array(
    'post_type'            => 'product',
    'ignore_sticky_posts'  => 1,
    'no_found_rows'        => 1,
    'posts_per_page'       => $posts_per_page,
    'orderby'              => $orderby,
    'post__in'             => $related,
    'post__not_in'         => array( $product->id )
) );

$products = new WP_Query( $args );

if ( $products->have_posts() ) : ?>

    <div class="related-products">
        <div class="box-title">
            <h3 class="box-heading"><?php _e( 'Related Products', 'woocommerce' ); ?></h3>
        </div>
        <?php //woocommerce_product_loop_start();
        // fix
        echo "<ul class='product-grid category-product-list archive_switch'>";
        ?>

        <?php while ( $products->have_posts() ) : $products->the_post(); ?>

            <?php
             wc_get_template( 'content-related-product.php' );
            ?>

        <?php endwhile; // end of the loop. ?>

        <?php woocommerce_product_loop_end(); ?>

    </div>

<?php endif;

wp_reset_postdata();

<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div  <?php post_class('col-md-4'); ?>>
<div class="single__item--wrap">
      <div class="product__thumb--wrap">
        <?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
      </div>
      <div class="product__descr--wrap">
        <div class="dynamic__content--wrap">
          <div class="product__cat--title"><?php global $post, $product; $categ = $product->get_categories(); echo $categ; ?></div>
          <div class="product--title"><?php do_action( 'woocommerce_shop_loop_item_title' ); ?></div>
          <p class="product--weight"><?php echo wc_format_localized_decimal( $product->get_weight() ) . ' ' . esc_attr( get_option( 'woocommerce_weight_unit' ) ); ?></p>
          <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
        </div>
        <div class="static__content--wrap">
          <div class="product--price"><?php echo $product->get_price_html(); ?> <span class="price-curency">грн</span></div>
          <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
        </div>
      </div>
    </div><!-- single__item--wrap -->
	<!-- <?php
  /**
   * woocommerce_before_shop_loop_item hook.
   *
   * @hooked woocommerce_template_loop_product_link_open - 10
   */
  do_action( 'woocommerce_before_shop_loop_item' );

  /**
   * woocommerce_before_shop_loop_item_title hook.
   *
   * @hooked woocommerce_show_product_loop_sale_flash - 10
   * @hooked woocommerce_template_loop_product_thumbnail - 10
   */
  do_action( 'woocommerce_before_shop_loop_item_title' );

  /**
   * woocommerce_shop_loop_item_title hook.
   *
   * @hooked woocommerce_template_loop_product_title - 10
   */
  do_action( 'woocommerce_shop_loop_item_title' );

  /**
   * woocommerce_after_shop_loop_item_title hook.
   *
   * @hooked woocommerce_template_loop_rating - 5
   * @hooked woocommerce_template_loop_price - 10
   */
  do_action( 'woocommerce_after_shop_loop_item_title' );

  /**
   * woocommerce_after_shop_loop_item hook.
   *
   * @hooked woocommerce_template_loop_product_link_close - 5
   * @hooked woocommerce_template_loop_add_to_cart - 10
   */
  do_action( 'woocommerce_after_shop_loop_item' );
  ?> -->
</div>
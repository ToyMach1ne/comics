<?php $classes = get_body_class();
if (in_array('search',$classes)) { ?>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
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
  </div>
<?php endwhile; endif; ?>
<?php } 

else { ?>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('looper col-md-4'); ?>>
    <div class="article_item single__item--wrap">
        <?php if ( has_post_thumbnail()) { ?>
          <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php } else { ?>
          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php } ?>
    <a href="<?php the_permalink(); ?>">
      <span class="article_info_wrap">
        <h4 class="title"><?php the_title(); ?></h4>
        <?php wpeExcerpt('wpeExcerpt10'); ?>
      </span>
    </a>
    </div>
  </div><!-- /looper -->
<?php endwhile; endif; ?>
<?php }
?>

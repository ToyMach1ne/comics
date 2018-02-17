<?php get_header(); ?>
<section role="main">
    <div class="top__title--wrap">
    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
      <h1 class="woocommerce-products-header__title page-title cat_title"><?php woocommerce_page_title(); ?></h1>
    <?php endif; ?>
            <div class="cat__menu--wrap">
              <ul class="cat__menu--list">
               <?php $terms = get_terms( array(
                  'taxonomy' => 'product_cat',
                  'hide_empty' => true,
                  'parent' => 0,
                  'hierarchical' => false,
                  'orderby' => ASC
                    ) ); ?>
                <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                  foreach ( $terms as $term ) {
                  $termlinks= get_term_link($term,$taxonomy); ?>
                  <li class="cat__menu--item">
                      <a class="tile__link" href="<?php echo $termlinks; ?>" title="<?php echo  $term->name; ?>">
                        <span class="tile__title"><?php echo  $term->name; ?></span>
                      </a>
                  </li><!-- tile -->
                 <?php }} ?>
              </ul>
            </div>
    </div><!-- top_banner -->
    <div class="product__item--wrap">
      <div class="container">
        <h4 class="cat__item--title">Меню заказа</h4>
          <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

<?php /* Template Name: Home Page */ get_header(); ?>

  <section role="main">

    <!-- <div class="load__screen--wrapp">
      <div class="load__content--wrap">
        <div class="load__text--wrap">
          <h4>Comics</h4>
          <span>cafe</span>
        </div>
        <div class="superman">
        <?php $image = get_field('left_top');if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
        </div>
        <div class="deadpool">
          <?php $image = get_field('rigt_top');if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
        <div class="capitan">
          <?php $image = get_field('right_bottom');if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
        <div class="batman">
          <?php $image = get_field('left_bottom');if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div> -->

    <div class="first__block--wrap">
      <h1><?php the_field('first_title'); ?></h1>
      <p class="first_undertitle"><?php the_field('first_undertitle'); ?></p>
      <h4><?php the_field('first_under_underslider'); ?></h4>
      <p class="second_undertitle">Нажмите на кнопку ниже</p>
      <a href="#" class="to_second">ОПУСТИТСЯ НИЖЕ</a>
    </div><!-- first__block--wrap -->

    <div class="second__about--block" id="second--about">
      <div class="left-side">
        <div class="container left-container">
          <div class="row">
            <div class="col-md-12">
              <h4>О НАС</h4>
              <p><?php the_field('text_about'); ?></p>
              <a href="#" class="to_specials">ПОСМОТРЕТЬ БЛЮДА</a>
            </div>
          </div>
        </div>
      </div>
      <div class="right-side">
        <div class="right--wrap"></div>
      </div>
    </div><!-- second__abot--block -->

  <div class="product__toservice--block" id="third--product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4>Наши блюда</h4>
            <ul class="tabs">
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
                  <li class="tab_item">
                        <span class="tile__title"><?php echo  $term->name; ?></span>
                  </li><!-- tile -->
            <?php }} ?>
            </ul>
            <div class="tab__content--wrap">

              <div class="tab_content_item">
                <div class="row">
                <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 9, 'product_cat' => 'roly', 'orderby' => 'ASC' ); $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="col-md-4">
                      <div class="product__block--wrapper">
                        <div class="product__thumb--wrap">
                          <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Суши" />'; ?>
                        </div>
                        <div class="product-info">
                          <h4 class="product_title"><?php the_title(); ?></h4>
                          <div class="description__block">
                            <p class="weight"><?php echo wc_format_localized_decimal( $product->get_weight() ) . ' ' . esc_attr( get_option( 'woocommerce_weight_unit' ) ); ?></p>
                            <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
                          </div>
                          <div class="price"><?php echo $product->get_price_html(); ?> грн</div>
                          <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                        </div>
                      </div>
                    </div>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
                </div>
              </div>

              <div class="tab_content_item">
                <div class="row">
                <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 9, 'product_cat' => 'seti', 'orderby' => 'ASC' ); $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="col-md-4">
                      <div class="product__block--wrapper">
                        <div class="product__thumb--wrap">
                          <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Суши" />'; ?>
                        </div>
                        <div class="product-info">
                          <h4 class="product_title"><?php the_title(); ?></h4>
                          <div class="description__block">
                            <p class="weight"><?php echo wc_format_localized_decimal( $product->get_weight() ) . ' ' . esc_attr( get_option( 'woocommerce_weight_unit' ) ); ?></p>
                            <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
                          </div>
                          <div class="price"><?php echo $product->get_price_html(); ?> грн</div>
                          <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                        </div>
                      </div>
                    </div>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
                </div>
            </div>

          </div><!-- tab__content--wrap -->
        </div>
      </div>
     </div>
    </div><!-- product__toservice--block -->

    <div class="coffee_delivery">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4><?php the_field('contact_title'); ?></h4>
            <p><?php the_field('contact_text'); ?></p>
          </div>
          <div class="col-md-6">
            <?php echo do_shortcode('[contact-form-7 id="55" title="Контактная форма 1"]'); ?>
          </div>
        </div>
      </div>
    </div><!-- coffee_delivery -->

    <div class="services__underslider--block">
      <div class="container">
        <div class="row">
        <?php if( have_rows('food_block_rep') ):  while( have_rows('food_block_rep') ): the_row();
        // vars
        $image = get_sub_field('food_img'); ?>
          <div class="col-md-3">
            <div class="services_wrap">
              <div class="services__img--wrap">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
              </div>
              <h4><?php the_sub_field('food_title'); ?></h4>
              <p><?php the_sub_field('food_descr'); ?></p>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div><!-- container -->
    </div><!-- services__underslider--block -->


    <div class="news_block">
      <div class="container">
        <h4 class="news_title">НОВОСТИ И АКЦИИ</h4>
        <div class="row">
        <?php query_posts("showposts=3"); ?>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="col-md-4">
            <div class="news__item--wrap">
              <div class="post__thumb--wrap">
                <a href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail()) :?>
                    <?php the_post_thumbnail('thumbnail'); ?>
                  <?php endif; ?><!-- /post thumbnail -->
                </a>
              </div>
              <div class="post__descr--wrap">
                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                <p><?php wpeExcerpt('wpeExcerpt20'); ?></p>
                <a href="<?php the_permalink(); ?>" class="to_article">Подробнее</a>
              </div>
            </div>
          </div>
          <?php endwhile; endif; ?>
           <?php wp_reset_query(); ?>
        </div>
      </div>
    </div><!-- news_block -->

    <div class="modal__button--block">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="modal_wrap">
              <p><?php the_field('modal_window_text'); ?></p>
              <button class="open__modal--recall">Заказать</button>
            </div>
          </div>
        </div>
      </div>
    </div><!-- modal__button--block -->

    <div class="map_block">
      <?php the_field('google_map'); ?>
      <div class="contact_card">
                <div class="card-left">
                  <p class="hide__effect--paragraph"><?php the_field('car_city'); ?></p>
                  <p class="hide__effect--paragraph"><?php the_field('card_adress'); ?></p>
                </div>
                <div class="card-right">
                  <div class="card_phone">
                    <p>Телефон</p>
                    <a href="tel:+375 29 310-10-10"><?php the_field('card_phone'); ?></a>
                  </div>
                  <div class="card_email">
                    <p>E-mail</p>
                    <a href="mailto:info@projector.by"><?php the_field('card_email'); ?></a>
                  </div>
                  <div class="card_social">
                    <p>Соц.сети:</p>
                    <a href="https://www.facebook.com/groups/1322097464602508/" target="_blank">Facebook</a>
                    <a href="https://vk.com/public158430723" target="_blank">ВКонтакте</a>
                  </div>
                  <div class="contacts__buttons--wrap">
                    <span class="contacts__hide--arrow"></span>
                  </div>
                </div>
        </div>
    </div>

  </section><!-- /section -->
</div><!-- /wrapper -->

<?php get_footer(); ?>

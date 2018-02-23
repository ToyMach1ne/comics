<?php /* Template Name: About Page */ get_header(); ?>

<div class="about-content">
    <div class="top__about--block"></div>
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <div class="row first__about--row">
        <div class="col-md-12">
          <h4><?php the_field('first_title'); ?></h4>
          <div class="slider_wraper">
            <div class="owl-carousel">
            	<?php if( have_rows('slider_img') ):  while( have_rows('slider_img') ): the_row();
		        // vars
		        $image = get_sub_field('slider_item'); ?>
                <div>
                   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                </div>
                <?php endwhile; endif; ?>
            </div>
          </div>
          <h6><?php the_field('second_title'); ?></h6>
          <p><?php the_field('undersecond_text'); ?></p>
        </div>
      </div>
      <div class="row second__about--row">
      	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div><!-- about-content -->

<?php get_footer(); ?>
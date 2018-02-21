<?php get_header(); ?>
  <article>
  <div class="blog__top--baner">
        <h4 class="cat_title"><?php the_category(', '); ?></h4>
  </div>
  <div class="articles_wrap">
    <div class="container">
      <div class="row">
      <?php get_template_part('loop'); ?>
      </div>
      <div class="row">
        <div class="col-md-12">
        <?php get_template_part('pagination'); ?>
        </div>
      </div>
    </div>
  </div>

  </article>
<?php get_footer(); ?>

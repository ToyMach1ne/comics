<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('looper col-md-4'); ?>>
    <div class="article_item">
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

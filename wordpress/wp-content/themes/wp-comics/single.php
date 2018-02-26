<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="article__top--banner">
        <h1 class="article--title"><?php the_title(); ?></h1>
        <?php if ( has_post_thumbnail()) :?>
      </div>
      <div class="article--content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
            <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
            </a>
            <?php endif; ?><!-- /post thumbnail -->
               <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="relative--articles">
        <div class="container">
          <h4 class="relative_title">НЕДАВНИЕ НОВОСТИ</h4>
          <div class="row">
          <?php query_posts("showposts=3"); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-4 col-sm-4">
            <div class="relative__item--wrap">
              <div class="relative__thumb--wrap">
                <a href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail()) :?>
                    <?php the_post_thumbnail('thumbnail'); ?>
                  <?php endif; ?><!-- /post thumbnail -->
                </a>
              </div>
              <div class="relative__descr--wrap">
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
      </div>

    </article>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>

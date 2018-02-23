<?php get_header(); ?>
  <article class="product__item--wrap search-wrap">
  	<div class="container">
  		<div class="row">
  			<h1 class="search-title inner-title"><?php echo sprintf( __( '<span>Результаты поиска:</span> ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
			    <?php get_template_part('loop'); ?>
			    <?php get_template_part('pagination'); ?>
  		</div>
  	</div>
  </article>

<?php get_footer(); ?>

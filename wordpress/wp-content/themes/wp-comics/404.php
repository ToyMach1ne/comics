<?php get_header(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class('error-wrap'); ?>>

  	<div class="error__text--wrap">
      <h1 class="ctitle"><?php _e( 'Страница не найдена', 'wpeasy' ); ?></h1>
      <p class="first__error--paragraph">Даная страница отсутствует</p>
      <p class="second__error--paragraph">Страница что вы ищите отсутствует, была перемещена или не существует.<p>
      <p class="third__error--paragraph">Вы можете перейти на страницы предоставлены ниже</p>
    </div>

  </article>
<?php get_footer(); ?>

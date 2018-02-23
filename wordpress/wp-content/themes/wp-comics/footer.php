 <footer role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="footer_adress">
            <p>Адрес:</p>
              <p class="adress_paragraph"><?php the_field('footer_adress', 38); ?></p>
              <p class="work_time"><?php the_field('work_time', 38); ?></p>
          </div>
          <div class="footer_phones">
            <p>Телефоны:</p>
            <ul class="phones_list">
            <?php if( have_rows('footer_phones', 38) ):  while( have_rows('footer_phones', 38) ): the_row(); ?>
              <li><a href="tel:<?php the_sub_field('footer_phone', 38); ?>"><?php the_sub_field('footer_phone', 38); ?></a></li>
              <?php endwhile; endif; ?>
            </ul>
          </div>
          <div class="footer_email">
            <p>Почта:</p>
            <a href="mailto:example@gmail.com"><?php the_field('footer_email', 38); ?></a>
          </div>
      </div>
      <div class="col-md-4">
        <p class="footnav_title">Перейти к:</p>
        <nav class="footernav">
          <?php wpeFootNav(); ?>
        </nav>
      </div>
      <div class="col-md-4">
        <div class="search_wrap">
          <p>Поиск по сайту:</p>
          <?php echo do_shortcode('[smart_search id="1"]'); ?>
        </div>
        <div class="social-wrap">
          <p class="social_title">Соц сети:</p>
          <div class="footer_socials">
                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/vk.png" alt=""></a>
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container -->
   <div class="copyright-row">
    <div class="container">
      <div class="row">
        <p class="col-md-12">© 2018 Собственность. Работает на html5wp easy.</p>
      </div>
    </div>
    </div>
  <!-- Modals -->
  <div class="modal_recall">
    <div class="modal__recall--wrap">
      <?php echo do_shortcode('[contact-form-7 id="140" title="modal recall"]'); ?>
    </div>
  </div><!-- modal_recall -->

  <!-- / Modals -->
  <a href="#" class="scrollToTop"></a>

</footer><!-- /footer -->

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>

  <?php wp_footer(); ?>
</body>
</html>



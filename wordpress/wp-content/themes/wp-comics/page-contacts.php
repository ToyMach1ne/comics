<?php /* Template Name: Contact Page */ get_header(); ?>
  <div class="contact-wrapper">
    <div class="contact-top">
      <h1><?php the_title(); ?></h1>
      <div class="contact-menu">
        <p>comics</p>
        <nav class="contact-nav">
           <?php wpeSideNav(); ?>
        </nav>
      </div>
    </div>
    <div class="contact-inner">
      <div class="container">
        <div class="row">
          <div class="col-md-6 adress-block">
            <p class="contact-name">Comics Cafe</p>
            <p class="contact-adress"><?php the_field('contact_page_adress'); ?></p>
            <ul class="phones_list_contacts">
              <p>Телефоны:</p>
              <?php if( have_rows('contact_page_phoens') ):  while( have_rows('contact_page_phoens') ): the_row(); ?>
              <li><a href="tel:<?php the_sub_field('contact_page_phone'); ?>"><?php the_sub_field('contact_page_phone'); ?></a></li>
              <?php endwhile; endif; ?>
            </ul>
           <a href="mailto:<?php the_field('contact_page_email'); ?>" class="email-contact"><?php the_field('contact_page_email'); ?></a>
           <div class="social-share">
                <p>Поделится:</p>
                <?php echo do_shortcode('[social_warfare]'); ?>
           </div>
          </div>
          <div class="col-md-6 contact-form__wrap">
            <?php echo do_shortcode('[contact-form-7 id="163" title="contact page form"]'); ?>
          </div>
        </div>
      </div>
    </div><!--contact-inner -->
    <div class="map-block">
      <?php the_field('contact_page_map'); ?>
    </div>
  </div><!-- contact-wrapper -->
<?php get_footer(); ?>

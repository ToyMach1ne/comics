<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <!-- saved from url=(0014)about:internet -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!-- css + javascript -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->

  <style text="css">
    .load__screen--wrapp {
  background-color: #00aeee;
  height: 100vh;
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 100;
  overflow: hidden;
}
.load__screen--wrapp .load__content--wrap {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  height: 100%;
}
.load__screen--wrapp .load__content--wrap .load__text--wrap {
  background-color: transparent;
  overflow: visible;
  width: 100%;
  text-align: center;
  color: #fff;
  position: relative;
  display: flex;
  flex-wrap: wrap;
}
.load__screen--wrapp .load__content--wrap .load__text--wrap h4 {
  width: 100%;
  font-size: 10em;
  margin-bottom: 0;
  font-family: 'Chewy', cursive;
}
.load__screen--wrapp .load__content--wrap .load__text--wrap span {
  width: 100%;
  padding-left: 20%;
  font-size: 3em;
  font-family: 'Monoton', cursive;
}
.load__screen--wrapp .load__content--wrap div {
  position: relative;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  justify-content: flex-start;
  width: 200px;
  height: 200px;
  overflow: hidden;
  background-color: #fff;
}
.load__screen--wrapp .load__content--wrap div img {
  max-width: 150px;
  bottom: 0;
}
.load__screen--wrapp .load__content--wrap .superman {
  align-items: flex-start;
  position: fixed;
  left: 0;
  top: 0;
  border-radius: 0 0 100% 0;
}
.load__screen--wrapp .load__content--wrap .superman img {
  border-radius: 50%;
  padding: 5px;
}
.load__screen--wrapp .load__content--wrap .deadpool {
  align-items: flex-start;
  justify-content: flex-end;
  position: fixed;
  right: 0;
  top: 0;
  border-radius: 0 0 0 100%;
}
.load__screen--wrapp .load__content--wrap .capitan {
  align-items: flex-end;
  justify-content: flex-end;
  border-radius: 100% 0 0 0;
  position: fixed;
  right: 0;
  bottom: 0;
}
.load__screen--wrapp .load__content--wrap .batman {
  align-items: flex-end;
  border-radius: 0 100% 0 0;
  position: fixed;
  left: 0;
  bottom: 0;
}
  </style>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="header__position--wrap">
      <div class="container">
        <div class="row">
          <div class="header--logo col-md-2">
            <a href="/shop.htm" class="order--online">
              <p>Заказать доставку</p>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="76.80511474609375 46.68406295776367 178.11782836914062 178.11972045898438" role="img" preserveAspectRatio="xMidYMid meet">
            <g>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M230.761 192.223c-5.996.735-9.452 4.089-10.365 10.062-.913 5.97-4.335 8.38-10.265 7.228-5.929-1.152-10.252.97-12.965 6.366-2.715 5.396-6.715 6.631-11.998 3.702-5.283-2.928-10.049-2.245-14.299 2.049-4.248 4.293-8.432 4.231-12.553-.187-4.12-4.418-8.863-5.241-14.231-2.47-5.368 2.769-9.329 1.418-11.881-4.057-2.554-5.476-6.811-7.725-12.771-6.748-5.961.976-9.311-1.533-10.047-7.527-.736-5.996-4.09-9.452-10.061-10.365-5.972-.914-8.381-4.336-7.229-10.265 1.153-5.929-.969-10.252-6.366-12.968-5.397-2.712-6.63-6.711-3.703-11.994 2.928-5.284 2.246-10.05-2.048-14.299-4.293-4.25-4.231-8.435.186-12.555 4.418-4.119 5.242-8.862 2.471-14.23-2.771-5.369-1.419-9.329 4.056-11.881 5.475-2.555 7.724-6.811 6.747-12.773-.976-5.96 1.534-9.31 7.53-10.046 5.995-.735 9.45-4.091 10.364-10.061.913-5.972 4.335-8.382 10.264-7.229 5.93 1.153 10.252-.969 12.967-6.365 2.714-5.396 6.712-6.632 11.996-3.703 5.284 2.93 10.05 2.246 14.298-2.047 4.248-4.297 8.434-4.232 12.553.185 4.121 4.418 8.865 5.24 14.232 2.472 5.367-2.772 9.328-1.42 11.882 4.056 2.552 5.475 6.811 7.724 12.771 6.747 5.961-.978 9.31 1.533 10.046 7.529.738 5.996 4.091 9.448 10.062 10.363 5.971.914 8.381 4.334 7.228 10.265-1.152 5.932.97 10.252 6.366 12.966 5.396 2.715 6.631 6.714 3.702 11.996-2.927 5.283-2.245 10.05 2.05 14.3 4.292 4.249 4.23 8.434-.188 12.553s-5.241 8.863-2.469 14.232c2.77 5.366 1.417 9.326-4.058 11.882-5.474 2.552-7.722 6.811-6.747 12.77.976 5.962-1.532 9.308-7.527 10.047z"></path>
            </g>
        </svg>
            </a>
          </div><!-- /header--logo -->
          <div class="col-md-3 header_info">
            <div class="header_phones">
              <?php if( have_rows('header_phones', 38) ): while ( have_rows('header_phones', 38) ) : the_row(); ?>
              <a href="tel:<?php the_sub_field('sub_field_name'); ?>"><?php the_sub_field('header_phone', 38); ?></a>
              <?php endwhile; endif; ?>
              <span class="open--phones"><i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
            </div>
          </div>
           <nav class="nav header--nav col-md-7" role="navigation">
              <?php wpeHeadNav(); ?>
            </nav><!-- /header--nav -->
             <div id="msMiniCart" class="header-cart">
                <div class="header__cart--inner" id="shopping_button">
                  <?php global $woocommerce; ?>
                  <a class="your-class-name" href="/cart.htm" title="<?php _e('Корзина', 'woothemes'); ?>">
                    <i class="fa fa-shopping-cart">
                      <span class="items-count">
                        <?php echo sprintf(_n('%d item', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
                      </span>
                    </i>
                    <?php echo $woocommerce->cart->get_cart_total(); ?>
                  </a>
                </div>
            </div>
        </div><!-- /.row -->

      </div><!-- /.container -->
    </div><!--header__position--wrap -->
  </header><!-- /header -->

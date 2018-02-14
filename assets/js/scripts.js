// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

//OWL
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    autoplay: true,
    items: 1
  });
});

//Load screen fade
$(document).ready(function(){
    $(".load__screen--wrapp").delay(1500).fadeOut(1000)
});

$(document).ready(function(){
    $(".slider_wraper").hide().delay(1000).fadeIn(2000)
});

//FP Product tabs
$(".tab_content_item").not(":first").hide();
$(".tabs .tab_item").click(function() {
  $(".tabs .tab_item").removeClass("current").eq($(this).index()).addClass("current");
  $(".tab_content_item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("current");

//Modals
$( ".open__modal--recall" ).click(function() {
  event.preventDefault();
  $('.modal_recall').fadeIn( "400", function() {
    
  });
});
$('.close__modal--recall').click(function() {
  event.preventDefault();
  $('.modal_recall').fadeOut( "400", function() {
    
  });
});

//Hide contact-card
$( ".contacts__buttons--wrap" ).click(function() {
  $(".contact_card").toggleClass('contact--hidden');
  $('.hide__effect--paragraph').toggleClass('paragraph--hidden');
});


//header phones
$('.open--phones').click(function() {
  $('.header_phones').toggleClass('open__header--phones');
  $(this).toggleClass('top--button');
  if($(this).hasClass('top--button')) {
    $(this).html('<i class="fa fa-angle-double-up" aria-hidden="true"></i>');
  }
  else {
    $(this).html('<i class="fa fa-angle-double-down" aria-hidden="true"></i>');
  }
});

//Scroll nav fixed
var lastScrollTop = 10;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
       $('.header__position--wrap').addClass('header-fixed');
   } else if (st < lastScrollTop) {
     $('.header__position--wrap').removeClass('header-fixed');
   }
});

//Slide to second
$('.to_second').click(function(e) {
	e.preventDefault();
	var blockPosition = -100;
	 $('html,body').animate({
        scrollTop: $("#second--about").offset().top + blockPosition
    },'slow');
});

$('.to_specials').click(function(e) {
	e.preventDefault();
	var thirdPosition = -50;
	 $('html,body').animate({
        scrollTop: $("#third--product").offset().top + thirdPosition
    },'slow');
});

//Scroll to top
$(document).ready(function(){
$('.scrollToTop').hide();
	$(window).scroll(function(){
		if ($(this).scrollTop() > 300) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
!function(){for(var e,o=function(){},t=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeline","timelineEnd","timeStamp","trace","warn"],n=t.length,l=window.console=window.console||{};n--;)l[e=t[n]]||(l[e]=o)}(),"undefined"==typeof jQuery?console.warn("jQuery hasn't loaded"):console.log("jQuery has loaded"),$(document).ready(function(){$(".owl-carousel").owlCarousel({autoplay:!0,items:1})}),$(document).ready(function(){$(".load__screen--wrapp").delay(1500).fadeOut(1e3)}),$(document).ready(function(){$(".slider_wraper").hide().delay(1e3).fadeIn(2e3)}),$(".tab_content_item").not(":first").hide(),$(".tabs .tab_item").click(function(){$(".tabs .tab_item").removeClass("current").eq($(this).index()).addClass("current"),$(".tab_content_item").hide().eq($(this).index()).fadeIn()}).eq(0).addClass("current"),$(".open__modal--recall").click(function(){event.preventDefault(),$(".modal_recall").fadeIn("400",function(){})}),$(".close__modal--recall").click(function(){event.preventDefault(),$(".modal_recall").fadeOut("400",function(){})}),$(".contacts__buttons--wrap").click(function(){$(".contact_card").toggleClass("contact--hidden"),$(".hide__effect--paragraph").toggleClass("paragraph--hidden")}),$(".open--phones").click(function(){$(".header_phones").toggleClass("open__header--phones"),$(this).toggleClass("top--button"),$(this).hasClass("top--button")?$(this).html('<i class="fa fa-angle-double-up" aria-hidden="true"></i>'):$(this).html('<i class="fa fa-angle-double-down" aria-hidden="true"></i>')});var lastScrollTop=10;$(window).scroll(function(e){var o=$(this).scrollTop();o>lastScrollTop?$(".header__position--wrap").addClass("header-fixed"):o<lastScrollTop&&$(".header__position--wrap").removeClass("header-fixed")}),$(".to_second").click(function(e){e.preventDefault();$("html,body").animate({scrollTop:$("#second--about").offset().top+-100},"slow")}),$(".to_specials").click(function(e){e.preventDefault();$("html,body").animate({scrollTop:$("#third--product").offset().top+-50},"slow")}),$(document).ready(function(){$(".scrollToTop").hide(),$(window).scroll(function(){$(this).scrollTop()>300?$(".scrollToTop").fadeIn():$(".scrollToTop").fadeOut()}),$(".scrollToTop").click(function(){return $("html, body").animate({scrollTop:0},800),!1})});var contactScrollMenu=200;$(window).scroll(function(e){var o=$(this).scrollTop();o>contactScrollMenu?$(".contact-menu").addClass("cont-menu_scroll"):o<contactScrollMenu&&$(".contact-menu").removeClass("cont-menu_scroll")});
//# sourceMappingURL=maps/scripts.js.map

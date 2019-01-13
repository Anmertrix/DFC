//Animate CSS + WayPoints javaScript Plugin
//Example: $(".element").animated("zoomInUp");
//Author URL: http://webdesign-master.ru
(function($) {
  $.fn.animated = function(inEffect) {
    $(this).each(function() {
      var ths = $(this);
      ths.css("opacity", "0").addClass("animated").waypoint(function(dir) {
        if (dir === "down") {
          ths.addClass(inEffect).css("opacity", "1");
        };
      }, {
        offset: "90%"
      });

    });
  };
})(jQuery);

$(document).ready(function(){

  $(".loader_inner").fadeOut();
  $(".loader").delay(10).fadeOut("slow");

  if ( $(window).width() < 992 ) {
    var certificate_items = $('.certificate_items');
    certificate_items.slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: false,
      pauseOnFocus: true,
      draggable: true,
      centerMode: false,
      autoplay: false,
      autoplaySpeed: 2000,
      arrows: true,
      dots: false,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }

  var reviews_items = $('.reviews_items');
  reviews_items.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    pauseOnFocus: true,
    draggable: true,
    centerMode: false,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: true,
    dots: true
  });

  if ( $(window).width() < 768 ) {
    var services_items = $('.services_items');
    services_items.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      pauseOnFocus: true,
      draggable: true,
      centerMode: false,
      autoplay: false,
      autoplaySpeed: 2000,
      arrows: true,
      dots: false
    });
  
    var scheme_items = $('.scheme_items');
    scheme_items.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      pauseOnFocus: true,
      draggable: true,
      centerMode: false,
      autoplay: false,
      autoplaySpeed: 2000,
      arrows: true,
      dots: false
    });
  
    var news_items = $('.news_items');
    news_items.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      pauseOnFocus: true,
      draggable: true,
      centerMode: false,
      autoplay: false,
      autoplaySpeed: 2000,
      arrows: true,
      dots: false
    });

    var categories = $('.categories');
    categories.slick({
      slidesToShow: 2,
      slidesToScroll: 2,
      infinite: false,
      pauseOnFocus: true,
      draggable: true,
      centerMode: false,
      autoplay: false,
      autoplaySpeed: 2000,
      arrows: true,
      variableWidth: true,
      dots: false
    });
  }

  $('.toggle_menu').on("click", function(e) {
    $(this).toggleClass("active");
    $(".mob_menu").slideToggle();
    return false;
  });

  $('.menu-item-has-children >a').on("click", function(e) {
    $(this).parent().toggleClass("active_menu_item");
    $(this).parent().find(".sub-menu").slideToggle();
    $(this).parent().siblings().slideToggle();
    return false;
  });


  $('.lc_menu').on("click", function(e) {
    $(this).toggleClass("active");
    $(".lc_sub_menu").slideToggle();
    return false;
  });

  $('.read_more').on("click", function(e) {
    $(this).hide();
    $(".shop_tur_text_hide").removeClass("shop_tur_text_hide");
    return false;
  });

  $(".guestion").click(function() {
    $(this).parent().siblings().find(".answer").slideUp();
    $(this).parent().siblings().find(".guestion").removeClass("active");
    $(this).toggleClass("active");
    $(this).next().slideToggle();
  });

  $('.login').on("click", function(e) {
    $(".login_panel").show();
    $(".mob_menu").hide();
    $(".toggle_menu").removeClass("active");
    return false;
  });

  $('.login_panel_close').on("click", function(e) {
    $(".login_panel").hide();
    return false;
  });

  $(function() {
    $('input[name="daterange"]').daterangepicker({
      opens: 'left',
      locale: {
        format: 'DD.MM.YYYY'
      }
    });
  });

  $('.remove_order').on("click", function(e) {
    $(this).parents('.delivery_table_product').hide();
    return false;
  });

  $('.delivery_table_product div').on( 'keydown', 'textarea', function (e){
      $(this).css('height', 'auto' );
      $(this).height( this.scrollHeight );
  });
  $('.delivery_table_product div').find( 'textarea' ).keydown();

  $(".pmask").mask("+7 (999) 99 99 999");

  $(".dmask").mask("99 / 99 / 9999");

  $(".animation_1").animated("fadeIn");
  $(".animation_2").animated("fadeInLeft");
  $(".animation_3").animated("fadeInRight");
  $(".animation_4").animated("zoomIn");
  $(".animation_5").animated("fadeInUp");
  $(".animation_6").animated("tada");
  $(".animation_7").animated("flash");
  $(".animation_8").animated("zoomInDown");

});


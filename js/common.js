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


  $(".write_review").click(function () {
    var elementClick = $(this).attr("href");
    var destination = $(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1000);
    return false;
  });

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


  change_other_products();
  $(window).resize(function() {
    change_other_products();
  });


  function change_other_products() {
    
    var services_items = $('.services_items');
    var scheme_items = $('.scheme_items');
    var news_items = $('.news .news_items');
    if ( $(window).width() < 768 ) {
      if (!services_items.hasClass('slick-initialized')) {
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
      }
    
      if (!scheme_items.hasClass('slick-initialized')) {
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
      }
    
      if (!news_items.hasClass('slick-initialized')) {
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
      }

    } else {
      if (services_items.hasClass('slick-initialized')) {
        services_items.slick('unslick');
      }
      if (scheme_items.hasClass('slick-initialized')) {
        scheme_items.slick('unslick');
      }
      if (news_items.hasClass('slick-initialized')) {
        news_items.slick('unslick');
      }
    }
  }

  var categories = $('.categories');
  categories.slick({
    slidesToShow: 6,
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
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        variableWidth: true,
      }
    }
    ]
  });

  var video_reviews_items = $('.video_reviews_items');
  video_reviews_items.slick({
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
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
  });

  var letters_items = $('.letters_items');
  letters_items.slick({
    slidesToShow: 4,
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
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
  });



  var thubn_items = $('.thubn_items');
  thubn_items.slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: false,
    pauseOnFocus: true,
    draggable: true,
    centerMode: false,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: false,
    dots: false,
    vertical: true,
    verticalSwiping: true,
    focusOnSelect: true,
    asNavFor: '.modal_prod_slides'
  });

  var modal_prod_slides = $('.modal_prod_slides');
  modal_prod_slides.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    pauseOnFocus: true,
    draggable: false,
    centerMode: false,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: false,
    dots: false,
    asNavFor: '.thubn_items',
    responsive: [
    {
      breakpoint: 768,
      settings: {
        draggable: true,
        arrows: true,
      }
    }
    ]
  });

  $(document).on('opening', '#modal-compare', function () {
    
    if (!thubn_items.hasClass('slick-initialized')) {
      thubn_items.slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: false,
        pauseOnFocus: true,
        draggable: true,
        centerMode: false,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        focusOnSelect: true,
        vertical: true,
        asNavFor: '.modal_prod_slides'
      });
    } else {
      thubn_items.slick('resize');
    }
    if (!modal_prod_slides.hasClass('slick-initialized')) {
      modal_prod_slides.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        pauseOnFocus: true,
        draggable: true,
        centerMode: false,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        asNavFor: '.thubn_items'
      });
    } else {
      modal_prod_slides.slick('resize');
    }
    if ( $(window).width() < 992 ) {
      modal_prod_slides.slick('slickGoTo', 2);
    }
  
  });

  $('.toggle_menu').on("click", function(e) {
    $(this).toggleClass("active");
    $(".mob_menu").slideToggle();
    return false;
  });

  $('.menu-item-has-children >a').on("click", function(e) {
    if ( $(window).width() < 992 ) {
      $(this).parent().toggleClass("active_menu_item");
      $(this).parent().find(".sub-menu").slideToggle();
      $(this).parent().siblings().slideToggle();
      return false;
    }
  });


  $('.lc_menu_wrap').on("click", function(e) {
    $(this).parent().toggleClass("active");
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

  $('.search_sort i').on("click", function(e) {
    $(this).next().slideToggle();
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


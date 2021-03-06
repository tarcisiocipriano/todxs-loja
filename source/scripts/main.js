jQuery('.slick-carousel').slick({
  dots: true,
  arrows: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 4000,
  speed: 500,
  fade: true,
  cssEase: 'linear',
});

jQuery('.header__burguer-button').click( function() {
  jQuery('.header__nav').addClass('show');
  jQuery("body").css("overflow", "hidden");
});

jQuery('.header__close-button').click( function() {
  jQuery('.header__nav').removeClass('show');
  jQuery("body").css("overflow", "auto");
});
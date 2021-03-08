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

jQuery('.slick-popular').slick({
  infinite: true,
  slidesToShow: 5,
  touchMove: false,
  // slidesToScroll: 5,
  arrows: true,
  dots: false,
  responsive: [
    {
      breakpoint: 993,
      settings: {
        slidesToShow: 4,
        // slidesToScroll: 4,
      }
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 3,
        // slidesToScroll: 3
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2,
        // slidesToScroll: 2
      }
    }
  ]
});

jQuery('.header__burguer-button').click( function() {
  jQuery('.header__nav').addClass('show');
  jQuery("body").css("overflow", "hidden");
});

jQuery('.header__close-button').click( function() {
  jQuery('.header__nav').removeClass('show');
  jQuery("body").css("overflow", "auto");
});

lottie.loadAnimation({
  container: document.getElementById('rainbow-cat'), // the dom element that will contain the animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'https://assets7.lottiefiles.com/packages/lf20_pKGPqV.json' // the path to the animation json
});
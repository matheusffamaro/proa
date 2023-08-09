jQuery(document).ready(function () {
  jQuery('.postslide').slick(
    {
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      prevArrow: jQuery('.prev2'),
      nextArrow: jQuery('.next2'),
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '10px',
            slidesToShow: 2,
            infinite: true,
          },
        },
      ],
    },
    400,
  );
});

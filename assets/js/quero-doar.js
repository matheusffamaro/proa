jQuery(document).ready(function () {
  jQuery('.financiadores-cruzeiro-slick').slick(
    {
      arrows: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: jQuery('.prev-cruzeiro'),
      nextArrow: jQuery('.next-cruzeiro'),
    },
    400,
  );
  jQuery('.financiadores-navio-slick').slick(
    {
      arrows: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: jQuery('.prev-navio'),
      nextArrow: jQuery('.next-navio'),
    },
    400,
  );
  jQuery('.financiadores-barco-slick').slick(
    {
      arrows: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: jQuery('.prev-barco'),
      nextArrow: jQuery('.next-barco'),
    },
    400,
  );
  jQuery('.financiadores-canoa-slick').slick(
    {
      arrows: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: jQuery('.prev-canoa'),
      nextArrow: jQuery('.next-canoa'),
    },
    400,
  );
  jQuery('.financiadores-apoiadores-slick').slick(
    {
      arrows: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: jQuery('.prev-apoiadores'),
      nextArrow: jQuery('.next-apoiadores'),
    },
    400,
  );
  jQuery('.financiadores-empregadores-slick').slick(
    {
      arrows: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: jQuery('.prev-empregadores'),
      nextArrow: jQuery('.next-empregadores'),
    },
    400,
  );
});

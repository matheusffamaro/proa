jQuery(document).ready(function () {
  var swiper = new Swiper('.relatorioSlide2', {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,

    navigation: {
      nextEl: '.swiper-button-next.dois',
      prevEl: '.swiper-button-prev.dois',
    },
  });
  var swiper = new Swiper('.relatorioSlide', {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});

jQuery(document).ready(function () {
  jQuery('.slidemidia').slick(
    {
      infinite: true,
      centerMode: true,
      centerPadding: '10px',
      slidesToShow: 4,
      slidesToScroll: 4,
      prevArrow: jQuery('.prev'),
      nextArrow: jQuery('.next'),
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
          },
        },
      ],
    },
    400,
  );
  jQuery('.financiadoresSlide').slick(
    {
      infinite: true,
      centerMode: true,
      centerPadding: '10px',
      slidesToShow: 4,
      slidesToScroll: 4,
      prevArrow: jQuery('.prev1'),
      nextArrow: jQuery('.next1'),
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

  jQuery('.slider-web').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    centerMode: true,
    focusOnSelect: true,
  });

  var swiper = new Swiper('.slideherohome', {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

  var swiper = new Swiper('.mySwiper', {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});

jQuery(document).ready(function ($) {
  var swiperStorie = new Swiper('.webStorieSlide', {
    slidesPerView: 'auto',
    centeredSlides: true,
    spaceBetween: 0,
    pagination: {
      el: '.swiperTwo-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  var swiper = new Swiper('.slide-blog', {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

  // Monsi Lightbox

  // Abrir modal
  /*
  $("#webstories .post__item").click(function (e) {
    e.preventDefault();
    const postID = $(e.target).parent().parent().attr("data-target");

    $("#" + postID).addClass("active");
  });
  */

  // Close modal
  $('.lightbox').click(function (e) {
    if ($(e.target).hasClass('lightbox')) {
      $('div.lightbox').removeClass('active');
    }

    if ($(e.target).is('#close-nav')) {
      $('div.lightbox').removeClass('active');
    }
  });

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    //console.log(scroll);
    if (scroll >= 50) {
      //console.log('a');
      $('header').addClass('change');
    } else {
      //console.log('a');
      $('header').removeClass('change');
    }
  });
	
	$('.btn-login').click(function(e) {
		e.preventDefault();
		$('.btn__wrapper').toggleClass('active__drop');
	});
  

  document.addEventListener('scroll', function (e) {
    if (!Cookies.get('cookies_site')) {
      $('#cookies').addClass('active');
    }
    $('#cookies a.accept-cookies').on('click', function () {
      Cookies.set('cookies_site', true, { expires: 7 });
      $('#cookies').removeClass('active');
      setTimeout(function () {
        $('#cookies').remove();
      }, 400);
    });
  });
});

const monsi = function () {
  console.log(
    'Esse site foi feito pela Monsi! Com carinho e muito café! ☕❤ www.monsi.com.br ',
  );
};

document.addEventListener("DOMContentLoaded", () => {
  const iframeItem = document.querySelector(".content-iframe");

  if (iframeItem) {
    const iframe = iframeItem.querySelector("iframe");
    iframe.style.height = "600px";
  }
});
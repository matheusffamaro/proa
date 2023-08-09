jQuery(document).ready(function () {
  var swiper = new Swiper(".timelineSlide", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 40,
        freeMode: false,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });

  var swiper = new Swiper(".relatorioSlide", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 40,
        freeMode: false,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });

  var swiper = new Swiper(".equipeSlide", {
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 40,
        freeMode: false,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },

        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });
});

jQuery(document).ready(function ($) {
  const resetClass = function () {
    let items = document.querySelectorAll(".conselhos .col-menu a");

    let itemsTwo = document.querySelectorAll(".col-content .item-content");

    items.forEach(function (e) {
      e.classList.remove("active");
    });

    itemsTwo.forEach(function (e) {
      e.classList.remove("active");
    });
  };

  $('a[data-alvo="diretivo"]').click(function (e) {
    e.preventDefault();
    resetClass();
    $(this).toggleClass("active");

    $('div[data-name="diretivo"]').toggleClass("active");
  });

  $('a[data-alvo="fiscal"]').click(function (e) {
    e.preventDefault();
    resetClass();
    $(this).toggleClass("active");

    $('div[data-name="fiscal"]').toggleClass("active");
  });

  $('a[data-alvo="consultivo"]').click(function (e) {
    e.preventDefault();
    resetClass();
    $(this).toggleClass("active");

    $('div[data-name="consultivo"]').toggleClass("active");
  });

  // Abrir modal

  $("#post-act img, #post-act h3, #post-act strong").click(function (e) {
    e.preventDefault();
    const postID = $(e.target).parent().parent().attr("data-target");
    console.log(postID);
    $("#" + postID).addClass("active");
  });

  // Close modal
  $(".lightbox").click(function (e) {
    if ($(e.target).hasClass("lightbox")) {
      $("div.lightbox").removeClass("active");
    }
    if ($(e.target).hasClass("close-box")) {
      e.preventDefault();
      $("div.lightbox").removeClass("active");
    }
  });
});

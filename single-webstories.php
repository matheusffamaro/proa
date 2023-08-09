<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= the_title(); ?></title>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <style>
  /* Configs */
  input,
  textarea,
  button,
  select,
  a {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0) !important;
  }

  * {
    -webkit-tap-highlight-color: transparent !important;
    outline: none;
  }

  body {
    background-color: #1a1a1a;
  }

  main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 98vh;
  }

  .swiper {
    width: 48vh;
    height: auto;
    border-radius: 20px;
    overflow: hidden;
  }

  .swiper-slide {
    position: relative;
    height: 80vh;
    width: 100% !important;
  }

  .swiper-pagination.swiper-pagination-bullets.swiper-pagination-horizontal {
    display: flex;
    justify-content: space-between;
    top: 8px !important
  }

  .swiper-pagination-bullet {
    width: 100%;
    background-color: #00b8f2;
    border-radius: 0;
    height: 3px;
  }

  .swiper-pagination-bullet.slideView {
    opacity: 1;
  }

  .swiper-slide img {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 100%;
  }

  div#wrapper_slide {
    position: relative;
  }

  .swiper-button-next,
  .swiper-rtl .swiper-button-prev {
    right: -80px;
    left: auto;
  }

  .swiper-button-prev,
  .swiper-rtl .swiper-button-next {
    left: -80px;
    right: auto;
  }

  .swiper-button-prev {
    padding: 10px;
    background: #fff;
    border-radius: 1000px;
    width: 30px;
    height: 30px;
  }

  .swiper-button-prev:after,
  .swiper-rtl .swiper-button-next:after {
    content: 'prev';
    font-size: 20px;
    font-weight: bold;
    color: #00b8f2;
  }

  .swiper-button-next {
    padding: 10px;
    background: #fff;
    border-radius: 1000px;
    width: 30px;
    height: 30px;
  }

  .swiper-button-next:after,
  .swiper-rtl .swiper-button-prev:after {
    content: 'next';
    font-size: 20px;
    font-weight: bold;
    color: #00b8f2;
  }

  a#close-storie {
    display: flex;
    position: absolute;
    top: 25px;
    right: 21px;
    z-index: 999;
    background: #fff;
    color: #00b8f2;
    border-radius: 100px;
    width: 30px;
    height: 30px;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    font-family: sans-serif;
    font-size: 16px;
    line-height: 0;
  }


  .startSlide {
    opacity: 1 !important;
  }


  @media (max-width:720px) {

    body {
      margin: 0;
    }

    main {
      height: 100vh;
    }

    div#wrapper_slide {
      position: relative;
      overflow: hidden;
    }

    .swiper {
      width: 100vw;
      height: 100vh;
      border-radius: 0px;
      overflow: hidden;
    }

    .swiper-slide {
      position: relative;
      height: 100vh !important;
      width: 100% !important;
    }

    .swiper-slide img {
      position: absolute;
      top: 0;
      bottom: 0;
      width: 100%;
      height: -webkit-fill-available;
      object-fit: cover;
      display: block;
    }

    .swiper-button-prev,
    .swiper-rtl .swiper-button-next {
      left: 0;
      right: auto;
      top: 0;
      bottom: 0;
      height: 100vh !important;
      border-radius: 0 !important;
      width: 70px !important;
      opacity: 0 !important;
    }


    .swiper-button-next,
    .swiper-rtl .swiper-button-prev {
      right: 0;
      left: auto;
      top: 0;
      bottom: 0;
      height: 100vh !important;
      border-radius: 0 !important;
      width: 70px !important;
      opacity: 0 !important;
    }

    a#close-storie {
      display: flex;
      position: absolute;
      top: 25px;
      right: 21px;
      z-index: 999;
      background: #fff;
      color: #00b8f2;
      border-radius: 100px;
      width: 30px;
      height: 30px;
      justify-content: center;
      align-items: center;
      text-decoration: none;
      font-family: sans-serif;
      font-size: 16px;
      line-height: 0;
    }

  }
  </style>
</head>

<body>
  <main>

    <?php 
    $images = get_field('galeria');
    if( $images ): ?>
    <div id="wrapper_slide">
      <a id="close-storie" href="#">x</a>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php foreach( $images as $image ): ?>

          <div class="swiper-slide">
            <img src="<?php echo esc_url($image['sizes']['webstories']); ?>"
              alt="<?php echo esc_attr($image['alt']); ?>" />
          </div>

          <?php endforeach; ?>
          //

        </div>

        <div class="swiper-pagination"></div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <?php endif; ?>
  </main>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {

    // Close 

    const closeStories = document.querySelector('#close-storie');

    closeStories.addEventListener('click', (e) => {
      e.preventDefault();
      const lastURL = document.referrer;
      const urlPaths = lastURL.split('/');

      console.log(urlPaths)

      if (urlPaths[3] === 'en') {
        window.location.href = lastURL
      } else {
        window.location.href = '/'
      }

    })

    const viewSlide = () => {

      // if (el.classList.contains('slideView')) {
      //   el.classList.remove('slideView');
      // } else {
      //   el.classList.add('slideView');
      // }
    };


    const swiper = new Swiper('.swiper', {
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      on: {
        init: function() {
          let el = document.querySelector('.swiper-pagination-bullet-active');
          el.classList.add('startSlide');

          const nextBtn = document.querySelector('.swiper-button-next');
          const prevBtn = document.querySelector('.swiper-button-prev');

          nextBtn.addEventListener('click', () => {
            const index_currentSlide = swiper.realIndex;
            const currentSlide = swiper.slides[index_currentSlide];

            const paginations = document.querySelectorAll('.swiper-pagination-bullet');


            paginations[index_currentSlide].style.opacity = '1';
          });

          prevBtn.addEventListener('click', () => {
            const index_currentSlide = swiper.realIndex;
            const currentSlide = swiper.slides[index_currentSlide + 1];

            const paginations = document.querySelectorAll('.swiper-pagination-bullet');


            paginations[index_currentSlide + 1].style.opacity = '0.2';
          });
        },
      }

    });


  });
  </script>
</body>

</html>
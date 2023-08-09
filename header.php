<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title><?= wp_title(); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="57x57"
    href="<?php echo get_home_url()  ?>/wp-content/uploads/2021/10/favicon-144x144-1.png">
  <link rel="apple-touch-icon" sizes="60x60"
    href="<?php echo get_home_url()  ?>/wp-content/uploads/2021/10/favicon-144x144-1.png">
  <link rel="apple-touch-icon" sizes="72x72"
    href="<?php echo get_home_url()  ?>/wp-content/uploads/2021/10/favicon-144x144-1.png">
  <link rel="apple-touch-icon" sizes="76x76"
    href="<?php echo get_home_url()  ?>/wp-content/uploads/2021/10/favicon-144x144-1.png">
  <link rel="apple-touch-icon" sizes="114x114"
    href="<?php echo get_home_url()  ?>/wp-content/uploads/2021/10/favicon-144x144-1.png">
  <link rel="apple-touch-icon" sizes="120x120"
    href="<?php echo get_home_url()  ?>/wp-content/uploads/2021/10/favicon-144x144-1.png">
  <link rel="apple-touch-icon" sizes="144x144"
    href="<?php echo get_home_url()  ?>/wp-content/uploads/2021/10/favicon-144x144-1.png">
  <link rel="apple-touch-icon" sizes="152x152"
    href="<?php echo get_home_url()  ?>/wp-content/uploads/2021/10/favicon-144x144-1.png">
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_home_url()  ?>/wp-content/uploads/2021/10/favicon-144x144-1.png">
  <link rel="icon" type="image/png" sizes="192x192"
    href="<?php echo get_home_url()  ?>/wp-content/uploads/2021/10/favicon-144x144-1.png">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo get_home_url()  ?>/wp-content/uploads/2021/10/favicon-144x144-1.png">
  <link rel="icon" type="image/png" sizes="96x96"
    href="<?php echo get_home_url()  ?>/wp-content/uploads/2021/10/favicon-144x144-1.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_home_url()  ?>/wp-content/uploads/2021/10/favicon-144x144-1.png">

  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-M92RSC7');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body <?php body_class($c);?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M92RSC7" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <main>
    <header>
      <div class="nav">
        <div class="container">
          <input type="checkbox" id="nav-check">
          <div class="nav-header">
            <div class="nav-title">
              <a href="<?php echo get_home_url()  ?>">
                <img src="<?= get_template_directory_uri() . '/assets/img/logo-nova.svg' ?>" alt="Proa" title="Proa"
                  width="126" height="48">
              </a>
            </div>
          </div>
          <div class="nav-btn">
            <label for="nav-check">
              <span></span>
              <span></span>
              <span></span>
            </label>
          </div>

          <div class="nav-links">
            <?php if (get_locale() == 'pt_br'): ?>
            <?php wp_nav_menu(array('menu' => 5)); ?>
            <?php else:?>
            <?php wp_nav_menu(array('menu' => 42)); ?>
            <?php endif;?>
            <div class="lang__switch">
              <ul>
                <?php pll_the_languages(); ?>
              </ul>
            </div>
        	<div class="btn__wrapper">
				 <a href="#" class="btn-login">Login</a>
				<div class="options__menu">
					<a href="<?= get_field('login', 'option') ?>">Plataforma Proa</a>
					<a href="<?= get_field('login', 'option') ?>">Proprofissso</a>
				</div>
			  </div>
			  
          </div>
        </div>
      </div>
    </header>
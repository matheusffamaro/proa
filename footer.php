</main>
</body>
<footer>
  <div id="cookies">
    <div class="grid-cookies">
      <div class="col-one">
        <h3><?= checkLang() ? 'About cookies on this site' : 'Sobre cookies nesse site' ?></h3>
        <p>
          <?= checkLang() ? 'As part of our community, we will use cookies on this website to analyze your browsing preferences and deliver personalized content based on your profile and browsing habits. Cookies help us understand what content you like best and adapt our messages. For more information, see our  <a href="/politica-de-privacidade/">Privacy Policy</a> and  <a href="/politica-de-cookies/">Cookie Policy</a>. By accepting cookies, you agree to their use in accordance with our Cookies Policy.' : 'Como parte de nossa comunidade, nós usaremos cookies neste site para analisar suas preferências de navegação
          e oferecer conteúdo personalizado com base em seu perfil e hábitos de navegação. Os cookies nos ajudam a
          entender de qual conteúdo você mais gosta e a adaptar nossas mensagens. Para mais informações, consulte nossa
          <a href="/politica-de-privacidade/">Política de Privacidade</a> e <a href="/politica-de-cookies/">Política de
            Cookies</a>. Ao aceitar cookies, você concorda com o uso deles de acordo com a nossa Política de cookies.' ?>
        </p>
      </div>
      <div class="col-two">
        <a class="accept-cookies"><?= checkLang() ? 'Accept all cookies' : 'Aceitar todos os cookies' ?></a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="grid">
      <div class="col-one">
        <ul>
          <li><a href="<?= get_field('tiktok', 'option') ?>"><img
                src="<?= get_template_directory_uri() . '/assets/img/tiktok.svg' ?>" alt="TikTok" title="TikTok"
                width="9" height="11"></a></li>
          <li><a href="<?= get_field('instagram', 'option') ?>"><img
                src="<?= get_template_directory_uri() . '/assets/img/insta.svg' ?>" alt="Instagram" title="Instagram"
                width="11" height="11"></a></li>
          <li><a href="<?= get_field('linkedin', 'option') ?>"><img
                src="<?= get_template_directory_uri() . '/assets/img/linked.svg' ?>" alt="Linkedin" title="Linkedin"
                width="13" height="12"></a></li>
          <li><a href="<?= get_field('facebook', 'option') ?>"><img
                src="<?= get_template_directory_uri() . '/assets/img/facebook.svg' ?>" alt="Facebook" title="Facebook"
                width="6" height="11"></a></li>
          <li><a href="<?= get_field('youtube', 'option') ?>"><img
                src="<?= get_template_directory_uri() . '/assets/img/youtube.svg' ?>" alt="Youtube" title="Youtube"
                width="14" height="11"></a></li>
        </ul>

        <p><?= get_field('location', 'option') ?></p>
      </div>

      <div class="col-two">
        <h2 class="footer__title">NEWSROOM</h2>
        <?php wp_nav_menu(array('menu' => 6)); ?>
      </div>

      <div class="col-three">
        <h2 class="footer__title"><?= checkLang() ? 'SITE MAP' : 'MAPA DO SITE' ?></h2>
        <?php wp_nav_menu(array('menu' => 'mapa_site')); ?>
      </div>

      <div class="col-four">
        <h2 class="footer__title" style="font-size:14px;text-transform: capitalize">Newsletter</h2>
        <p><?= checkLang() ? 'Want to know about everything that happens at PROA? Subscribe to our newsletter!
' : 'Quer saber sobre tudo que acontece no PROA? Inscreva-se na nossa newsletter!' ?></p>
        <?php echo checkLang() ? do_shortcode('[contact-form-7 id="2269" title="Newsletter EN"]') : do_shortcode('[contact-form-7 id="1444" title="Newsletter"]');   ?>
      </div>
    </div>
  </div>
</footer>

</html>
<?php wp_footer(); ?>
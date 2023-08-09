<?php

/**
 * Template name: Typeform
 */

 get_header();
 
 ?>

<section class="hero-voluntario">
  <a href="<?php the_field('link_voluntario'); ?>">
    <img class="mobile_hidden" src="<?php the_field('imagem_de_fundo'); ?>" alt="">
    <img class="dekstop_hidden" src="<?php the_field('imagem_de_fundo_mobile'); ?>" alt="">
  </a>
</section>
<div id="form" data-tf-widget="<?php the_field('oembed_do_form');?>"></div>
<!--
<section class="form">
  <div class="container">
    
  </div>
</section>-->
<script src="//embed.typeform.com/next/embed.js"></script>
<?php

get_footer();
<?php 
/**
 * Template name: Página de obrigado 2 
 */
get_header(); ?>

<section class="obrigado">
  <div class="container">
    <div class="content-obrigado">
      <h1><?php the_field('titulo_obrigado');?></h1>
      <?php the_field('descricao_obrigado');?>
    </div>
  </div>
</section>


<?php get_footer(); ?>
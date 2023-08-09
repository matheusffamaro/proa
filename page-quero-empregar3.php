<?php 
/**
 * Template name: Quero empregar 3
 */
get_header(); ?>

<section class="queroempregar">
    <img src="<?php the_field('imagem_de_destaque');?>" alt="">
    <div class="container">
        <div class="content-queroempregar">
            <h1><?php the_field('titulo');?></h1>
            <?php the_field('descricao');?>
            <span><?php the_field('texto_de_apoio');?></span>
        </div>
    </div>
</section>


<?php get_footer(); ?>
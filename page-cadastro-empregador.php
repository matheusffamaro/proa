<?php
/**
 * Template name: Cadastro empregador 
 */
get_header();
?>

<section class="hero-inscricao-voluntario">
    <img class="mobile_hidden" src="<?php the_field('imagem_de_fundo'); ?>" alt="">
    <img class="dekstop_hidden" src="<?php the_field('imagem_de_fundo_mobile'); ?>" alt="">
</section>
<section class="detalhes">
    <div class="container">
        <div class="d-grid">
            <div class="detalhes-empregar">
                <?php the_field('descricao_empregar');?>
            </div>
            <div class="detalhes-empregar">
                <?php the_field('aviso');?>
            </div>
        </div>
    </div>
</section>
<section class="querstionario">
    <div class="content-questionario">
        <h2><?php the_field('titulo');?></h2>
    </div>
</section>
<div class="content-iframe" style="padding: 0;">
	<div id="form" data-tf-widget="<?php the_field('formulario');?>"></div>
	<!--<div class="container">
		
	</div>-->
</div>
<script src="//embed.typeform.com/next/embed.js"></script>
<?php
get_footer();
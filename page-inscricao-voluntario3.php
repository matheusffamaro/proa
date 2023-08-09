<?php
/**
 * Template name: Me inscrever para voluntário  2
 */
get_header();
?>

<section class="hero-inscricao-voluntario">
    <a href="<?php the_field('link_voluntario'); ?>">
        <img class="mobile_hidden" src="<?php the_field('imagem_de_fundo'); ?>" alt="">
        <img class="dekstop_hidden" src="<?php the_field('imagem_de_fundo_mobile'); ?>" alt="">
    </a>
</section>
<section class="bemvindo">
    <div class="container">
        <div class="content-bemvindo">
            <h2><?php the_field('titulo_bemvindo');?></h2>
            <p><?php the_field('descricao_bemvindo');?></p>
        </div>
    </div>
</section>
<section class="detalhes">
    <div class="container">
        <div class="d-grid">
            <div class="tecnologia">
                <?php the_field('conteudo_tecnologia');?>
            </div>
            <div class="tecnologia voluntarios">
                <?php the_field('conteudo_voluntarios');?>
            </div>
        </div>
    </div>
</section>
<section class="interesse-participar">
    <div class="container">
        <div class="content-interesse">
            <h2><?php the_field('link_do_botao');?></h2>
            <a href="<?php the_field('link_do_botao');?>" class="btn btn-bluelight">Quero ser voluntário</a>
        </div>
    </div>
</section>
<?php
get_footer();
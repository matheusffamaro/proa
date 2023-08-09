<?php

/**
 * Template name: Homepage
 */

 get_header();
 
 ?>

<?php if (checkLang()) : ?>
<style>
.item-curso:first-child:before {
  content: "";
  position: absolute;
  top: 40px;
  left: 40px;
  background-image: url(<?= wp_get_attachment_url(2376) ?>);
  background-position: center;
  background-size: cover;
  width: 120px;
  height: 120px;
  z-index: 1;
}

.item-curso:last-child:before {
  content: "";
  position: absolute;
  top: 40px;
  left: 40px;
  background-image: url(<?= wp_get_attachment_url(2375) ?>);
  background-position: center;
  background-size: cover;
  width: 120px;
  height: 120px;
  z-index: 1;
}
</style>
<?php endif; ?>

<section class="hero-home">
  <?php if ( have_rows('heroslide') ) : ?>
  <div class="swiper-container slideherohome">
    <div class="swiper-wrapper">
      <?php while( have_rows('heroslide') ) : the_row(); ?>
      <div class="swiper-slide">
        <a href="<?php the_sub_field('link'); ?>">
          <img class="mobile_hidden" src="<?php the_sub_field('imagem'); ?>" alt="">
          <img class="dekstop_hidden" src="<?php the_sub_field('imagem_mobile'); ?>" alt="">
        </a>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <?php endif; ?>
</section>
<section class="cursoideal">
  <div class="container">
    <h2><?php the_field('titulo_2');?></h2>
    <div class="d-grid">
      <?php if ( have_rows('lista_de_cursos') ) : ?>
      <?php while( have_rows('lista_de_cursos') ) : the_row(); ?>
      <div class="item-curso">
        <img src="<?php the_sub_field('imagem_do_curso'); ?>" alt="<?php the_sub_field('titulo_do_item'); ?>"
          title="<?php the_sub_field('titulo_do_item'); ?>">
        <div class="content-curso">
          <h3><?php the_sub_field('titulo_do_item'); ?></h3>
          <?php if ( have_rows('lista_de_detalhes') ) : ?>
          <?php while( have_rows('lista_de_detalhes') ) : the_row(); ?>
          <div class="d-flex">
            <img src="<?php the_sub_field('icone'); ?>" alt="">
            <div class="detalhes-curso">
              <h4><?php the_sub_field('titulo_item'); ?></h4>
              <?php the_sub_field('detalhes_do_item');?>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
          <div class="bottom-curso">
            <p><?php the_sub_field('texto_de_apoio_cta'); ?></p>
            <span><?php the_sub_field('titulo_de_apoio_cta'); ?></span>
            <?php 
                                $link = get_sub_field('link_do_cta');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
            <a class="button" href="<?php echo esc_url( $link_url ); ?>"
              target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>
</section>
<section class="nossoquiz" style="background-image:url(<?php the_field('bg_quiz'); ?>)">
  <div class="container">
    <div class="content-nossoquiz">
      <span><?php the_field('subtituloquiz');?></span>
      <h2><?php the_field('tituloquiz');?></h2>
      <h3><?php the_field('tituloquiz2');?></h3>
      <a href="<?php the_field('link_quiz');?>"
        class="btn btn-quiz"><?= checkLang() ? 'Take the quis' : 'Fazer o quiz'; ?></a>
    </div>
  </div>
</section>
<?php 

echo get_template_part('components/avaliacoes');?>
<?php if (!checkLang()) : ?>
<section class="blog">
  <div class="container">
    <h2>Bora se interar?</h2>
    <div class="posts">
      <div class="d-grid">
        <?php
        $posts_slide = get_field('selecione_os_posts','options');
        if($posts_slide) : ?>
        <?php foreach($posts_slide as $postt) : 
                $permalink = get_permalink( $postt->ID );
                $title = get_the_title( $postt->ID );
            ?>
        <div class="post-item">
          <div class="grid">
            <div class="post-image">
              <a href="<?php echo $permalink; ?>" title="<?php echo $title; ?>">
                <img src="<?php the_field('imagem_de_destaque', $postt->ID) ?>" alt="<?php echo $title; ?>"
                  title="<?php echo $title; ?>">
              </a>
            </div>
            <div class="post-content">
              <a href="<?php echo $permalink; ?>">
                <h3><?php echo $title; ?></h3>
              </a>
              <p><?php the_field('post_resume', $postt->ID);?></p>
            </div>
          </div>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php else:?>

<?php endif;?>
<?php
echo get_template_part('components/webstories'); 
echo get_template_part('components/namidia');
?>
<section class="quemsomos">
  <div class="container">
    <div class="content-quemsomos">
      <h2><?php $tituloQuem = get_field('titulo4'); echo $tituloQuem;?></h2>
      <?php the_field('descricao4');?>
      <h3><?php the_field('titulo_de_apoio');?></h3>
      <?php if ( have_rows('projetos') ) : ?>
      <ul class="items-quemsomos">
        <?php while( have_rows('projetos') ) : the_row(); ?>
        <li>
          <a href="<?php the_sub_field('link_do_projeto'); ?>"><?php the_sub_field('nome_do_projeto'); ?></a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
      <?php 
            $link = get_field('botao4');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
      <a class="btn btn-quiz" href="<?php echo esc_url( $link_url ); ?>"
        target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
    </div>
  </div>
  <div class="d-flex flex-direction-column">
    <img src="<?php the_field('imagem_1');?>" alt="">
    <img src="<?php the_field('imagem_2');?>" alt="">
  </div>
</section>
<section class="financiadores namidia">
  <div class="container">
    <h2><?php the_field('titulofinanciadores'); ?></h2>
    <?php if ( have_rows('financiadores') ) : ?>
    <div class="financiadoresSlide">
      <?php while( have_rows('financiadores') ) : the_row(); ?>
      <div class="item">
        <img src="<?php the_sub_field('imagemmidia'); ?>">
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <?php if (!checkLang()): ?>
    <a href="<?php the_field('link_ver_mais_noticias')?>" class="btn-mini">Conheça todos os parceiros</a>
    <?php else:?>
    <a href="<?php the_field('link_ver_mais_noticias')?>" class="btn-mini">Meet all partners
    </a>

    <?php endif;?>
    <div class="container arrows">
      <div class="prev1"></div>
      <div class="next1"></div>
    </div>
  </div>
</section>
<?php

get_footer();
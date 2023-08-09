<?php 
/**
 * Template name: Quero empregar
 */
get_header(); ?>


<style>
/* Backgroud Desktop */

.hero img{
    width: 100%;
}

</style>

<section class="hero">
  
    <img class="mobile_hidden" src="<?php the_field('banner_desktop') ?>" alt="">
    <img class="dekstop_hidden" src="<?php the_field('banner_mobile') ?>" alt="">
</section>

<section class="envie">
  <div class="container">
    <div class="grid">
      <div class="col">
        <div class="text-content">
          <?= get_field('texto_vaga'); ?>
<?php if (pll_current_language() == 'pt'): ?>
                <a href="<?= get_permalink(238) ?>" id="btn-vaga">Envie sua vaga</a>
            <?php else:?>
                <a href="<?= get_permalink(2196) ?>" id="btn-vaga">Submit your job offer</a>
            <?php endif;?>
        </div>
      </div>
      <div class="col">
        <div class="background-image" style="background-image: url('<?= get_field('imagem') ?>')"></div>
      </div>
    </div>
  </div>
</section>

<!--<section class="avaliacoes">
  <div class="container">
    <h2>Depoimentos dos empregadores</h2>
    <?php if ( have_rows('depoimentos') ) : ?>
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <?php while( have_rows('depoimentos') ) : the_row(); ?>
        <div class="swiper-slide">
          <div class="img">
            <img src="<?= get_sub_field('imagem'); ?>" alt="Depoimento">
          </div>
          <div class="content-slide">
            <div class="avaliacao">
              <?php the_sub_field('depoimento'); ?>
            </div>
            <div class="nome">
              <h3><?php the_sub_field('nome'); ?></h3>
              <h4><?php the_sub_field('posicao'); ?></h4>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <?php endif; ?>
  </div>
</section>-->


<?php get_footer(); ?>
<?php if (!checkLang()): ?>
<section class="avaliacoes">
  <div class="container">
    <?php if(is_page(364)): ?>
    <h2>Conheça a história de quem já fez</h2>
    <?php else:?>
    <h2>O que é ser proane?</h2>
    <?php endif;?>
    <?php if ( have_rows('lista_de_avaliacoes','options') ) : ?>
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <?php while( have_rows('lista_de_avaliacoes','options') ) : the_row(); ?>
        <div class="swiper-slide">
          <div class="d-flex">
            <div class="itemtexto">
              <div class="avaliacao">
                <?php the_sub_field('texto_da_avaliacao','options'); ?>
              </div>
              <div class="nome">
                <h3><?php the_sub_field('nome','options'); ?></h3>
                <h4><?php the_sub_field('posicao','options'); ?></h4>
              </div>
            </div>
            <div class="itemimg">
              <img src="<?php the_sub_field('foto_da_pessoa','options'); ?>" alt="">
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
</section>
<?php else:?>
<section class="avaliacoes">
  <div class="container">
    <?php if(is_page(364)): ?>
    <h2>Conheça a história de quem já fez</h2>
    <?php else:?>
    <h2>What is it to be PROANE?</h2>
    <?php endif;?>
    <?php if ( have_rows('lista_de_avaliacoesen','options') ) : ?>
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <?php while( have_rows('lista_de_avaliacoesen','options') ) : the_row(); ?>
        <div class="swiper-slide">
          <div class="d-flex">
            <div class="itemtexto">
              <div class="avaliacao">
                <?php the_sub_field('texto_da_avaliacao','options'); ?>
              </div>
              <div class="nome">
                <h3><?php the_sub_field('nome','options'); ?></h3>
                <h4><?php the_sub_field('posicao','options'); ?></h4>
              </div>
            </div>
            <div class="itemimg">
              <img src="<?php the_sub_field('foto_da_pessoa','options'); ?>" alt="">
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
</section>
<?php endif;?>
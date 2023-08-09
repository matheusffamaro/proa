<?php

/**
 * Template name: Quero doar
 */

 get_header();
 
 ?>
<section class="hero-querodoar">
  <img class="mobile_hidden" src="<?php the_field('imagem_de_fundo'); ?>" alt="">
  <img class="dekstop_hidden" src="<?php the_field('imagem_de_fundo_mobile'); ?>" alt="">
</section>
<section class="querodoar">
  <div class="container">
    <h2><?php the_field('titulo_querodoar') ?></h2>
    <?php the_field('descricao_querodoar') ?>
    <?php 
        $link = get_field('link_querodoar');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
    <a class="btn btn-quiz" href="<?php echo esc_url( $link_url ); ?>"
      target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
    <img src="<?php the_field('imagem_de_destaque_querodoar') ?>" alt="">
    <?php if ( have_rows('tipos_de_doacao') ) : ?>
    <div class="item-comodoar">
      <?php while( have_rows('tipos_de_doacao') ) : the_row(); ?>
      <div class="grid">
        <div class="tipo-doacao">
          <h3><?php the_sub_field('nome_da_doacao'); ?></h3>
        </div>
        <div class="info-doacao">
          <?php the_sub_field('descricao_da_doacao'); ?>
          <?php 
                            $link = get_sub_field('botao');
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
      <?php endwhile; ?>
    </div>
    <?php endif; ?>

  </div>
</section>
<section class="queroser-voluntario">
  <div class="container">
    <h2><?php the_field('titulo_voluntario'); ?></h2>
    <p><?php the_field('descricao_voluntario'); ?></p>
    <?php if ( have_rows('itens__voluntario') ) : ?>
    <ul>
      <?php while( have_rows('itens__voluntario') ) : the_row(); ?>

      <li>
        <a href="<?php the_sub_field('link'); ?>">
          <?php the_sub_field('titulo'); ?>
        </a>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>

  </div>
</section>
<?php if(!checkLang()) : ?>
<section class="eventos">
  <div class="container">
    <?php if (pll_current_language() == 'pt'): ?>
    <h2>Próximos eventos</h2>
    <?php else:?>
    <h2>Next events</h2>
    <?php endif;?>
    <div class="grid">
      <?php if ( have_rows('eventos') ) : ?>
      <?php while( have_rows('eventos') ) : the_row(); ?>
      <div class="item-evento">
        <h3><?php the_sub_field('titulo_do_evento'); ?></h3>
        <h4><?php the_sub_field('subtitulo_evento'); ?></h4>
        <?php the_sub_field('descricao_evento'); ?>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<section class="financiadores financiadores-cruzeiro">
  <div class="container">
    <?php if (pll_current_language() == 'pt'): ?>
    <h2>Financiadores Cruzeiro</h2>
    <?php else:?>
    <h2>Cruise Sponsors</h2>
    <?php endif;?>
    <div class="d-grid d-none">
      <?php if ( have_rows('financiadores_cruzeiro') ) : ?>
      <?php while( have_rows('financiadores_cruzeiro') ) : the_row(); ?>
      <div class="item">
        <img src="<?php the_sub_field('logo'); ?>" alt="">
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="d-sm-none">
      <?php if ( have_rows('financiadores_cruzeiro') ) : ?>
      <div class="financiadores-cruzeiro-slick">
        <?php while( have_rows('financiadores_cruzeiro') ) : the_row(); ?>
        <div class="item">
          <img src="<?php the_sub_field('logo'); ?>" alt="">
        </div>
        <?php endwhile; ?>
      </div>
      <div class="arrows">
        <div class="prev-cruzeiro"></div>
        <div class="next-cruzeiro"></div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<section class="financiadores financiadores-navio">
  <div class="container">
    <?php if (pll_current_language() == 'pt'): ?>
    <h2>Financiadores Navio</h2>
    <?php else:?>
    <h2>Ship Sponsors</h2>
    <?php endif;?>
    <div class="d-grid d-none">
      <?php if ( have_rows('financiadores_navio') ) : ?>
      <?php while( have_rows('financiadores_navio') ) : the_row(); ?>
      <div class="item">
        <img src="<?php the_sub_field('logo'); ?>" alt="">
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="d-sm-none">
      <?php if ( have_rows('financiadores_navio') ) : ?>
      <div class="financiadores-navio-slick">
        <?php while( have_rows('financiadores_navio') ) : the_row(); ?>
        <div class="item">
          <img src="<?php the_sub_field('logo'); ?>" alt="">
        </div>
        <?php endwhile; ?>
      </div>
      <div class="arrows">
        <div class="prev-navio"></div>
        <div class="next-navio"></div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<section class="financiadores financiadores-barco">
  <div class="container">
    <?php if (pll_current_language() == 'pt'): ?>
    <h2>Financiadores Barco</h2>
    <?php else:?>
    <h2>Boat Sponsors</h2>
    <?php endif;?>
    <div class="d-grid d-none">
      <?php if ( have_rows('financiadores_barco') ) : ?>
      <?php while( have_rows('financiadores_barco') ) : the_row(); ?>
      <div class="item">
        <img src="<?php the_sub_field('logo'); ?>" alt="">
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="d-sm-none">
      <?php if ( have_rows('financiadores_barco') ) : ?>
      <div class="financiadores-barco-slick">
        <?php while( have_rows('financiadores_barco') ) : the_row(); ?>
        <div class="item">
          <img src="<?php the_sub_field('logo'); ?>" alt="">
        </div>
        <?php endwhile; ?>
      </div>
      <div class="arrows">
        <div class="prev-barco"></div>
        <div class="next-barco"></div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<section class="financiadores financiadores-canoa">
  <div class="container">
    <?php if (pll_current_language() == 'pt'): ?>
    <h2>Financiadores Canoa</h2>
    <?php else:?>
    <h2>Canoe Sponsors</h2>
    <?php endif;?>
    <div class="d-grid d-none">
      <?php if ( have_rows('financiadores_canoa') ) : ?>
      <?php while( have_rows('financiadores_canoa') ) : the_row(); ?>
      <div class="item">
        <img src="<?php the_sub_field('logo'); ?>" alt="">
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="d-sm-none">
      <?php if ( have_rows('financiadores_canoa') ) : ?>
      <div class="financiadores-canoa-slick">
        <?php while( have_rows('financiadores_canoa') ) : the_row(); ?>
        <div class="item">
          <img src="<?php the_sub_field('logo'); ?>" alt="">
        </div>
        <?php endwhile; ?>
      </div>
      <div class="arrows">
        <div class="prev-canoa"></div>
        <div class="next-canoa"></div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<section class="financiadores financiadores-apoiadores">
  <div class="container">

    <?php if (pll_current_language() == 'pt'): ?>
    <h2>Apoiadores</h2>
    <?php else:?>
    <h2>Supporters</h2>
    <?php endif;?>
    <div class="d-grid d-none">
      <?php if ( have_rows('apoiadores') ) : ?>
      <?php while( have_rows('apoiadores') ) : the_row(); ?>
      <div class="item">
        <img src="<?php the_sub_field('logo'); ?>" alt="">
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="d-sm-none">
      <?php if ( have_rows('apoiadores') ) : ?>
      <div class="financiadores-apoiadores-slick">
        <?php while( have_rows('apoiadores') ) : the_row(); ?>
        <div class="item">
          <img src="<?php the_sub_field('logo'); ?>" alt="">
        </div>
        <?php endwhile; ?>
      </div>
      <div class="arrows">
        <div class="prev-apoiadores"></div>
        <div class="next-apoiadores"></div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<section class="financiadores financiadores-empregadores">
  <div class="container">
    <?php if (pll_current_language() == 'pt'): ?>
    <h2>Empregadores</h2>
    <?php else:?>
    <h2>Employers</h2>
    <?php endif;?>
    <div class="d-grid d-none">
      <?php if ( have_rows('empregadores') ) : ?>
      <?php while( have_rows('empregadores') ) : the_row(); ?>
      <div class="item">
        <img src="<?php the_sub_field('logo'); ?>" alt="">
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="d-sm-none">
      <?php if ( have_rows('empregadores') ) : ?>
      <div class="financiadores-empregadores-slick">
        <?php while( have_rows('empregadores') ) : the_row(); ?>
        <div class="item">
          <img src="<?php the_sub_field('logo'); ?>" alt="">
        </div>
        <?php endwhile; ?>
      </div>
      <div class="arrows">
        <div class="prev-empregadores"></div>
        <div class="next-empregadores"></div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php

get_footer();
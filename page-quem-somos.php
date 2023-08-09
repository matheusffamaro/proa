<?php 
/**
 * Template name: Quem somos
 */
get_header(); ?>


<section class="hero">
  <img class="mobile_hidden" src="<?php the_field('banner_desktop') ?>" alt="">
  <img class="dekstop_hidden" src="<?php the_field('banner_mobile') ?>" alt="">
</section>


<section class="quem-somos">
  <div class="grid">
    <div class="col">
      <div class="text">
        <h2><?= get_field('titulo_quem') ?></h2>
        <p><?= get_field('texto_quem') ?></p>
      </div>
    </div>
    <div class="col">
      <img src="<?= get_field('imagem_quem'); ?>" alt="">
    </div>
  </div>
</section>

<section class="equipe d-desk">
  <div class="container">
    <h2><?= checkLang() ? 'Team' : 'Equipe' ?></h2>
    <hr>

    <div class="equipe__wrapper">


      <?php if ( have_rows('equipe') ) : $i = 0; ?>


      <?php while( have_rows('equipe') ) : the_row();  $i++; ?>

      <div class="equipe_membro" data-target="post-<?= $i ?>">
        <a href="#" id="post-act" style="text-decoration: none;">
          <img src="<?= the_sub_field('imagem') ?>" alt="">
          <h3><?= the_sub_field('nome') ?></h3>
          <strong><?= the_sub_field('cargo') ?></strong>
        </a>
      </div>

      <?php endwhile; ?>

      <?php endif; ?>
    </div>

  </div>
</section>

<section class="equipe d-mobile">
  <div class="container">
    <h2><?= checkLang() ? 'Team' : 'Equipe' ?></h2>
    <hr>

    <div class="equipe__wrapper equipeSlide">

      <div class="swiper-wrapper">
        <?php if ( have_rows('equipe') ) : ?>

        <?php while( have_rows('equipe') ) : the_row(); ?>

        <div class="equipe_membro swiper-slide">
          <img src="<?= the_sub_field('imagem') ?>" alt="">
          <h3><?= the_sub_field('nome') ?></h3>
          <strong><?= the_sub_field('cargo') ?></strong>
          <a href="<?= get_sub_field('linkedin') ?>" class="linkedin-part">
            <svg xmlns="http://www.w3.org/2000/svg" width="20.5" height="19.619" viewBox="0 0 20.5 19.619">
              <g id="Group_11065" data-name="Group 11065" transform="translate(-1514 -732.89)">
                <path id="Path_647" data-name="Path 647"
                  d="M1704.669,898.3l-4.1-.008h-.3v-.259c0-2.349.008-4.7-.017-7.046a4.67,4.67,0,0,0-.232-1.371,1.944,1.944,0,0,0-2.148-1.38,2.414,2.414,0,0,0-2.132,1.8,4.191,4.191,0,0,0-.087,1.012c-.007,2.329,0,4.658,0,6.986v.247h-4.385v-13.2h4.387v1.837c.118-.161.2-.273.279-.383a4.315,4.315,0,0,1,3.707-1.774,5.1,5.1,0,0,1,2.637.686,4.486,4.486,0,0,1,1.83,2.16,7.2,7.2,0,0,1,.528,2.309c.007.086.023.17.035.255Z"
                  transform="translate(-170.169 -145.793)" fill="#1c3380" />
                <path id="Path_648" data-name="Path 648"
                  d="M1516.723,732.89c.162.032.326.059.486.1a2.259,2.259,0,0,1-.162,4.424,2.731,2.731,0,0,1-2.105-.381,2.142,2.142,0,0,1-.9-1.409c-.009-.044-.026-.086-.04-.129v-.6a.541.541,0,0,0,.034-.091,2.135,2.135,0,0,1,1.511-1.746,6.537,6.537,0,0,1,.737-.165Z"
                  transform="translate(0 0)" fill="#1c3380" />
                <path id="Path_649" data-name="Path 649" d="M1520.76,892.749h4.363v13.194h-4.363Z"
                  transform="translate(-6.489 -153.458)" fill="#1c3380" />
              </g>
            </svg>
          </a>
          <div class="content-text"><?= the_sub_field('sobre') ?></div>
        </div>

        <?php endwhile; ?>

        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="resultados">
  <div class="container">
    <h2><?= checkLang() ? 'Results' : 'Resultados' ?></h2>

    <div class="resultados-item">
      <div>
        <img src="<?= get_template_directory_uri() . '/assets/img/pessoas.png' ?>" alt="Pessoas">
        <p><?= get_field('quantidade'); ?></p>
      </div>
      <div>
        <img src="<?= get_template_directory_uri() . '/assets/img/caixa.png' ?>" alt="">
        <p><?= get_field('formados'); ?></p>
      </div>
      <div>
        <img src="<?= get_template_directory_uri() . '/assets/img/porta.png' ?>" alt="">
        <p><?= get_field('evasao'); ?></p>
      </div>
      <div>
        <img src="<?= get_template_directory_uri() . '/assets/img/calendario.png' ?>" alt="">
        <p><?= get_field('presenca'); ?></p>
      </div>
    </div>
  </div>
</section>

<?php 
echo get_template_part('components/avaliacoes');
?>

<section class="anuais">
  <div class="container">
    <h2><?= checkLang() ? 'Annual Reports' : 'Relatórios anuais' ?></h2>
    <div class="grid">
      <div class="relatorioSlide">
        <div class="swiper-wrapper">
          <?php if ( have_rows('relatorios') ) : ?>

          <?php while( have_rows('relatorios') ) : the_row(); ?>

          <div class="item swiper-slide">
            <a href="<?= get_sub_field('arquivo') ?>">
              <img src="<?= get_sub_field('imagem') ?>" alt="Relatório PROA">
              <p><?= get_sub_field('nome') ?></p>
            </a>
          </div>

          <?php endwhile; ?>

          <?php endif; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>

    <a href="<?= get_post_permalink(189) ?>"><?= checkLang() ? 'See all' : 'Veja todos' ?></a>
  </div>
</section>

<div class="container">
  <hr class="green_hr">
</div>

<section class="atuacao">
  <div class="container">
    <div class="item">
      <div class="col">
        <h2><?= get_field('titulo_atuacao') ?></h2>
        <img src="<?= get_field('imagem_atuacao') ?>" alt="Imagem">
      </div>

      <div class="col-two">
        <div class="item-sub">
          <h3><?= get_field('profissao_atuacao') ?></h3>
          <p><?= get_field('texto_prof_atuacao') ?></p>

          <a href="<?= get_field('link') ?>"><?= checkLang() ? 'Learn more' : 'Saiba mais' ?></a>
        </div>

        <hr>

        <div class="item-sub">
          <h3><?= get_field('plataforma_titulo') ?></h3>
          <p><?= get_field('texto_plataforma') ?></p>

          <a href="<?= get_field('link_plataforma') ?>"><?= checkLang() ? 'Learn more' : 'Saiba mais' ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <hr class="green_hr">
</div>

<section class="atuacao">
  <div class="container">
    <div class="item">
      <div class="col">
        <h2><?= get_field('titulo_nossa') ?></h2>
        <img src="<?= get_field('imagem_nossa') ?>" alt="Imagem">
      </div>

      <div class="col-two">
        <div class="item-sub">
          <h3><?= get_field('profissao_titulo_nossa') ?></h3>
          <?= get_field('texto_nossa') ?>

          <a href="<?= get_field('link_nossa'); ?>"><?= checkLang() ? 'I want to employ' : 'Quero empregar' ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="timeline">
  <div class="container">
    <h2><?= checkLang() ? 'Timeline' : 'Linha do tempo' ?></h2>
    <div class="wrapper timelineSlide">
      <div class="swiper-wrapper">
        <?php if ( have_rows('linha_do_tempo') ) : ?>

        <?php while( have_rows('linha_do_tempo') ) : the_row(); ?>

        <div class="item swiper-slide">
          <h3><?php the_sub_field('data'); ?></h3>
          <img src="<?php the_sub_field('imagem'); ?>" alt="">
          <p><?php the_sub_field('texto'); ?></p>
        </div>

        <?php endwhile; ?>

        <?php endif; ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>

<section class="conselhos">
  <div class="container">
    <div class="grid">
      <div class="col-menu">
        <h2><?= checkLang() ? 'Boards' : 'Conselhos' ?></h2>
        <p><?= checkLang() ? 'Select a Board' : 'Selecione um conselho' ?></p>

        <ul>
          <li>
            <a href="#" class="active" data-alvo="diretivo">Diretivo</a>
          </li>
          <?php /*  <li>
            <a href="#" data-alvo="consultivo">Consultivo</a>
          </li> */ ?>
          <li>
            <a href="#" data-alvo="fiscal">Fiscal</a>
          </li>
        </ul>
      </div>

      <div class="col-content">
        <div class="item-content active" data-name="diretivo">
          <h2><?= checkLang() ? 'Board of Directors' : 'Conselho Diretivo' ?></h2>

          <div class="pessoas">
            <?php if ( have_rows('diretivo') ) : ?>

            <?php while( have_rows('diretivo') ) : the_row(); ?>

            <div class="pessoas-wrapper">
              <strong><?= get_sub_field('nome') ?></strong>
              <p><?= get_sub_field('cargo') ?></p>
            </div>

            <?php endwhile; ?>

            <?php endif; ?>

          </div>
        </div>
        <?php /* 
        <div class="item-content" data-name="consultivo">
          <h2>Conselho Consultivo</h2>

          <div class="pessoas">
            <?php if ( have_rows('consultivo') ) : ?>

        <?php while( have_rows('consultivo') ) : the_row(); ?>

        <div class="pessoas-wrapper">
          <strong><?= get_sub_field('nome') ?></strong>
          <p><?= get_sub_field('cargo') ?></p>
        </div>

        <?php endwhile; ?>

        <?php endif; ?>

      </div>
    </div>
    */?>
    <div class="item-content" data-name="fiscal">
      <h2><?= checkLang() ? 'Audit Committee' : 'Conselho fiscal' ?></h2>

      <div class="pessoas">
        <?php if ( have_rows('fiscal') ) : ?>

        <?php while( have_rows('fiscal') ) : the_row(); ?>

        <div class="pessoas-wrapper">
          <strong><?= get_sub_field('nome') ?></strong>
          <p><?= get_sub_field('cargo') ?></p>
        </div>

        <?php endwhile; ?>

        <?php endif; ?>

      </div>
    </div>
  </div>
  </div>
  </div>
</section>


<?php if ( have_rows('equipe') ) : $i = 0; ?>


<?php while( have_rows('equipe') ) : the_row();  $i++; ?>


<div class="lightbox" id="post-<?= $i ?>">
  <div class="content">

    <div class="box">

      <div class="img">
        <img src="<?= the_sub_field('imagem') ?>" alt="Imagem">
      </div>

      <div class="text">
        <a href="#" class="close-box">X</a>
        <h2>
          <?= the_sub_field('nome') ?>
        </h2>
        <h3><?= the_sub_field('cargo') ?></h3>
        <a href="<?= get_sub_field('linkedin') ?>" class="linkedin-part">
          <svg xmlns="http://www.w3.org/2000/svg" width="20.5" height="19.619" viewBox="0 0 20.5 19.619">
            <g id="Group_11065" data-name="Group 11065" transform="translate(-1514 -732.89)">
              <path id="Path_647" data-name="Path 647"
                d="M1704.669,898.3l-4.1-.008h-.3v-.259c0-2.349.008-4.7-.017-7.046a4.67,4.67,0,0,0-.232-1.371,1.944,1.944,0,0,0-2.148-1.38,2.414,2.414,0,0,0-2.132,1.8,4.191,4.191,0,0,0-.087,1.012c-.007,2.329,0,4.658,0,6.986v.247h-4.385v-13.2h4.387v1.837c.118-.161.2-.273.279-.383a4.315,4.315,0,0,1,3.707-1.774,5.1,5.1,0,0,1,2.637.686,4.486,4.486,0,0,1,1.83,2.16,7.2,7.2,0,0,1,.528,2.309c.007.086.023.17.035.255Z"
                transform="translate(-170.169 -145.793)" fill="#1c3380" />
              <path id="Path_648" data-name="Path 648"
                d="M1516.723,732.89c.162.032.326.059.486.1a2.259,2.259,0,0,1-.162,4.424,2.731,2.731,0,0,1-2.105-.381,2.142,2.142,0,0,1-.9-1.409c-.009-.044-.026-.086-.04-.129v-.6a.541.541,0,0,0,.034-.091,2.135,2.135,0,0,1,1.511-1.746,6.537,6.537,0,0,1,.737-.165Z"
                transform="translate(0 0)" fill="#1c3380" />
              <path id="Path_649" data-name="Path 649" d="M1520.76,892.749h4.363v13.194h-4.363Z"
                transform="translate(-6.489 -153.458)" fill="#1c3380" />
            </g>
          </svg>
        </a>
        <div class="text-content"><?= the_sub_field('sobre') ?></div>
      </div>
    </div>

  </div>
</div>

<?php endwhile ?>
<?php endif; ?>

<?php get_footer(); ?>
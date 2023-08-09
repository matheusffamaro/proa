<?php

/**
 * Template name: Relatórios
 */

 get_header();
 
 ?>

<script type='text/javascript' async src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<section class="hero-relatorios" style="background-image: url('<?php the_field('imagem_de_fundo'); ?>')">
</section>
<section class="relatorios-titulo " style="background-image: url('<?php the_field('imagem_de_fundo_dois'); ?>')">
  <div class="container">
    <h1>Relatórios</h1>
  </div>
</section>
<section class="form">
  <div class="container">
    <?php the_field('oembed_do_form'); ?>
  </div>
</section>
<section class="relatorios-bimestral" style="margin-top: -100px;">
  <div class="container">
    <h2><?php the_field('titulo_relatorio_anual'); ?></h2>

    <div class="desktop-hidden">
      <?php if ( have_rows('relatorios_anuais') ) : ?>
      <div class="swiper relatorioSlide2">
        <div class="swiper-wrapper">
          <?php while( have_rows('relatorios_anuais') ) : the_row(); ?>
          <a href="<?php the_sub_field('pdf_do_relatorio'); ?>" class="item-relatorio swiper-slide">
            <img src="<?php the_sub_field('imagem_do_relatorio'); ?>"
              alt="<?php the_sub_field('titulo_do_relatorio'); ?>"
              title="<?php the_sub_field('titulo_do_relatorio'); ?>">
            <h3><?php the_sub_field('titulo_do_relatorio'); ?></h3>
          </a>
          <?php endwhile; ?>
        </div>
        <div class="swiper-button-next dois"></div>
        <div class="swiper-button-prev dois"></div>
      </div>
      <?php endif; ?>
    </div>
    <div class="mobile-hidden">
      <?php if ( have_rows('relatorios_anuais') ) : 
                $total2 = count(get_field('relatorios_anuais'));
                $number2 = 6;	
                $count2 = 0; 
                ?>
      <div class="d-grid rel-sem relatorio">
        <?php while( have_rows('relatorios_anuais') ) : the_row(); ?>
        <a href="<?php the_sub_field('pdf_do_relatorio'); ?>" class="item-relatorio">
          <img src="<?php the_sub_field('imagem_do_relatorio'); ?>" alt="<?php the_sub_field('titulo_do_relatorio'); ?>"
            title="<?php the_sub_field('titulo_do_relatorio'); ?>">
          <h3><?php the_sub_field('titulo_do_relatorio'); ?></h3>
        </a>
        <?php $count2++;
                            if ($count2 == $number2) {
                                // we've shown the number, break out of loop
                                break;
                            } ?>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
      <a href="" class="btn btn-quiz" id="gallery-load-more2">Ver todos</a>
    </div>
  </div>
</section>
<section class="relatorios-bimestral">
  <div class="container">
    <h2><?php the_field('titulo_relatorio_bimestral'); ?></h2>

    <div class="desktop-hidden">
      <?php if ( have_rows('relatorios_bimestral') ) :?>
      <div class="swiper relatorioSlide">
        <div class="swiper-wrapper">
          <?php while( have_rows('relatorios_bimestral') ) : the_row(); ?>
          <a href="<?php the_sub_field('pdf_do_relatorio'); ?>" class="item-relatorio swiper-slide">
            <img src="<?php the_sub_field('imagem_do_relatorio'); ?>"
              alt="<?php the_sub_field('titulo_do_relatorio'); ?>"
              title="<?php the_sub_field('titulo_do_relatorio'); ?>">
            <h3><?php the_sub_field('titulo_do_relatorio'); ?></h3>
          </a>
          <?php $count++;
                            if ($count == $number) {
                                // we've shown the number, break out of loop
                                break;
                            } ?>
          <?php endwhile; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <?php endif; ?>
    </div>
    <div class="mobile-hidden">
      <?php if ( have_rows('relatorios_bimestral') ) :
                $total = count(get_field('relatorios_bimestral'));
                $number = 6;	
                $count = 0; 
                ?>
      <div class="d-grid rel-bim relatorio">
        <?php while( have_rows('relatorios_bimestral') ) : the_row(); ?>
        <a href="<?php the_sub_field('pdf_do_relatorio'); ?>" class="item-relatorio">
          <img src="<?php the_sub_field('imagem_do_relatorio'); ?>" alt="<?php the_sub_field('titulo_do_relatorio'); ?>"
            title="<?php the_sub_field('titulo_do_relatorio'); ?>">
          <h3><?php the_sub_field('titulo_do_relatorio'); ?></h3>
        </a>
        <?php $count++;
                            if ($count == $number) {
                                // we've shown the number, break out of loop
                                break;
                            } ?>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>

      <a href="" class="btn btn-quiz" id="gallery-load-more">Ver todos</a>
    </div>
  </div>
</section>
<?php

get_footer();

?>
<script>
jQuery(document).ready(function() {
  var my_repeater_field_post_id = <?php echo $post->ID; ?>;
  var my_repeater_field_offset = <?php echo $number; ?>;
  var my_repeater_field_offset2 = <?php echo $number2; ?>;
  var my_repeater_field_nonce = '<?php echo wp_create_nonce('my_repeater_field_nonce'); ?>';
  var my_repeater_field_nonce2 = '<?php echo wp_create_nonce('my_repeater_field_nonce2'); ?>';
  var my_repeater_ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
  var my_repeater_more = true;

  jQuery('#gallery-load-more').on('click', function(e) {
    e.preventDefault();
    jQuery(".relatorios-bimestral:eq(1) .d-grid.rel-bim").addClass('loading');
    jQuery.post(
      my_repeater_ajax_url, {
        // this is the AJAX action we set up in PHP
        'action': 'my_repeater_show_more',
        'post_id': my_repeater_field_post_id,
        'offset': my_repeater_field_offset,
        'nonce': my_repeater_field_nonce
      },
      function(json) {
        $(".relatorios-bimestral:eq(1) .d-grid.rel-bim").removeClass('loading');
        jQuery('.relatorios-bimestral:eq(1) .relatorio').append(json['content']);
        my_repeater_field_offset = json['offset'];
        jQuery('#gallery-load-more').css('display', 'none');
      },
      'json'
    );

  });

  jQuery('#gallery-load-more2').on('click', function(e) {
    e.preventDefault();
    jQuery(".relatorios-bimestral:eq(0) .d-grid.rel-sem").addClass('loading');
    jQuery.post(
      my_repeater_ajax_url, {
        'action': 'my_repeater_show_more2',
        'post_id': my_repeater_field_post_id,
        'offset': my_repeater_field_offset2,
        'nonce': my_repeater_field_nonce2
      },
      function(json) {
        jQuery(".relatorios-bimestral:eq(0) .d-grid.rel-sem").removeClass('loading');
        jQuery('.relatorios-bimestral:eq(0) .relatorio').append(json['content']);
        my_repeater_field_offset2 = json['offset'];
        jQuery('#gallery-load-more2').css('display', 'none');
      },
      'json'
    );

  });

});
</script>
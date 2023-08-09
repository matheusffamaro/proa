<?php 
/**
 * Template name: Plataforma proa
 */
get_header(); 


$args = [
  'numberposts'      => 3,
  'category'         => 0,
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => array(),
  'exclude'          => array(),
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'post',
  'suppress_filters' => true,
]; 

$args_slide = [
  'numberposts'      => 3,
];

$posts = get_posts($args); 
$posts_slide = get_posts($args_slide); 
        
// Categories
$categories_array = get_field('categorias_blog', 94);
$categories = [];
foreach($categories_array as $categorie) {

  $categorie_url = get_tag_link($categorie->term_id);

  $categorie_struture = "<a href='$categorie_url'>$categorie->name</a>";
  array_push($categories, $categorie_struture);
}

?>

<section class="hero-profissao">
  <a href="<?php the_field('link_do_banner');?>">
    <img class="mobile_hidden" src="<?php the_field('imagem_desktop') ?>" alt="">
    <img class="dekstop_hidden" src="<?php the_field('imagem_mobile') ?>" alt="">
  </a>
</section>
<section class="vaiaprender">
  <div class="container">
    <div class="grid">
      <div class="materiais">
        <?php if (pll_current_language() == 'pt'): ?>
        <h2>O que você vai aprender?</h2>
        <?php else:?>
        <h2>What will you learn?</h2>

        <?php endif;?>
        <?php if ( have_rows('o_que_voce_vai_aprender') ) : ?>
        <div class="items">
          <?php while( have_rows('o_que_voce_vai_aprender') ) : the_row(); ?>
          <div class="item-">
            <h3><?php the_sub_field('titulo'); ?></h3>
            <p><?php the_sub_field('descricao'); ?></p>
          </div>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
      </div>
      <div class="detalhes-quem">
        <?php if ( have_rows('lista_de_detalhes') ) : ?>
        <?php while( have_rows('lista_de_detalhes') ) : the_row(); ?>
        <div class="item-curso">
          <div class="content-curso">
            <div class="d-flex">
              <img src="<?php the_sub_field('icone'); ?>" alt="">
              <div class="detalhes-curso">
                <h4><?php the_sub_field('titulo_do_item'); ?></h4>
                <?php the_sub_field('detalhes_do_item');?>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <div class="bottom-curso">
          <p><?php the_field('titulo_de_apoio_cta'); ?></p>
          <?php 
            $link = get_field('link_do_cta');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
          <a class="button" href="<?php echo esc_url( $link_url ); ?>"
            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section class="avaliacoes">
  <div class="container">
    <h2><?php the_field('titulo_avaliacoes');?></h2>
    <?php if ( have_rows('lista_de_avaliacoes') ) : ?>
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <?php while( have_rows('lista_de_avaliacoes') ) : the_row(); ?>
        <div class="swiper-slide">
          <div class="d-flex">
            <div class="itemtexto">
              <div class="avaliacao">
                <?php the_sub_field('texto_da_avaliacao'); ?>
              </div>
              <div class="nome">
                <h3><?php the_sub_field('nome'); ?></h3>
                <h4><?php the_sub_field('posicao'); ?></h4>
              </div>
            </div>
            <div class="itemimg">
              <img src="<?php the_sub_field('foto_da_pessoa'); ?>" alt="">
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
<section class="namidia">
  <div class="container">
    <h2><?php the_field('titulomidia'); ?></h2>
    <?php if ( have_rows('materias') ) : ?>
    <div class="slidemidia">
      <?php while( have_rows('materias') ) : the_row(); ?>
      <a href="<?php the_sub_field('linkmidia'); ?>">
        <img src="<?php the_sub_field('imagemmidia'); ?>" alt="<?php the_sub_field('linkmidia'); ?>"
          title="<?php the_sub_field('linkmidia'); ?>">
      </a>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <div class="container arrows">
      <div class="prev"></div>
      <div class="next"></div>
    </div>
  </div>
</section>
<section class="post__others">
  <div class="container">
    <div class="post__others__wrapper">
      <h3 style="color: #1c3380"><?php the_field('titulo_blog');?> </h3>
    </div>

    <div class="post__wrapper">
      <?php
    $posts = get_field('posts_blog');
    if($posts) : ?>
      <?php foreach($posts as $post) : ?>
      <?php 
        
        $post_url = get_permalink($post->ID);
        $categoria = get_the_category($post->ID);
        $categoria = $categoria[0]->name;
        $tags_array = get_the_tags($post->ID);
        $descricao = get_field('post_resume', $post->ID);
        $imagemPost = get_field('imagem_em_destaque', $post->ID );

        if($imagemPost == NULL) {
          $imagemPost = "http://proa.monsi.com.br/wp-content/uploads/2021/07/Grupo-de-mascara-15.png";
        };
          
        $tags = [];
        
        // TAGS
        foreach($tags_array as $tag) {
         
          $tag_url = get_tag_link($tag->term_id);

          $tag_struture = "<a href='$tag_url'>$tag->name</a>";
          array_push($tags, $tag_struture);
        }
        ?>

      <div class="post__item">
        <a href="<?= $post_url; ?>" style="text-decoration: none">
          <img src="<?= $imagemPost; ?>" alt="Postagem Blog">

          <span><?= $categoria ?></span>
          <h2><?= $post->post_title ?></h2>

          <p><?= $descricao; ?></p>
        </a>

        <?php if($tags) : ?>
        <div class="post__tags">
          <p>Tags: <?= implode(", ", $tags) ?></p>
        </div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <?php if(!checkLang()) : ?>
    <a href="<?php echo esc_url(get_post_permalink(94)) ?>" class="btn-mini">Ver mais</a>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
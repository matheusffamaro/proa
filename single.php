<?php
get_header(); 

/**
 * 1. Title
 * 2. Short description // ACF
 * 3. Autor
 * 4. Imagem
 * 5. Post content
 * 6. Galeria // ACF
 * 7. Outras publicações
 */


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

?>


<section class="hero">
  <div class="container">
    <div class="post__intro">
      <p id="breadcrumbs">
        <span>
          <span>
            <a href="<?php echo get_post_permalink(94); ?>">
              < Fique por dentro</a>
          </span>
        </span>
      </p>
      <h1><?= $post->post_title;  ?></h1>
      <p><?= get_field('post_resume') ?></p>
      <strong>Texto: <span><?php the_field('autor') ?></span></strong><br>
      <strong>Ilustração: <span><?php the_field('ilustrador') ?></span></strong>
    </div>
  </div>
</section>

<section class="post__image" style="overflow-x: hidden;">
  <img src="<?= get_field('imagem_em_destaque'); ?>" alt="Capa">
</section>

<section class="post__content">
  <div class="container">
    <div class="post__content__wrapper">
      <?= $post->post_content; ?>
    </div>
  </div>
</section>

<?php 
$images = get_field('galeria');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>

<section class="post__gallery">
  <div class="container">
    <div class="post__gallery__wrapper">
      <div class="header_post_gallery">
        <h3>Galeria de fotos</h3>
        <div class="arrows">
          <div class="prev2"></div>
          <div class="next2"></div>
        </div>
      </div>
      <div class="slide-single">
        <div class="post__gallery__items postslide">
          <?php foreach( $images as $image_id ): ?>
          <div class="slide__item swiper-slide">
            <?php echo wp_get_attachment_image( $image_id, $size ); ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<section class="post__others">
  <div class="container">
    <div class="post__others__wrapper">
      <h3>Outras publicações</h3>
    </div>

    <div class="post__wrapper">
      <?php if($posts) : ?>
      <?php foreach($posts as $post) : ?>
      <?php 
        
        $post_url = get_permalink($post->ID);
        $categoria = get_the_category($post->ID);
        $categoria = $categoria[0]->name;
        $tags_array = get_the_tags($post->ID);
        $descricao = get_field('post_resume', $post->ID);
        $imagemPost = get_field('imagem_em_destaque', $post->ID ); 
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
          <img src="<?= $imagemPost; ?>" alt="Imagem">

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
  </div>
</section>


<?php

get_footer();
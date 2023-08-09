<?php 
/**
 * Template name: Blog
 * Template post type: posts
 */
get_header(); ?>

<?php 

$current_category = get_queried_object_id();

$args = [
  'numberposts'      => -1,
  'category'         => $current_category,
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
  'category'         => $current_category,
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

<section class="hero">
  <div class="slide__wrapper swiper-container slide-blog d-desk" style="margin: 0;">
    <div class="swiper-wrapper">
      <?php if($posts_slide) : ?>
      <?php foreach($posts_slide as $post) : ?>
      <?php 
        $post_url = get_permalink($post->ID);
        $categoria = get_the_category($post->ID);
        $categoria = $categoria[0]->name;
        $tags_array = get_the_tags($post->ID);
        $descricao = get_field('post_resume', $post->ID);
        $image = get_field('imagem_de_destaque', $post->ID);
          
        $tags = [];
        
        // TAGS 
          foreach($tags_array as $tag) {
          
            $tag_url = get_tag_link($tag->term_id);

            $tag_struture = "<a href='$tag_url'>$tag->name</a>";
            array_push($tags, $tag_struture);
          }
          ?>
      <div class="slide__item swiper-slide">
        <div class="content-internal">
          <span class="post__cat"><?= $categoria; ?></span>
          <a href="<?= $post_url ?>" style="text-decoration: none;">
            <h2 class="post__title"><?= $post->post_title; ?>
            </h2>
          </a>
          <p class="post__res"><?= $descricao ?></p>
          <a href="<?= $post_url ?>" class="post__view">Ver notícia</a>
          <div class="swiper-pagination"></div>
        </div>
        <img src="<?= $image ?>" alt="">
      </div>

      <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="categories">
  <div class="container">
    <ul>
      <li><a href="<?= get_post_permalink(94) ?>">Geral</a></li>
      <?php foreach($categories as $cat) : ?>
      <li><?= $cat; ?></li>
      <?php endforeach ?>
      <li><a href="<?= get_post_permalink(428) ?>">Webstories</a></li>
    </ul>
  </div>
</section>

<section class="news">
  <div class="container">
    <div class="title">
      <h1>Notícias</h1>
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


<?php get_footer(); ?>
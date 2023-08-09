<?php 
/**
 * Template name: Webstorie
 * Template post type: webstories 
 */
get_header(); ?>

<?php  

$args = [
  'numberposts'      => -1,
  'category'         => 0,
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => array(),
  'exclude'          => array(),
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'webstories',
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
      <li class="activeMenu"><a href="<?= get_post_permalink(428) ?>">Webstories</a></li>
    </ul>
  </div>
</section>

<section class="news" id="webstories">
  <div class="container">
    <div class="title">
      <h1>Webstories</h1>
    </div>

    <div class="post__wrapper mobile_hidden">
      <?php if($posts) : ?>
      <?php foreach($posts as $post) : ?>
      <div class="post__item" data-target="post-<?= $post->ID; ?>">
        <a href="<?= get_permalink(); ?>" style="text-decoration: none">
          <img src="<?= get_field('imagem_capa'); ?>" alt="Imagem">
        </a>
      </div>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
    <div class="slider-web post__wrapper dekstop_hidden">
        <?php if($posts) : ?>
        <?php foreach($posts as $post) : ?>
        <div class="post__item" data-target="post-<?= $post->ID; ?>">
            <a href="<?= get_permalink(); ?>" style="text-decoration: none">
            <img src="<?= get_field('imagem_capa'); ?>" alt="Imagem">
            </a>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>


<?php if($posts) : ?>
<?php foreach($posts as $post) : ?>

<div class="lightbox" id="post-<?= $post->ID ?>">
  <div class="content">
    <span id="close-nav">X</span>
    <div class="swiper webStorieSlide">
      <div class="swiper-wrapper">
        <?php 

    $images = get_field('galeria');
    
    foreach($images as $image) : ?>

        <div class="swiper-slide">
          <img src="<?= $image ?>" alt="Webstorie Proa">
        </div>

        <?php endforeach ?>

      </div>
      <div class="swiperTwo-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<?php endif; ?>

<?php get_footer(); ?>
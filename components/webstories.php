
<?php if (pll_current_language() == 'pt'): ?>
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


    $webstorieTitle = "Webstorie";
    $webstorieTitleColor = '#ff0099';

    is_front_page() ? $webstorieTitle = 'Veja os webstories' : $webstorieTitle = "Webstorie";

    is_front_page() ? $webstorieTitleColor = '#ff0099' : $webstorieTitleColor = '#1c3380';

    ?>
    <?php /*
    <section class="news" id="webstories">
    <div class="container">
        <div class="title">
        <h1 style="color:<?= $webstorieTitleColor ?>"><?= $webstorieTitle ?></h1>
        </div>

        <div class="post__wrapper">
        <?php if($posts) : ?>
        <?php foreach($posts as $post) : ?>
        <div class="post__item" data-target="post-<?= $post->ID; ?>">
            <a href="<?= $post_url; ?>" style="text-decoration: none">
            <img src="<?= get_field('imagem_capa'); ?>" alt="Imagem">
            </a>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
        </div>
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
    <?php endforeach;
            wp_reset_postdata(); ?>
    <?php endif; ?>

    */?>

    <?php $featured_posts = get_field('lista_de_webstories');?>

    <section class="news" id="webstories">
    <div class="container">
        <div class="title">
        <h1 style="color:<?= $webstorieTitleColor ?>"><?= $webstorieTitle ?></h1>
        </div>
        <div class="post__wrapper mobile_hidden">
            <?php if($featured_posts) : ?>
                <?php foreach($featured_posts as $webstoriesingle) : ?>
                    <div class="post__item" data-target="post-<?= $webstoriesingle->ID; ?>">
                        <a href="<?= get_permalink($webstoriesingle); ?>" style="text-decoration: none">
                            <img src="<?php the_field('imagem_capa', $webstoriesingle->ID); ?>" alt="Imagem">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="slider-web post__wrapper dekstop_hidden">
            <?php if($featured_posts) : ?>
                <?php foreach($featured_posts as $webstoriesingle) : ?>
                    <div class="post__item" data-target="post-<?= $webstoriesingle->ID; ?>">
                        <a href="<?= get_permalink($webstoriesingle); ?>" style="text-decoration: none">
                            <img src="<?php the_field('imagem_capa', $webstoriesingle->ID); ?>" alt="Imagem">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    </section>
    <?php else:?>
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


    $webstorieTitle = "Webstorie";
    $webstorieTitleColor = '#ff0099';

    is_front_page() ? $webstorieTitle = 'Watch the webstories' : $webstorieTitle = "Webstorie";

    is_front_page() ? $webstorieTitleColor = '#ff0099' : $webstorieTitleColor = '#1c3380';

    ?>
    <?php /*
    <section class="news" id="webstories">
    <div class="container">
        <div class="title">
        <h1 style="color:<?= $webstorieTitleColor ?>"><?= $webstorieTitle ?></h1>
        </div>

        <div class="post__wrapper">
        <?php if($posts) : ?>
        <?php foreach($posts as $post) : ?>
        <div class="post__item" data-target="post-<?= $post->ID; ?>">
            <a href="<?= $post_url; ?>" style="text-decoration: none">
            <img src="<?= get_field('imagem_capa'); ?>" alt="Imagem">
            </a>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
        </div>
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
    <?php endforeach;
            wp_reset_postdata(); ?>
    <?php endif; ?>

    */?>

    <?php $featured_posts = get_field('lista_de_webstories');?>

    <section class="news" id="webstories">
    <div class="container">
        <div class="title">
        <h1 style="color:<?= $webstorieTitleColor ?>"><?= $webstorieTitle ?></h1>
        </div>
        <div class="post__wrapper mobile_hidden">
            <?php if($featured_posts) : ?>
                <?php foreach($featured_posts as $webstoriesingle) : ?>
                    <div class="post__item" data-target="post-<?= $webstoriesingle->ID; ?>">
                        <a href="<?= get_permalink($webstoriesingle); ?>" style="text-decoration: none">
                            <img src="<?php the_field('imagem_capa', $webstoriesingle->ID); ?>" alt="Imagem">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="slider-web post__wrapper dekstop_hidden">
            <?php if($featured_posts) : ?>
                <?php foreach($featured_posts as $webstoriesingle) : ?>
                    <div class="post__item" data-target="post-<?= $webstoriesingle->ID; ?>">
                        <a href="<?= get_permalink($webstoriesingle); ?>" style="text-decoration: none">
                            <img src="<?php the_field('imagem_capa', $webstoriesingle->ID); ?>" alt="Imagem">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    </section>
<?php endif; ?>
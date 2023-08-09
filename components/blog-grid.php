
<?php if (get_locale() == 'pt_br'): ?>
    <section class="blog">
        <div class="container">
            <?php
                if(is_page(364)) {
                $textTitle = 'O que você precisa para se preparar para o mercado de trabalho?';
                $color = "#1c3380";
                } else {
                $textTitle = "BORA SE INTERAR?";
                }
            ?>
            <h2 style="color: <?= $color ?>"><?= $textTitle ?></h2>
            <div class="posts">
            <div class="d-grid">
                <?php
                $the_query = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => '4',
                ) );
                while ( $the_query->have_posts() ) :
                $the_query->the_post(); ?>
                <div class="post-item">
                <div class="grid">
                    <div class="post-image">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <img src="<?php the_field('imagem_de_destaque') ?>">
                    </a>
                    </div>
                    <div class="post-content">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title();?></h3>
                    </a>
                    <?php the_excerpt();?>
                    </div>
                </div>
                </div>
                <?php endwhile;
                wp_reset_postdata();   ?>
            </div>
            </div>
        </div>
    </section>
    <?php else:?>

<?php endif;?>
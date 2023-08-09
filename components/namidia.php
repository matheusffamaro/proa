
<?php if (pll_current_language() == 'pt'): ?>
    <section class="namidia">
            <div class="container">
                <h2><?php the_field('titulomidia', 'options'); ?></h2>
                <?php if ( have_rows('materias', 'options') ) : ?>
                <div class="slidemidia">
                <?php while( have_rows('materias', 'options') ) : the_row(); ?>
                <a href="<?php the_sub_field('linkmidia', 'options'); ?>">
                    <img src="<?php the_sub_field('imagemmidia', 'options'); ?>"
                    alt="<?php the_sub_field('linkmidia', 'options'); ?>" title="<?php the_sub_field('linkmidia', 'options'); ?>">
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
    <?php else:?>
        <section class="namidia">
        <div class="container">
            <h2><?php the_field('titulomidiaen', 'options'); ?></h2>
            <?php if ( have_rows('materiasen', 'options') ) : ?>
            <div class="slidemidia">
            <?php while( have_rows('materiasen', 'options') ) : the_row(); ?>
            <a href="<?php the_sub_field('linkmidia', 'options'); ?>">
                <img src="<?php the_sub_field('imagemmidia', 'options'); ?>"
                alt="<?php the_sub_field('linkmidia', 'options'); ?>" title="<?php the_sub_field('linkmidia', 'options'); ?>">
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
<?php endif;?>
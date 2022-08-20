<?php get_header() ?>

<h1><?php the_category() ?></h1>


<?php

if(have_posts()) {
    while(have_posts()) {
        the_post(); ?>

        <article>
            <a href="<?php the_permalink(); ?>">
                <strong><?php the_title(); ?></strong>
            </a>

            <a href="<?php the_permalink(); ?>"><?php the_category(); ?></a>
        </article>
        <?php
    }
} 
?>


<?php get_footer() ?>
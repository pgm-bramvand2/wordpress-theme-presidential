<?php get_header() ?>

<?php the_archive_title('<h1>', '</h1>') ?>




<?php 
    if(have_posts() ) {
        while(have_posts() ) {
            the_post();
            ?>
            <article class="admin">
                <a href="<?php the_permalink(); ?>">
                    <figure>
                        <?php the_post_thumbnail() ?>
                    </figure>
                    <h2 class="admin-title">
                        <?php the_excerpt(); ?> <?php the_title(); ?>
                    </h2>
                </a>
            </article>
            <?php
        }
    }
?>

<?php get_footer() ?>
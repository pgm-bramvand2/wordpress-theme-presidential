<article class="post">
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>

    <div class="post-info">
        <span><?php the_time( 'F d, Y' ); ?></span>

        <span><?php the_category(); ?></span>
    </div>
</article>
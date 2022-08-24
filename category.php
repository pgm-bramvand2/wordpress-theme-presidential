<?php get_header(); ?>

<section class="briefing-room content-with-aside">
    <div class="briefing-room-inner">
        <a    
            class="post-detail-link" 
            href="<?php echo apply_filters( 'the_permalink', get_the_permalink( get_option( 'page_for_posts' ) ) ); ?>"
        >
            <?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) );?>
        </a>

        <h1 class="title">
            <?php echo single_cat_title(); ?>
        </h1>

        <div class="posts">
            <?php if(have_posts()) : ?> 
                <?php while(have_posts()) : the_post(); ?>

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

        <?php wp_reset_postdata(); ?>

        <?php endwhile ?>
        <?php endif ?>
        </div>
    </div>

    <?php if (is_active_sidebar( 'categories_menu_widget' )) : ?>
        <?php dynamic_sidebar( 'categories_menu_widget' ); ?>
    <?php endif ?>
</section>


<?php get_footer(); ?>
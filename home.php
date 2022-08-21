<?php get_header(); ?>

<section class="briefing-room">
    <div class="briefing-room-inner">

            <h1 class="title">
                <?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) ); ?>
            </h1>
            
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = [
                'posts_per_page' => 10,
                'paged' => $paged
            ];
            
            $loop = new WP_Query($args);
            ?>

    <div class="posts">
        <?php if($loop -> have_posts()) : ?> 
            <?php while($loop -> have_posts()) : $loop -> the_post(); ?>

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

    <?php if (function_exists("pagination")) {
        pagination($loop->max_num_pages);
    } ?>

    </div>
</section>


<?php get_footer(); ?>
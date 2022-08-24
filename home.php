<?php get_header(); ?>

<section class="briefing-room content-with-aside">
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

                    <?php  get_template_part('components/post',     'post', [
                        "content" => get_the_content(),
                        "id" => get_the_ID(),
                    ]); ?>

            <?php wp_reset_postdata(); ?>

            <?php endwhile; ?>
            <?php endif; ?>
            </div>

    <?php if (function_exists("pagination")) {
        pagination($loop->max_num_pages);
    } ?>

    </div>

    <?php if (is_active_sidebar( 'categories_menu_widget' )) : ?>
        <?php dynamic_sidebar( 'categories_menu_widget' ); ?>
    <?php endif ?>
</section>


<?php get_footer(); ?>
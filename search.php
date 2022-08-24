<?php get_header(); ?>

<section class="briefing-room">
    <div class="briefing-room-inner">

    <h1 class="title">
    <?php the_field('page-title', 313) ?> 
    </h1>

    <strong>
        <?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
    </strong>

        <?php if ( have_posts() ) : ?>
            <div class="posts">
                <?php while( have_posts() ) : the_post(); ?>
                <?php  get_template_part('components/post','post', [
                    "content" => get_the_content(),
                    "id" => get_the_ID(),
                ]); ?>
            <?php endwhile; ?>
        </div>
        <?php  else :?>
            <div class='d-flex flex-column justify-content-center align-items-center py-5'>";            
                <strong class='fs-5 d-block mb-4'>
                    No results for your search query.
                </strong>";
                <?php get_search_form(); ?>
            </div>"
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
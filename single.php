<?php get_header(); ?>
<section class="centered-content post-detail">
    <div class="post-detail-header">
        <a 
            class="post-detail-link" 
            href="<?php echo apply_filters( 'the_permalink', get_the_permalink( get_option( 'page_for_posts' ) ) ); ?>"
        >
            <?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) );?>
        </a>
        
        <h1 class="title"><?php the_title(); ?></h1>
        
        <div class="post-info">
            <span><?php the_time( 'F d, Y' ); ?></span>
    
            <span><?php the_category(); ?></span>
        </div>    
    </div>
    
    <div class="post-detail-content"><?php the_content();?></div>
</section>

<?php get_footer(); ?>
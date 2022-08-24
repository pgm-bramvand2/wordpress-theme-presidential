<?php if (is_user_logged_in()) : ?>
    <?php get_header(); ?>
    
    <section class="centered-content">
        <?php the_content(); ?>
    </section>

    <?php get_footer(); ?>
    
<?php else : 
    wp_redirect(home_url());
    exit; 
endif ; ?>

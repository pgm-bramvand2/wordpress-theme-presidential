<?php get_header(); ?>

<section class="administration centered-content">
    <div class="administration-intro">
        <h1 class="title"><?php get_header(); ?>
            <?php the_field('page-title', 11) ?> 
        </h1>
        
        <p>
            <?php the_field('page-intro', 11) ?> 
        </p>
    </div>
    
    
    <div class="admin-cards">
    <?php if(have_posts() ) : ?>
        <?php while(have_posts() ) : the_post(); ?>
                <article class="admin-card">
                    <a href="<?php the_permalink(); ?>">
                        <figure>
                            <?php the_post_thumbnail() ?>
                        </figure>
                        
                        <h2 class="admin-card-title">
                            <?php the_excerpt(); ?>
                        </h2>
                    </a>
                </article>
        <?php endwhile; ?>
    <?php endif ; ?>
    </div>
</section>

<?php get_footer(); ?>
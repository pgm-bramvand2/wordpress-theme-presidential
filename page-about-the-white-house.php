<?php get_header(); ?>
<section class="about-page-header">
    <figure>
        <?php the_post_thumbnail() ?>
    </figure>

    <h1 class="title about-page-header-title">
        <?php the_title();?>
    </h1>
</section>

<section class="centered-content page">
    
    <article class="page-content">
            <?php the_content();?>

        
    </article>

    <div class="post-cards">
        <?php if(have_rows('subjects')) : ?>
            <?php while(have_rows('subjects')) : the_row(); ?>
            <article class="post-card">
                <a href="<?php the_sub_field('subject-link') ?>">
                    <figure>
                        <img src="<?php the_sub_field('subject-image') ?>" alt="">
                    </figure>

                    <h2>
                        <?php the_sub_field('subject-title') ?>
                    </h2>
                </a>
            </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</section>

<?php get_footer(); ?>
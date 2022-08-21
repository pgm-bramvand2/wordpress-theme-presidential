<?php get_header(); ?>
<section class="administration-banner">
    <figure>
        <?php the_post_thumbnail(); ?>
    </figure>

    <div class="administration-banner-title">
        <h1 class="title">
            <?php the_title(''); ?>
        </h1>
    </div>
</section>

<section class="centered-content post-detail">   
    <div class="post-detail-content"><?php the_content();?></div>
</section>

<?php get_footer(); ?>
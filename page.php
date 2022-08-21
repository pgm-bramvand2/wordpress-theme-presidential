<?php get_header(); ?>
<section class="centered-content page">
    <div class="page-header">
        <h1 class="title">
            <?php the_field('page-title');?>
        </h1>
    </div>
    
    <article class="page-content">
        <p class="page-intro">
            <?php the_field('page-intro');?>
        </p> 
        <?php the_content();?>
    </article>

</section>

<?php get_footer(); ?>
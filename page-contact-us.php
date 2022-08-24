<?php get_header(); ?>
<section class="centered-content">
    <div class="page-header">
        <h1 class="title">
            <?php the_title();?>
        </h1>
    </div>
    <div class="contact-form-container">
        <?php the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>

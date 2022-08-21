<?php get_header(); ?>
<section class="covid-plan-banner">
    <div class="covid-plan-banner-inner">
        <h1>
            <?php the_field('page-title') ?>
        </h1>
    </div>
</section>

<secion class="centered-content covid-plan">
    <p>
        <?php the_field('page-intro') ?>
    </p>
    
    <div class="covid-plan-nav">
        <?php if(have_rows('covid-plan-nav')) : ?>
            <?php while(have_rows('covid-plan-nav')) : the_row(); ?>
            <a href="#<?php the_sub_field('id') ?>" class="covid-plan-nav-link">
    
                <figure>
                    <img src="<?php the_sub_field('icon') ?>" alt="">
                </figure>
    
                <span>
                    <?php the_sub_field('title') ?>
                </span>
            </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</secion>

<section class="centered-content post-detail">
    <div class="post-detail-content">
            <?php if(have_rows('covid-plan-step')) : ?>
                <?php while(have_rows('covid-plan-step')) : the_row(); ?>
                <div id="<?php the_sub_field('id') ?>" class="covid-plan-step">

                    <figure>
                        <img src="<?php the_sub_field('icon') ?>" alt="">
                    </figure>

                    <h2>
                        <?php the_sub_field('title') ?>
                    </h2>
                    
                    <p>
                        <?php the_sub_field('text') ?>
                    </p>
                    
                    <h3>
                        <?php the_sub_field('subtitle') ?>
                    </h3>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
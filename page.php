<?php get_header();

$args = [
    'post_type' => 'post',
    'post_per_page' => 10
];

$loop = new WP_Query($args);

if($loop -> have_posts()) {
    while($loop -> have_posts()) {
        $loop -> the_post(); ?>

        <article>
            <a href="<?php the_permalink(); ?>">
                <strong><?php the_title(); ?></strong>
            </a>
            <a href="<?php the_permalink(); ?>"><?php the_category(); ?></a>
        </article>

        <?php
    }
}

get_footer();
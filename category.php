<?php get_header() ?>

<h1><?php the_category() ?></h1>

<?php 
    $test = get_posts();
    echo $test;
    $args = [
        'post_type' => 'post',
        // 'category_name' => get_the_category_by_ID(the_category())
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
?>


<?php get_footer() ?>
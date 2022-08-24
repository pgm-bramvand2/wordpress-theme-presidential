<?php

get_header();

get_template_part('components/hero', 'hero', [
    "content" => get_the_content(),
    "id" => get_the_ID(),
]); ?>

<section class="centered-content">
    <div class="recent-posts">
        <ul>
            <?php 
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 10
                ];
                
                $loop = new WP_Query($args);
            ?>

            <?php if($loop->have_posts()) : ?>
            <?php while($loop ->have_posts()) : $loop -> the_post() ; ?>
                    <li class="post">
                        <?php if($loop->current_post == 0) : the_post_thumbnail(); ?>
                        <?php endif; ?>

                        <strong>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </strong>
                        
                        <div class="post-info">
                            <span><?php the_time( 'F d, Y' ); ?></span>
                            
                            <span><?php the_category(); ?></span>
                        </div>   
                    </li>
                    
                    <?php wp_reset_postdata(); ?>            
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</section>

<?php 
get_template_part('components/feature', 'feature', [
    "content" => get_the_content(),
    "id" => get_the_ID(),
]);

get_footer();
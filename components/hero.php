<section class="hero-container">
    <img 
        class="hero-image"
        src="<?php the_field('hero-image');?>" 
        alt=""
    >

    
    <div class="hero-block">
        <span class="hero-tagline">
                <?php the_field('hero-tagline'); ?>    
            </span>

            <h2>
                <?php the_field('hero-title'); ?>       
            </h2>

            <ul class="line-link-list">
                <?php $hero = get_field('hero-links'); ?>
                <?php if( $hero) : ?>
                    <?php foreach($hero as $post) :?>
                        <?php setup_postdata($post);?>
                        
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>

                        <?php wp_reset_postdata(); ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
    </div>
</section>
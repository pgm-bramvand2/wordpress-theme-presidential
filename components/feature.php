<section>

    <?php if(have_rows('feature')) : ?>
    <?php while( have_rows('feature')): the_row(); ?>
    <div class="feature-container">
        <div class="feature">
            <div class="feature-image-container">
                <img src="<?php the_sub_field('feature-image'); ?>" />
            </div>
            
            <div class="feature-content-container">
                <small>
                    <?php the_sub_field('feature-subtitle'); ?>
                </small>
                
                <strong>
                    <?php the_sub_field('feature-title'); ?>
                </strong>

                <p>
                    <?php the_sub_field('feature-text'); ?>
                </p>
                
                <ul class="line-link-list line-link-list--serif">
                    <?php $feature = get_sub_field('feature-links') ?>
                    <?php if($feature) : ?>
                    <?php foreach($feature as $post) :?>
                        <?php setup_postdata( $post );?>
                        
                        <li>
                            <a href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>
                        
                        <?php wp_reset_postdata(); ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</section>
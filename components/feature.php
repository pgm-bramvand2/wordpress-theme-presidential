<section>

    <?php if(have_rows('feature')) : ?>
    <?php while( have_rows('feature')): the_row(); ?>
    <div class="wrapper">
        <div class="row">
            <div class="col col-lg-5 col-xs-12">
                <img src="<?php the_sub_field('feature-image') ?>" />
            </div>
            
            <div class="col col-lg-7 col-xs-12">
                <small>
                    <?php the_sub_field('feature-subtitle') ?>
                </small>
                
                <strong>
                    <?php the_sub_field('feature-title') ?>
                </strong>
                
                <ul>
                    <?php $feature = get_sub_field('feature-links') ?>
                    <?php if($feature) : ?>
                    <?php foreach($feature as $post) :?>
                        <?php setup_postdata( $post );?>
                        
                        <li>
                            <a href="<?php the_permalink() ?>">
                                <?php the_title() ?>
                            </a>
                        </li>
                        
                        <?php wp_reset_postdata() ?>
                    <?php endforeach ?>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</section>
    <footer class="mt-auto">
            <div class="container-mail">
                <?php if (is_active_sidebar( 'post_widgets' )) : ?>
                    <?php dynamic_sidebar( 'post_widgets' ); ?>
                <?php endif ?>        
            </div>

            <section class="footer__container row">
                <div class="d-flex justify-content-between">
                    <?php if (is_active_sidebar( 'footer_widgets' )) : ?>
                        <?php dynamic_sidebar( 'footer_widgets' ); ?>
                    <?php endif ?>

                    <div class="address">
                        <!-- <p>
                            <?php
                                echo get_option('site-full-name')
                            ?>
                        </p>
                        <p>
                            <?php
                                echo get_option('support_street')
                            ?>
                        </p>
                        <p>
                            <?php
                                echo get_option('support_city')
                            ?>
                        </p> -->

                        <?php echo get_field('site-full-name')?>
                        <span>The White House</span>

                        <span>1600 Pennsylvania Ave NW</span>

                        <span>Washington, DC 20500 </span>
                    </div>
                </div>
            </section>
        </footer>
        
        <?php wp_footer() ?>
    </body>
</html>
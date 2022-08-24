<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <?php wp_head(); ?>
</head>

<body>

<nav class="navbar navbar-expand-xl fixed-top">
  <div class="container-fluid px-5">
    <a class="navbar-brand" href="#">
        <span class="title text-uppercase h5 primary">
            the white house
        </span>
    </a>
                
    <div class="navbar-logo">
        <?php the_custom_logo(); ?>
    </div>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">      
      <ul class="navbar-nav">
      <?php
            if (has_nav_menu('primary_menu')) {
                wp_nav_menu([
                    'menu' => 'Primary menu',
                    'theme_location' => 'primary_menu',
                    'container' => 'false',
                    'li_class' => 'nav-item',
                    'link_class' => 'nav-link',
                    'items_wrap'    => '%3$s',
                ]);
            }
        ?>
        <?php if(is_user_logged_in()) : ?>
        <li class="nav-item">
          <a href="/area51" class="nav-link">
            Area 51
          </a>
        </li>
        <?php endif; ?>
      </ul>
      
      <?php if (is_user_logged_in()) : ?>                   
          <a class="d-block ms-2 btn btn-danger" href="<?php echo wp_logout_url(home_url()); ?>">
              <?php _e('Sign out', 'whitehouse'); ?>
          </a>
      <?php else : ?>
          <a href="<?php echo wp_registration_url(); ?>" class="d-block ms-2 btn btn-primary">
            <?php _e('Register', 'whitehouse'); ?>
          </a>
      <?php endif ?>
    </div>
  </div>
</nav>

<div class="searchbar">
  <?php get_template_part( 'components/autocomplete', 'autocomplete'); ?>
</div>


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
      </ul>
    </div>
  </div>
</nav>


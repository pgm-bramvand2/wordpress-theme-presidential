<?php

// deactivate new block editor
function phi_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}

add_action( 'after_setup_theme', 'phi_theme_support' );

function add_widgets() {
    register_sidebar( array(
        'name' => 'Post Widget Area',
        'id' => 'post_widgets',
        'before_widget' => '<div class="card shadow p-2 p-sm-4 mb-4 border-3 border-start-0 border-end-0 border-primary border-bottom-0">',
        'after_widget' => '</div>',
        'before_title' => '<strong class="d-block fs-4 fw-light mb-3">',
        'after_title' => '</strong>',
    ) );

    register_sidebar( array(
        'name' => 'Footer Widget Area',
        'id' => 'footer_widgets',
        'description' => 'Footer area containing links and general info',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>'
    ) );

    register_sidebar( array(
        'name' => 'Categories Menu Widget',
        'id' => 'categories_menu_widget',
        'description' => 'Widget containing the menu for all categories',
        'before_widget' => '<aside class="categories-menu">',
        'after_widget' => '</aside>'
    ) );
}

add_action( 'widgets_init', 'add_widgets' );
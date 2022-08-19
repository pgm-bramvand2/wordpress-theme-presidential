<?php

function register_custom_menus() {
    register_nav_menus([
        'primary_menu' => 'Main Menu',
        'social_menu' => 'Social Media Menu',
        'primary-footer-menu' => 'Primary Footer Menu',
        'secondary-footer-menu' => 'Secondary Footer Menu'
    ]);
};

add_action( 'init', 'register_custom_menus' );

function add_li_class($classes, $item, $args) {
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }

    return $classes;
}

function add_link_class($classes, $item, $args) {
    if (isset($args->link_class)) {
        $classes['class'] = $args->link_class;
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'add_li_class', 1, 3);
add_filter('nav_menu_link_attributes', 'add_link_class', 1, 3);
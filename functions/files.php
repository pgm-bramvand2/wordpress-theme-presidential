<?php

function load_styles_and_scripts() {
    wp_enqueue_style('main', 
    get_theme_file_uri('/dist/main.css'), [], '0.1');
};

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');
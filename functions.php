<?php

add_action('wp_enqueue_scripts', 'harbor_scripts');

function harbor_scripts(){
    wp_enqueue_style('harbor-style', get_stylesheet_uri());
    wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_script('harbor-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
}

?>
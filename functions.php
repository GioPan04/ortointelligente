<?php

function equeue_style() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'equeue_style', 100);

add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );
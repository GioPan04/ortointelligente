<?php

function equeue_style() {
    wp_enqueue_style('ortointelligente-style', get_stylesheet_uri());
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'equeue_style', 100);


function init_menu()
{
    register_nav_menu('ortointelligente-navbar', 'Barra di navigazione');
}
add_action('init', 'init_menu');

add_theme_support('admin-bar', array( 'callback' => '__return_false' ) );

add_theme_support('post-thumbnails');
<?php

include('inc/dataAddress.php');

function theme_sources() { 
    wp_deregister_script('jquery'); // Remove a registered script

    wp_enqueue_style('style', get_template_directory_uri().'/dist/css/style.css', array(), time());

    wp_enqueue_script('jquery-main', get_template_directory_uri().'/dist/vender/jquery-3.5.1.min.js', array(), '', 1);
    wp_enqueue_script('main-js', get_template_directory_uri().'/dist/js/main.js', array(), '', 1);
}
add_action('wp_enqueue_scripts', 'theme_sources');

function theme_features() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_features');

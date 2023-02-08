<?php

include('inc/dataAddress.php');
include('inc/themeSettings.php');

function theme_sources() { 
    wp_deregister_script('jquery'); // Remove a registered script

    wp_enqueue_style('style', get_template_directory_uri().'/dist/css/style.css', array(), time());

    wp_enqueue_script('jquery-main', get_template_directory_uri().'/dist/vender/jquery-3.5.1.min.js', array(), '', 1);
    
    if (is_singular('project')) {
        wp_enqueue_style('slick', get_template_directory_uri().'/dist/vender/slick/slick.css', array(), time());
        wp_enqueue_script('slick-js', get_template_directory_uri().'/dist/vender/slick/slick.min.js', array(), '', 1);
    }
    wp_enqueue_script('main-js', get_template_directory_uri().'/dist/js/main.js', array(), '', 1);
}
add_action('wp_enqueue_scripts', 'theme_sources');

function theme_features() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_features');

function cty_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => 'Primary Menu',
        'footer_menu'  => 'Footer Menu',
    ));
}
add_action('init', 'cty_register_nav_menu');

function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);

function clear_nav_menu_item_class($classes, $item, $args) {
    $classes = ['header__menu-item'];
    if ($args->theme_location === 'footer_menu') {
        $classes = ['footer__menu-item'];
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);

function cty_nav_menu_submenu_css_class($classes) {
    $classes = ['header__menu-sub'];
    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'cty_nav_menu_submenu_css_class');

function remove_wpcf7_p_tags($content) {
    $content = preg_replace( '/(<p>)*([\s\S]+?)(<\/p>)*/', '$2', $content );
    return $content;
}
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_form_elements', 'remove_wpcf7_p_tags');






add_action('wp_ajax_get_posts_by_local_storage', 'get_posts_by_local_storage');
add_action('wp_ajax_nopriv_get_posts_by_local_storage', 'get_posts_by_local_storage');

function get_posts_by_local_storage() {
    var_dump(111);die();
    $objectsInLocalStorage = json_decode($_POST['objects_in_local_storage']) ?: [];
    $postIds = wp_list_pluck($objectsInLocalStorage, 'id');

    $query = new WP_Query([
        'post_type' => 'post',
        'post__in' => $postIds,
        'posts_per_page' => -1,
    ]);

    $posts = [];
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // format the post data and add it to the $posts array
        }
        wp_reset_postdata();
    }

    wp_send_json_success($posts);
    wp_die();
}
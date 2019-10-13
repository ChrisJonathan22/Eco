<?php 


function load_stylesheets() {

    // The order matters and Bootstrap should be first and then the custom css.
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery() {
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', '', 1, true);

    add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');

function load_scripts() {
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', false, true);
    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'load_scripts');

// Add an option for menus
add_theme_support('menus');

// Register menu locations
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);

?>

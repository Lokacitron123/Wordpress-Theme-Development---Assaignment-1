<?php




function load_custom_styles () {
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . "/assets/css/bootstrap.css", array(), false, 'all');
    wp_enqueue_style('custom-fonts', get_stylesheet_directory_uri() . "/assets/css/font-awesome.css", array(), false, 'all');
    wp_enqueue_style('custom-stylesheet', get_stylesheet_directory_uri() . "/assets/css/style.css", array('bootstrap'), false, 'all');
}

add_action('wp_enqueue_scripts', 'load_custom_styles');


function load_custom_scripts() {

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . "/assets/javascript/jquery.js");
    wp_enqueue_script('jquery');

    wp_register_script('custom-script', get_template_directory_uri() . "/assets/javascript/script.js");
    wp_enqueue_script('custom-script', array('jquery'));



}

add_action('wp_enqueue_scripts', 'load_custom_scripts');


// Unlocking menu options
function custom_menus () {

    $locations = array(
        'primary' => "Header Main Menu",
        'side' => "Side Menu"
    );
    
    register_nav_menus($locations);
}

add_action('init', 'custom_menus');

// Unlocking image options
add_theme_support('post-thumbnails');
add_theme_support('custom-background', [
    'default-color' => '',
    'default-image' => '',
]);


?>
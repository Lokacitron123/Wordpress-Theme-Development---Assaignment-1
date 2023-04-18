<?php


// enquing style sheets

function load_custom_styles () {
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . "/assets/css/bootstrap.css", array(), false, 'all');
    wp_enqueue_style('custom-fonts', get_stylesheet_directory_uri() . "/assets/css/font-awesome.css", array(), false, 'all');
    wp_enqueue_style('custom-stylesheet', get_stylesheet_directory_uri() . "/assets/css/style.css", array('bootstrap'), false, 'all');
}

add_action('wp_enqueue_scripts', 'load_custom_styles');

// enquing script files
function load_custom_scripts() {

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/javascript/jquery.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/javascript/script.js', '', false, true);

}

add_action('wp_enqueue_scripts', 'load_custom_scripts');

// adding custom menus
 
 function custom_menus () {

     $locations = array(
         'primary' => "Header Main Menu",
         'side' => "Side Menu",
         'Pages' => "Pages Menu",
         'Archive' => "Archive Menu",
         'Categories' => "Category Menu"
        
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


// Unlocking widget options
add_theme_support('widgets');


// registering widget areas
function widgetareas () {
    
    // sidebar widgets
    register_sidebar(
        array(
            'name' => 'pages area',
            'id' => 'pages-area',
            'description' => 'pages area widget',
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => '',

        ),
            
    );

    register_sidebar(
        array(
            'name' => 'archive area',
            'id' => 'archive-area',
            'description' => 'archive widget area',
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => '',

        ),
            
    );

    register_sidebar(
        array(
            'name' => 'category area',
            'id' => 'category-area',
            'description' => 'category widget area',
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => '',

        ),
            
    );

    
    // footer widgets

    register_sidebar(
        array(
            'name' => 'footer area 1',
            'id' => 'footer-area-1',
            'description' => 'footer widget area',
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => '',

        ),
            
    );
    register_sidebar(
        array(
            'name' => 'footer area 2',
            'id' => 'footer-area-2',
            'description' => 'footer widget area',
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => '',
        ),
            
    );
    register_sidebar(
        array(
            'name' => 'footer area 3',
            'id' => 'footer-area-3',
            'description' => 'footer widget area',
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => '',
        ),
            
    );
    register_sidebar(
        array(
            'name' => 'footer area copy',
            'id' => 'footer-area-copy',
            'description' => 'footer widget area',
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => '',
        ),
            
    );

}

add_action('init', 'widgetareas');



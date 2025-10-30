<?php

function zenfolio_scripts()
{
    // Get theme version for cache busting
    $theme_version = wp_get_theme()->get('Version');

    // Enqueue local styles with versioning
    wp_enqueue_style('zenfolio-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('zenfolio-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css');
    wp_enqueue_style('zenfolio-main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('zenfolio-responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('zenfolio-animate', get_template_directory_uri() . '/css/animate.min.css');

    // Enqueue FontAwesome from CDN
    wp_enqueue_style('zenfolio-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), null);

    // Enqueue jQuery (Load from Google CDN)
    // true at in end of file false else
    wp_register_script('jquery2', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true);
}
// Enqueue local JavaScript files
wp_enqueue_script('zenfolio-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery2'), true);
wp_enqueue_script('zenfolio-fancybox-js', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery2'), true);
wp_enqueue_script('zenfolio-waypoints-js', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery2'), true);
wp_enqueue_script('zenfolio-retina-js', get_template_directory_uri() . '/js/retina.min.js', array('jquery2'), true);
wp_enqueue_script('zenfolio-modernizr-js', get_template_directory_uri() . '/js/modernizr.js', array(), false); // Load Modernizr in head
wp_enqueue_script('zenfolio-main-js', get_template_directory_uri() . '/js/main.js', array('jquery2'), true);


// Hook the function to wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'zenfolio_scripts');


// register widget area
add_action('widgets_init', 'zenfolio_sidebars');



// enable logo support
function mytheme_custom_logo_setup()
{
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mytheme_custom_logo_setup');

// logo support end

function zenfolio_sidebars()
{
    register_sidebar(array(
        'name' => 'Banner',
        'id' => 'banner',
        'description' => 'Place your widget here',
        // widget wrapper css
        'before_widget' => '<div class = "widget_wrapper">',
        'after_widget' => '</div>'
    ));

    // About Me  widget
    register_sidebar(array(
        'name' => 'About Me',
        'id' => 'about-me',
        'description' => 'Place your widget here',
        // widget wrapper css
        'before_widget' => '<div class = "widget_wrapper" >',
        'after_widget' => '</div>'
    ));

    // Hire Me  widget
    register_sidebar(array(
        'name' => 'Hire Me',
        'id' => 'hire-me',
        'description' => 'Place your widget here',
        // widget wrapper css
        'before_widget' => '<div class = "widget_wrapper" >',
        'after_widget' => '</div>'
    ));
    // Contact  widget
    register_sidebar(array(
        'name' => 'Contact',
        'id' => 'contact',
        'description' => 'Place your widget here',
        // widget wrapper css
        'before_widget' => '<div class = "widget_wrapper" >',
        'after_widget' => '</div>'
    ));
}

register_nav_menus(
    array(
        'main_menu' => 'Main Menu',
        'social_media' => 'Social Menu'
    )
);

add_theme_support( 'post-thumbnails' );
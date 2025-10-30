<?php
function zenfolio_scripts() {
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style('zenfolio-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), $theme_version);
    wp_enqueue_style('zenfolio-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), $theme_version);
    wp_enqueue_style('zenfolio-main', get_template_directory_uri() . '/css/main.css', array(), $theme_version);
    wp_enqueue_style('zenfolio-responsive', get_template_directory_uri() . '/css/responsive.css', array(), $theme_version);
    wp_enqueue_style('zenfolio-animate', get_template_directory_uri() . '/css/animate.min.css', array(), $theme_version);
    wp_enqueue_style('zenfolio-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), null);

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true);
    wp_enqueue_script('jquery');

    wp_enqueue_script('zenfolio-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('zenfolio-fancybox-js', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('zenfolio-waypoints-js', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('zenfolio-retina-js', get_template_directory_uri() . '/js/retina.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('zenfolio-modernizr-js', get_template_directory_uri() . '/js/modernizr.js', array(), $theme_version, false);
    wp_enqueue_script('zenfolio-main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'zenfolio_scripts');

function mytheme_custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mytheme_custom_logo_setup');

function zenfolio_sidebars() {
    $sidebars = array(
        'banner' => 'Banner',
        'about-me' => 'About Me',
        'hire-me' => 'Hire Me',
        'contact' => 'Contact'
    );

    foreach ($sidebars as $id => $name) {
        register_sidebar(array(
            'name' => $name,
            'id' => $id,
            'description' => 'Place your widget here',
            'before_widget' => '<div class="widget_wrapper">',
            'after_widget' => '</div>'
        ));
    }
}
add_action('widgets_init', 'zenfolio_sidebars');


function zenfolio_sidebars(){
    register_sidebar( 
        array(
            
        )
    );
}

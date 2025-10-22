<?php

function zenfolio_scripts()
{
    // add style
    wp_enqueue_style('zenfolio-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('zenfolio-fancy-box', get_template_directory_uri() . '/css/jquery.fancybox.css');
    wp_enqueue_style('zenfolio-main-css', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('zenfolio-responsive-css', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('zenfolio-animate-css', get_template_directory_uri() . '/css/animate.min.css');
    // add cdn link directly
    wp_enqueue_style('zenfolio-bootstrapcdn-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
}

// call above function using add_action hook
add_action('wp_enqueue_scripts','zenfolio_scripts');
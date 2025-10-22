<?php

function zenfolio_scripts()
{
    // Enqueue local styles
    wp_enqueue_style('zenfolio-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('zenfolio-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css');
    wp_enqueue_style('zenfolio-main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('zenfolio-responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('zenfolio-animate', get_template_directory_uri() . '/css/animate.min.css');

    // Enqueue FontAwesome from CDN
    wp_enqueue_style('zenfolio-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), null);
    die("all executed");
}

// Hook the function to wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'zenfolio_scripts');

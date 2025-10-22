<?php

function zenfolio_scripts()
{
    // add style
    wp_enqueue_style('zenfolio-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('zenfolio-bootstrap-css', get_template_directory_uri() . '/css/jquery.fancybox.css');
    wp_enqueue_style('zenfolio-bootstrap-css', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('zenfolio-bootstrap-css', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('zenfolio-bootstrap-css', get_template_directory_uri() . '/css/animate.min.css');
    // add cdn link directly
    wp_enqueue_style('zenfolio-bootstrap-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
}



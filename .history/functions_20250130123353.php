<?php

function zenfolio_scripts()
{
    // Get theme version for cache busting
    $theme_version = wp_get_theme()->get('Version');

    // Enqueue local styles with versioning
    wp_enqueue_style('zenfolio-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), $theme_version);
    wp_enqueue_style('zenfolio-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), $theme_version);
    wp_enqueue_style('zenfolio-main', get_template_directory_uri() . '/css/main.css', array(), $theme_version);
    wp_enqueue_style('zenfolio-responsive', get_template_directory_uri() . '/css/responsive.css', array(), $theme_version);
    wp_enqueue_style('zenfolio-animate', get_template_directory_uri() . '/css/animate.min.css', array(), $theme_version);

    // Enqueue FontAwesome from CDN
    wp_enqueue_style('zenfolio-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), null);


wp_register_script('jquery2','https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',array(),'', '1.11.3',true);
}

// Hook the function to wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'zenfolio_scripts');




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/jquery.waypoints.min.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script>
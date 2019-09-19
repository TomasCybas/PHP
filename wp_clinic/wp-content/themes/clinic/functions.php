<?php


add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('clinic-icon', get_template_directory_uri()."/images/favicon.png");
    wp_enqueue_style('clinic-fontawesome', get_template_directory_uri()."/font-awesome/css/font-awesome.min.css");
    wp_enqueue_style('clinic-bootstrap', get_template_directory_uri()."/css/bootstrap.min.css");
    wp_enqueue_style('clinic-material', get_template_directory_uri()."/css/material.min.css");
    wp_enqueue_style('clinic-material-selectfield', get_template_directory_uri()."/css/mdl-selectfield.min.css");
    wp_enqueue_style('clinic-owl-carousel', get_template_directory_uri()."/css/owl.carousel.min.css");
    wp_enqueue_style('clinic-animate', get_template_directory_uri()."/css/animate.min.css");
    wp_enqueue_style('clinic-magnific-popup', get_template_directory_uri()."/css/magnific-popup.css");
    wp_enqueue_style('clinic-flex-slider', get_template_directory_uri()."/css/flexslider.css");
    wp_enqueue_style('clinic-style', get_template_directory_uri()."/css/style.css");
} );

add_action('wp_footer', function(){
    wp_enqueue_script('clinic-jquery', get_template_directory_uri()."/js/jquery-2.1.4.min.js");
    wp_enqueue_script('clinic-popper-js', get_template_directory_uri()."/js/popper.min.js");
    wp_enqueue_script('clinic-bootstrap-js', get_template_directory_uri()."/js/bootstrap.min.js");
    wp_enqueue_script('clinic-material-js', get_template_directory_uri()."/js/material.min.js");
    wp_enqueue_script('clinic-material-selecfield-js', get_template_directory_uri()."/js/mdl-selectfield.min.js");
    wp_enqueue_script('clinic-flexslider-js', get_template_directory_uri()."/js/jquery.flexslider.min.js");
    wp_enqueue_script('clinic-owl-carousel-js', get_template_directory_uri()."/js/owl.carousel.min.js");
    wp_enqueue_script('clinic-scrolltofixed-js', get_template_directory_uri()."/js/jquery-scrolltofixed.min.js");
    wp_enqueue_script('clinic-magnific-popup', get_template_directory_uri()."/js/jquery.magnific-popup.min.js");
    wp_enqueue_script('clinic-waypoint-js', get_template_directory_uri()."/js/jquery.waypoints.min.js");
    wp_enqueue_script('clinic-counterup-js', get_template_directory_uri()."/js/jquery.counterup.js");
    wp_enqueue_script('clinic-smoothscroll-js', get_template_directory_uri()."/js/smoothscroll.min.js");
    wp_enqueue_script('clinic-custom-js', get_template_directory_uri()."/js/custom.js");
});




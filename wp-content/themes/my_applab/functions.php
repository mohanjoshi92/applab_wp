<?php

// add css and scss
function load_stylesheets(){

   wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/cdn/bootstrap.min.css', array(), 1, 'all');

   wp_enqueue_style( 'bootstrap');

   wp_register_style('style', get_template_directory_uri() . '/assets/css/scss/style.css', array(), 1, 'all');

   wp_enqueue_style( 'style');

   wp_register_style('fontawesome', get_template_directory_uri() . '/assets/css/cdn/fontawesome.min.css', array(), 1, 'all');

   wp_enqueue_style( 'fontawesome');

   wp_register_style('owlcarousel', get_template_directory_uri() . '/assets/css/cdn/owl.carousel.min.css', array(), 1, 'all');

   wp_enqueue_style( 'owlcarousel');

   wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), 1, 'all');

   wp_enqueue_style( 'custom');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


// Add Js files
function load_js()
{
   wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), 1, 1, 1);
   wp_enqueue_script( 'jquery');

   wp_register_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), 1, 1, 1);
   wp_enqueue_script( 'plugins');

   wp_register_script('jqueryeasing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array(), 1, 1, 1);
   wp_enqueue_script( 'jqueryeasing');
   wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), 1, 1, 1);
   wp_enqueue_script( 'mainjs');
}
add_action('wp_enqueue_scripts', 'load_js');

// Add main custom <menu></menu>
function wpb_custom_new_menu() {
   register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
 }
 add_action( 'init', 'wpb_custom_new_menu' );
<?php
/**
 * Theme Functions.
 * 
 * @package bgcatemplate
 * 
 */

 if (! defined( ' ') )
require_once ''
 function bgcatemplate_enqueue_scripts() {


    wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory(). '/style.css'), 'all' );
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/src/libraries/css/bootstrap.min.css', [], false, 'all' );
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js' , [], filemtime( get_template_directory(). '/assets/main.js'), true );
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/src/libraries/js/bootstrap.bundle.min.js', [ 'jquery' ], false, true );

    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
 }

 add_action('wp_enqueue_scripts', 'bgcatemplate_enqueue_scripts')
?>


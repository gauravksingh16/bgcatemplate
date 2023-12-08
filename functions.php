<?php
/**
 * Theme Functions.
 * 
 * @package bgcatemplate
 * 
 */

 function bgcatemplate_enqueue_scripts() {
    wp_enqueue_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory(). '/style.css'), 'all' );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/main.js' , [], filemtime( get_template_directory(). '/assets/main.js'), true );
 }

 add_action('wp_enqueue_scripts', 'bgcatemplate_enqueue_scripts')
?>


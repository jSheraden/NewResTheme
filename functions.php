<?php

function theme_resources() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css' );
    wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.min.js' );
    wp_register_script( 'bootstrap', get_stylesheet_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js' );
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery', 'bootstrap' ) );
}

add_action( 'wp_enqueue_scripts', 'theme_resources' );

?>

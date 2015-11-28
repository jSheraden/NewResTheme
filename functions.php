<?php

function theme_scripts() {
    wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.min.js' );
    wp_register_script( 'bootstrap', get_stylesheet_directory_uri() . '/bower_component/bootstrap/dist/js/bootstrap.min.js' );
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery', 'bootstrap' ) );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

?>

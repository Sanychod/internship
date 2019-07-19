<?php
add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );
function my_plugin_add_stylesheet() {
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/style.css', false, '1.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/myStyle.css', false, '1.0', 'all' );
}
?>
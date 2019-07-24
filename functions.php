<?php
add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );
function my_plugin_add_stylesheet() {
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css', false, '1.0', 'all' );    
    wp_enqueue_style( 'fancybox-style','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css' ); 
    
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
    wp_enqueue_script( 'jquery' );   
    wp_enqueue_script( 'fancybox-script', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array(), '3.5.7', true );     
    /* wp_enqueue_script( 'get-browser', get_template_directory_uri() .'/dist/js/browserDetect.js', true ); */
    wp_enqueue_script( 'my-slick', get_template_directory_uri() .'/dist/js/slick.min.js',  array(), '1.0', true );
    wp_enqueue_script( 'my-scroll', get_template_directory_uri() .'/dist/js/smooth-scroll.min.js',  array(), '1.0', true );
    wp_enqueue_script( 'my-script', get_template_directory_uri() .'/dist/js/script.js', array(), '1.0', true );
}



?>
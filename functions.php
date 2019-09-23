<?php
add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );
function my_plugin_add_stylesheet() {
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css', false, '1.0', 'all' );    
    wp_enqueue_style( 'fancybox-style','//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css' ); 
    
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
    wp_enqueue_script( 'jquery' );   
    wp_enqueue_script( 'fancybox-script', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array(), '3.5.7', true );     
    /* wp_enqueue_script( 'get-browser', get_template_directory_uri() .'/dist/js/browserDetect.js', true ); */
    wp_enqueue_script( 'my-slick', get_template_directory_uri() .'/dist/js/slick.min.js',  array(), '1.0', true );
    wp_enqueue_script( 'my-scroll', get_template_directory_uri() .'/dist/js/smooth-scroll.min.js',  array(), '1.0', true );
    wp_enqueue_script( 'my-script', get_template_directory_uri() .'/dist/js/script.js', array(), '1.0', true );
}




function my_login_logo() { ?>
    <style type="text/css">
    .login form, .login #login_error, .login .message, .login .success {
    border-radius: 15px;
    }
    body.login div#login h1 a {
    background-image: url(<?php echo get_bloginfo('template_directory'); ?>/dist/i/logo.png);
    background-size: auto;
    width: auto;}
    body {
    background: url(<?php echo get_bloginfo('template_directory'); ?>/dist/i/mainbg.jpg) no-repeat !important;
    background-size:cover !important;
    }
    .login #backtoblog a, .login #nav a {
    padding: 2px;
    border-radius: 5px;
    background-color: snow;
    }</style>
    <?php }
    add_action( 'login_enqueue_scripts', 'my_login_logo' );

function examtheme_widgets_init() {

register_sidebar(
    array(
        'name'          => __( 'Footer', 'twentynineteen' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    )
);

}
add_action( 'widgets_init', 'examtheme_widgets_init' );

?>
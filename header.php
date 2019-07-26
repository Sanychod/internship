<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title>V-Travel - Travel agency</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <style>
    #s{
      background: white;
      border: 1px solid black
    }
    </style>
    <?php wp_head(); ?>
</head>
  <body>
 

  <header id="home" class="header-top" style="background:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),#fff url('<?php echo get_template_directory_uri() . '/dist/i/mainbg.jpg'?>') no-repeat; background-size: cover;" >
    <div class="container">
        <div class="header header-top-area">
          <div class="logo">
                <a  class="logo__title" href="<?php echo esc_url( home_url() ); ?>">
                <?php bloginfo('name'); ?>
                </a>
          </div>
            <?php wp_nav_menu(  [
	            'theme_location'  => '',
	            'menu'            => '', 
	            'container'       => 'nav', 
	            'container_class' => 'menu', 
	            'container_id'    => '',
	            'menu_class'      => 'has-submenu', 
	            'menu_id'         => '',

            ] ); ?>
            <a href="#" class="menu-button">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </a>
           
        <div class="dark-overlay"></div>
  
       <div class="mobile-menu">
             <a href="#" class="menu-button in-mobile active">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </a>
            <?php wp_nav_menu(  [
                'theme_location'  => '',
                'menu'            => 'Menu-2', 
                'container'       => 'nav', 
                'container_class' => 'mobile-navigation', 
                'container_id'    => '',
                'menu_class'      => 'has-submenu', 
                'menu_id'         => '',

            ] ); ?>
           
        </div>
    </div>
    
       
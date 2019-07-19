<!DOCTYPE html>
<html>
  <head>
    <title>V-Travel - Travel agency</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <?php wp_head(); ?>
</head>
  <body>
  <header id="home" class="header-top">
    <div class="container">
        <div class="header header-top-area">
          <div class="logo">
                <a href="index.html">
                    <img class="img-fluid logo__img" src="dist/i/logo.png" alt="V-travel">
                </a>
          </div>
          <nav class="menu">
                <ul>
                    <li class="has-submenu">
                            <a href="#home">Home</a>
                    </li>
                    <li class="has-submenu">
                            <a href="#place">Places</a>
                                <ul>
                                    <li><a href="#">Item1</a></li>
                                    <li><a href="#">Item2</a></li>
                                    <li><a href="#">Item3</a></li>
                                </ul>
                    </li>
                    <li class="has-submenu">
                            <a href="#About">About</a>
                                <ul>
                                    <li><a href="#">Item1</a></li>
                                    <li><a href="#">Item2</a></li>
                                    <li><a href="#">Item3</a></li>
                                </ul>
                    </li>
                    <li class="has-submenu">
                            <a href="#gallery">Gallery</a>
                                <ul>
                                    <li><a href="#">Item1</a></li>
                                    <li><a href="#">Item2</a></li>
                                    <li><a href="#">Item3</a></li>
                                </ul>
                    </li>
                    <li class="has-submenu">
                            <a href="#testimonial">Clients</a>
                                <ul>
                                    <li><a href="#">Item1</a></li>
                                    <li><a href="#">Item2</a></li>
                                    <li><a href="#">Item3</a></li>
                                </ul>
                    </li>            
                    <li class="has-submenu">
                            <a href="#team">Team</a>
                                <ul>
                                    <li><a href="#">Item1</a></li>
                                    <li><a href="#">Item2</a></li>
                                    <li><a href="#">Item3</a></li>
                                </ul>
                    </li>
                    <li class="has-submenu">
                            <a href="#contact">Contact Us</a>
                    </li>
                </ul>
          </nav>
    
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
    
            <nav class="mobile-navigation">
                <ul>
                    <li class="has-submenu">
                        <a href="#">Home</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Places</a>
                            <ul>
                                <li><a href="#">Item1</a></li>
                                <li><a href="#">Item2</a></li>
                                <li><a href="#">Item3</a></li>
                            </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">About</a>
                            <ul>
                                <li><a href="#">Item1</a></li>
                                <li><a href="#">Item2</a></li>
                                <li><a href="#">Item3</a></li>
                            </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Gallery</a>
                            <ul>
                                <li><a href="#">Item1</a></li>
                                <li><a href="#">Item2</a></li>
                                <li><a href="#">Item3</a></li>
                            </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Clients</a>
                            <ul>
                                <li><a href="#">Item1</a></li>
                                <li><a href="#">Item2</a></li>
                                <li><a href="#">Item3</a></li>
                            </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Team</a>
                            <ul>
                                <li><a href="#">Item1</a></li>
                                <li><a href="#">Item2</a></li>
                                <li><a href="#">Item3</a></li>
                            </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
        <div class="header-content">
            <h2 class="header-content__title">Enjoy vacation with <span class="header-content__title header-content__title_spaned">v-travel</span></h2>
            <p class="header-content__text">Travel to the any corner of the world, without going around in circles.</p>
            <div class="header-content__order">
                <a class="btn btn-order" href="#myModal" role="button" data-toggle="modal">Book a tour</a>
            </div>
      </div>
    </div>
</header> 
 <!-- ====================================container_top ================================ -->
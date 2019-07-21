<!DOCTYPE html>
<html>
  <head>
    <title>V-Travel - Travel agency</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> -->
     <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" /> --> 
    <?php wp_head(); ?>
</head>
  <body>
  <header id="home" class="header-top" style="background:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),#fff url('<?php echo get_template_directory_uri() . '/dist/i/mainbg.jpg'?>') no-repeat; background-size: cover;" >
    <div class="container">
        <div class="header header-top-area">
          <div class="logo">
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <img class="img-fluid logo__img" src="<?php echo get_template_directory_uri() . '/dist/i/logo.png'; ?>" alt="V-travel">
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
 <section id="About" class="main">
        <div class="container">
           <h1 class="main__title ">who we are?</h1>
                             
            <div class="about">      
                    <div class="about__img">
                        <img class="img-fluid " src="<?php echo get_template_directory_uri(). '/dist/i/about.png'?> " >
                    </div>
                              
                    <div class="about-text">
                        <h3 class="about-text__title">We are Travel experts</h3>
                        <p class="about-text__promo">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                        <a class="btn btn-prime" href="#service" >Learn more</a>
                    </div>
                            
            </div>
        </div>
    </section>
 
<section id="place" class="tour-places">
    <div class="container">
        <div class="tour-places__title">
            <h2>popular tour places</h2>
        </div>
            <div class="arrows"></div>
        <div class="tour-list">
            <div class="single-place">
                <img class="img-fluid single-place__img " src="<?php echo get_template_directory_uri() . '/dist/i/place1.jpg'; ?>" >
                    <div class="single-place__content">
                        <h2 class="single-place__title">cox's bazar sea beach</h2>
                        <h3 class="single-place__city">chitagong, bangladesh</h3>
                        <h4 class="single-place__price">$2200<span class="single-place__discount">$3200</span></h4>
                    </div>
            </div>
               
            <div class="single-place">
                <img class="img-fluid single-place__img" src="<?php echo get_template_directory_uri() . '/dist/i/place2.jpg'; ?>" >
                    <div class="single-place__content">
                        <h2 class="single-place__title">Nice building</h2>
                        <h3 class="single-place__city">dhaka, bangladesh</h3>
                        <h4 class="single-place__price">$2344<span class="single-place__discount">$3200</span></h4>
                    </div>
            </div>
                
            <div class="single-place">
                <img class="img-fluid single-place__img" src="<?php echo get_template_directory_uri() . '/dist/i/place3.jpg'; ?>" >
                    <div class="single-place__content">
                        <h2 class="single-place__title">sundorban bromon</h2>
                        <h3 class="single-place__city">london, england</h3>
                        <h4 class="single-place__price">$1290<span class="single-place__discount">$3200</span></h4>
                    </div>
            </div>
               
            <div class="single-place">
                <img class="img-fluid single-place__img" src="<?php echo get_template_directory_uri() . '/dist/i/place4.jpg'; ?>" >
                    <div class="single-place__content">
                        <h2 class="single-place__title">norjahan hall</h2>
                        <h3 class="single-place__city">kashmir, india</h3>
                        <h4 class="single-place__price">$2000 <span class="single-place__discount">$3200</span></h4>
                    </div>
            </div>
               
            <div class="single-place">
                <img class="img-fluid single-place__img" src="<?php echo get_template_directory_uri() . '/dist/i/place1.jpg'; ?>" >
                    <div class="single-place__content">
                        <h2 class="single-place__title">cox's bazar sea beach</h2>
                        <h3 class="single-place__city">chitagong, bangladesh</h3>
                        <h4 class="single-place__price">$2200<span class="single-place__discount">$3200</span></h4>
                    </div>
            </div>
              
        </div>
    </div>
</section>
    <!-- / ======================== END  TOUR PLACE=================================-->
    
<section id="service" class="services">
    <div class="container">
        <div class="services__item">
            <div class="single-service">
                <div class="single-service__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="single-service__svg-icon" viewBox='0 0 512 512'>
                        <path  d="M452 0H60C27 0 0 27 0 60v352c0 33 27 60 60 60h178v-40H60c-11 0-20-9-20-20V160h432v72h40V60c0-33-27-60-60-60zM40 120V60c0-11 9-20 20-20h392c11 0 20 9 20 20v60zm70-40a20 20 0 1 1-40 0 20 20 0 0 1 40 0zm70 0a20 20 0 1 1-40 0 20 20 0 0 1 40 0zm212 172a120.1 120.1 0 1 0 120 120c0-66.2-53.8-120-120-120zm77.5 100h-22a238 238 0 0 0-6.7-43.3 80.2 80.2 0 0 1 28.7 43.3zm-93 40h31c-2.5 31-10.3 50.7-15.5 58-5.2-7.3-13-27-15.5-58zm0-40c2.5-31 10.3-50.7 15.5-58 5.2 7.3 13 27 15.5 58zm-33.3-43.3a241 241 0 0 0-6.8 43.3h-21.9a80.2 80.2 0 0 1 28.7-43.3zM314.5 392h22a238 238 0 0 0 6.7 43.3 80.2 80.2 0 0 1-28.7-43.3zm126.3 43.3a241 241 0 0 0 6.8-43.3h21.9a80.2 80.2 0 0 1-28.7 43.3zm0 0"></path>
                    </svg>
                </div>
                    <h4 class="single-service__title">Personalized matching</h4>
                    <p  class="single-service__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
               
               
            <div class="single-service">
                <div class="single-service__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="single-service__svg-icon" viewBox='0 0 512 512'>
                        <path d="M512 148H188V0h324zm-284-40h244V40H228zm284 404H188V364h324zm-284-40h244v-68H228zm284-142H188V182h324zm-284-40h244v-68H228zm-80-142H0V0h148zM40 108h68V40H40zm108 404H0V364h148zM40 472h68v-68H40zm108-142H0V182h148zM40 290h68v-68H40zm0 0"></path>
                    </svg>
                </div>
                    <h4 class="single-service__title">wide variety of destinations</h4>
                    <p class="single-service__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
                
            <div class="single-service">
                <div class="single-service__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="single-service__svg-icon" viewBox='0 0 512 512'>
                        <path d="M452 40h-24V0h-40v40h-62V0h-40v40h-60V0h-40v40h-62V0H84v40H60C27 40 0 67 0 100v352c0 33 27 60 60 60h392c33 0 60-27 60-60V100c0-33-27-60-60-60zm20 412c0 11-9 20-20 20H60c-11 0-20-9-20-20v-43h392v-40H40v-61h392v-40H40v-58h392v-40H40v-70c0-11 9-20 20-20h24v40h40V80h62v40h40V80h60v40h40V80h62v40h40V80h24c11 0 20 9 20 20zm0 0"></path>
                    </svg>
                </div>
                    <h4 class="single-service__title">highly qualified service</h4>
                    <p class="single-service__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    
            </div>
                
            <div class="single-service">
                <div class="single-service__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="single-service__svg-icon" viewBox='0 0 512 512'>
                        <path d="M512 144H368V0h144zm-104-40h64V40h-64zm104 408H368V368h144zm-104-40h64v-64h-64zm104-144H368V184h144zm-104-40h64v-64h-64zM144 144H0V0h144zM40 104h64V40H40zm104 408H0V368h144zM40 472h64v-64H40zm104-144H0V184h144zM40 288h64v-64H40zm288-144H184V0h144zm-104-40h64V40h-64zm104 408H184V368h144zm-104-40h64v-64h-64zm104-144H184V184h144zm-104-40h64v-64h-64zm0 0"></path>
                    </svg>
                </div>
                    <h4 class="single-service__title">Handpicked Hotels</h4>
                    <p class="single-service__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
                
            <div class="single-service">
                <div class="single-service__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="single-service__svg-icon" viewBox='0 0 512 512'>
                        <path d="M427 127.6V0H85v127.6L0 191v261c0 33 27 60 60 60h392c33 0 60-27 60-60V191zm29.8 72.1L427 222v-44.4zM387 40v211.6l-131 97.5-131-97.5V40zM85 221.9l-29.8-22.2L85 177.5zM452 472H60c-11 0-20-9-20-20V238.3l216 160.6 216-160.6V452c0 11-9 20-20 20zM276 173h-40v-40h40zm72 0h-40v-40h40zm-145 0h-40v-40h40zm0 0"></path>
                    </svg>
                </div>
                    <h4 class="single-service__title">Best Price Guarantee</h4>
                    <p class="single-service__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
                
            <div class="single-service">
                <div class="single-service__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="single-service__svg-icon" viewBox='0 0 512 512'>
                        <path d="M452 0H60C27 0 0 27 0 60v392c0 33 27 60 60 60h392c33 0 60-27 60-60V60c0-33-27-60-60-60zm20 452c0 11-9 20-20 20H60c-11 0-20-9-20-20V60c0-11 9-20 20-20h392c11 0 20 9 20 20zM280 351h40v81H80V236c0-22 18-40 40-40h32v40h-32v35h32v40h-32v81h160zM392 80H232c-22 0-40 18-40 40v191h240V120c0-22-18-40-40-40zm0 40v35H232v-35zM232 271v-76h160v76zm0 0"></path>
                    </svg>
                </div>
                    <h4 class="single-service__title">24/7 support</h4>
                    <p class="single-service__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
               
        </div>
    </div>
</section>
<!-- ===========SERVICE ===================================================================================-->
   
<section id="gallery" class="gallery">
    <div class="container-fluid">
        <h2 class="gallery__title">tour gallery</h2>
            <div class="content">
                <figure class="content-item">
                    <a href="<?php echo get_template_directory_uri() . '/dist/i/Work1.jpg'; ?>" class="content-item__link" data-fancybox="images" data-caption="Tour gallery">
                        <img class="img-fluid content-item__img" src="<?php echo get_template_directory_uri() . '/dist/i/Work1.jpg'; ?>">
                    </a>
                            <figcaption class="caption">
                                <h3 class="caption__text"> Istanbul, Turkey</h3>
                            </figcaption>
                </figure>
                <figure class="content-item">
                    <a href="<?php echo get_template_directory_uri() . '/dist/i/Work2.jpg'; ?>" class="content-item__link" data-fancybox="images" data-caption="Tour gallery">
                        <img class="img-fluid content-item__img" src="<?php echo get_template_directory_uri() . '/dist/i/Work2.jpg'; ?>">
                    </a>
                            <figcaption class="caption">
                                <h3 class="caption__text">Longs Peak, the USA</h3>
                            </figcaption>   
                </figure>
                <figure class="content-item">
                    <a href="<?php echo get_template_directory_uri() . '/dist/i/Work3.jpg'; ?>" class="content-item__link" data-fancybox="images" data-caption="Tour gallery">
                        <img class="img-fluid content-item__img" src="<?php echo get_template_directory_uri() . '/dist/i/Work3.jpg'; ?>">
                    </a>
                            <figcaption class="caption">
                                <h3 class="caption__text">London, Great Britain</h3>
                            </figcaption>
                </figure>
                <figure class="content-item">
                    <a href="<?php echo get_template_directory_uri() . '/dist/i/Work4.jpg'; ?>" class="content-item__link" data-fancybox="images" data-caption="Tour gallery">
                        <img class="img-fluid content-item__img" src="<?php echo get_template_directory_uri() . '/dist/i/Work4.jpg'; ?>">
                    </a>
                            <figcaption class="caption">
                                <h3 class="caption__text">Swiss Alps, Switzerland</h3>
                            </figcaption>
                </figure>
                <figure class="content-item">
                    <a href="<?php echo get_template_directory_uri() . '/dist/i/Work1.jpg'; ?>" class="content-item__link" data-fancybox="images" data-caption="Tour gallery">
                        <img class="img-fluid content-item__img" src="<?php echo get_template_directory_uri() . '/dist/i/Work1.jpg'; ?>">
                    </a>
                            <figcaption class="caption">
                                <h3 class="caption__text">Istanbul, Turkey</h3>
                            </figcaption>
                </figure>
                <figure class="content-item">
                    <a href="<?php echo get_template_directory_uri() . '/dist/i/Work2.jpg'; ?>" class="content-item__link" data-fancybox="images"  data-caption="Tour gallery">
                        <img class="img-fluid content-item__img" src="<?php echo get_template_directory_uri() . '/dist/i/Work2.jpg'; ?>">
                    </a>
                            <figcaption class="caption">
                                <h3 class="caption__text">Longs Peak, the USA</h3>
                            </figcaption> 
                </figure>
             
            </div>
    </div>
</section>
<!-- ===========GALLERY ===================================================================================-->

<section id="testimonial" class="testimonial" >
    <div class="container">
        <h2 class="testimonial__title">Happy Clients</h2>
            <div class="testimonial-list">
                   
                <div class="list-item">
                    <div class="list-item__content">
                        <p class="list-item__text">Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                    </div>
                    <div class="list-item__people">
                        <h2 class="list-item__name">Jhonathon doe</h2>
                        <h3 class="list-item__prof">Businees men</h3>
                    </div>
                </div>
                  
                <div class="list-item">
                    <div class="list-item__content">
                        <p class="list-item__text">Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                    </div>
                    <div class="list-item__people">
                        <h2 class="list-item__name">katrina kaif</h2>
                        <h3 class="list-item__prof">actress</h3>
                    </div>
                </div>
                   
                <div class="list-item">
                    <div class="list-item__content">
                        <p class="list-item__text">Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                    </div>
                    <div class="list-item__people">
                        <h2 class="list-item__name">Jhonathon doe</h2>
                        <h3 class="list-item__prof">Businees men</h3>
                    </div>
                </div>
                   
                <div class="list-item">
                    <div class="list-item__content">
                        <p class="list-item__text">Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                    </div>
                    <div class="list-item__people">
                        <h2 class="list-item__name">katrina kaif</h2>
                        <h3 class="list-item__prof">actress</h3>
                    </div>
                </div>
                   
            </div>
                <div class="mydotts"></div>
    </div>
</section>
<!-- ===========TESTIMONIAL ===================================================================================-->
<section id="team" class="team">
    <div class="container">
        <h2 class="team__title">professional Team</h2>
            <div class="team-squad">
                <div class="team-single">
                    <div>
                        <img src="<?php echo get_template_directory_uri() . '/dist/i/team1.jpg'; ?>" class="img-fluid team-single__img">
                    </div>
                    <div class="team-single__content">
                        <h4 class="team-single__name">jonathon doe</h4>
                        <h5 class="team-single__prof">Taxi driver & traveler</h5>
                        <p class="team-single__text">I’d like to send you a sincere "thank you" for all of your assistance during my recent trip to Colorado.</p>
                    </div>
                </div>
                         
                <div class="team-single">
                    <div >
                        <img src="<?php echo get_template_directory_uri() . '/dist/i/team2.jpg'; ?>" class="img-fluid team-single__img">
                    </div>
                    <div class="team-single__content">
                        <h4 class="team-single__name">Jessica jui</h4>
                        <h5 class="team-single__prof">Taxi driver & traveler</h5>
                        <p class="team-single__text">I’d like to send you a sincere "thank you" for all of your assistance during my recent trip to Colorado.</p>
                    </div>
                </div>
          
                <div class="team-single ">
                    <div >
                        <img src="<?php echo get_template_directory_uri() . '/dist/i/team3.jpg'; ?>" class="img-fluid team-single__img">
                    </div>
                    <div class="team-single__content">
                        <h4 class="team-single__name">Monalisa lui</h4>
                        <h5 class="team-single__prof">Taxi driver & traveler</h5>
                        <p class="team-single__text">I’d like to send you a sincere "thank you" for all of your assistance during my recent trip to Colorado.</p>
                    </div>
                </div>
                    
        </div>
    </div>
</section>
<!-- ===========TEAM ===================================================================================-->
<section id="download" class="call" >
    <div class="container">
        <div class="call-content">
            <h2 class="call-content__title">are you still intarested to tour?</h2>
            <p class="call-content__text">We offer a wide range of procedures to help you get the perfect smile</p>
            <div class="call-content__ord">
                <a class="btn" href="#myModal" role="button" data-toggle="modal">book a tour!</a>
            </div>
        </div>
          
    </div>    
</section>
<!-- ===========CALL ===================================================================================-->

<section id="contact" class="contact" >
    <div class="container">
        <h2 class="contact__title">Questions?</h2>
        <div class="box">
            <div class="box-item" >
                <div class="box-item__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="box-item__img" viewBox="0 0 100 100" >
                        <path  d="M 37.199219 54.398438 L 47.398438 54.398438 L 47.398438 64.601562 L 37.199219 64.601562 Z M 51.898438 64.601562 L 62.101562 64.601562 L 62.101562 54.398438 L 51.898438 54.398438 Z M 37.199219 79.898438 L 47.398438 79.898438 L 47.398438 69.699219 L 37.199219 69.699219 Z M 51.898438 79.898438 L 62.101562 79.898438 L 62.101562 69.699219 L 51.898438 69.699219 Z M 100 50 C 100 77.601562 77.601562 100 50 100 C 22.398438 100 0 77.601562 0 50 C 0 22.398438 22.398438 0 50 0 C 77.601562 0 100 22.398438 100 50 Z M 9.5 50 C 9.5 51.199219 9.601562 52.300781 9.699219 53.398438 L 49.699219 26.300781 L 90.398438 53.800781 C 90.5 52.5 90.601562 51.199219 90.601562 49.898438 C 90.5 27.699219 72.398438 9.5 50 9.5 C 27.699219 9.5 9.5 27.699219 9.5 50 Z M 88.101562 63.800781 L 49.699219 37.800781 L 11.800781 63.398438 C 17.398438 79.199219 32.398438 90.5 50 90.5 C 67.5 90.5 82.398438 79.398438 88.101562 63.800781 Z M 88.101562 63.800781 "/>
                    </svg>
                </div>
                    <h2 class="box-item__up">our office:</h2>
                    <a href="#" class="box-item__down">Jurain, Dhaka Bangladesh</a>
            </div>
            
            <div class="box-item" >
                <div class="box-item__icon">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="box-item__img" viewBox="0 0 100 100"> 
                        <path d="M 50 6.300781 C 74.101562 6.300781 93.800781 25.898438 93.800781 50.101562 C 93.800781 74.300781 74.101562 93.800781 50 93.800781 C 25.898438 93.800781 6.300781 74.101562 6.300781 50 C 6.300781 25.898438 25.898438 6.300781 50 6.300781 M 50 0 C 22.398438 0 0 22.398438 0 50 C 0 77.601562 22.398438 100 50 100 C 77.601562 100 100 77.601562 100 50 C 100 22.398438 77.601562 0 50 0 Z M 77.898438 66.699219 L 77.601562 65.800781 C 76.898438 63.800781 74.800781 61.800781 72.800781 61.199219 L 65.398438 59.199219 C 63.398438 58.699219 60.5 59.398438 59.101562 60.898438 L 56.398438 63.601562 C 46.699219 61 39.101562 53.300781 36.398438 43.601562 L 39.101562 40.898438 C 40.601562 39.398438 41.300781 36.601562 40.800781 34.601562 L 38.800781 27.199219 C 38.300781 25.199219 36.199219 23 34.199219 22.398438 L 33.398438 22.101562 C 31.398438 21.398438 28.601562 22.101562 27.101562 23.601562 L 23.101562 27.601562 C 22.398438 28.300781 21.898438 30.300781 21.898438 30.300781 C 21.800781 43 26.699219 55.199219 35.699219 64.199219 C 44.699219 73.199219 56.898438 78.101562 69.5 78 C 69.601562 78 71.699219 77.601562 72.398438 76.800781 L 76.398438 72.800781 C 77.898438 71.5 78.5 68.699219 77.898438 66.699219 Z M 77.898438 66.699219 "/>  <!-- <embed> -->
                    </svg>
                </div>
                    <h2 class="box-item__up">contact number:</h2>
                    <a href="#" class="box-item__down">+1234321321</a>  
            </div>
            
            <div class="box-item">
                <div class="box-item__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="box-item__img" viewBox="0 0 100 100">
                        <path  d="M 50 0 C 22.398438 0 0 22.398438 0 50 C 0 77.601562 22.398438 100 50 100 C 77.601562 100 100 77.601562 100 50 C 100 22.398438 77.601562 0 50 0 Z M 50 92.199219 C 26.699219 92.199219 7.800781 73.300781 7.800781 50 C 7.800781 26.699219 26.699219 7.800781 50 7.800781 C 73.300781 7.800781 92.199219 26.699219 92.199219 50 C 92.199219 73.300781 73.300781 92.199219 50 92.199219 Z M 50 92.199219 "/>
                        <path  d="M 50 34.398438 L 25 34.398438 L 25 65.699219 L 75 65.699219 L 75 34.398438 Z M 50 37.5 L 67.5 37.5 L 50 50 L 32.5 37.5 Z M 28.101562 38.398438 L 38.699219 45.601562 L 28.101562 57.199219 Z M 50 62.5 L 32 62.5 L 40.898438 47 L 50 53.199219 L 59.101562 47 L 68 62.5 Z M 71.898438 57.199219 L 61.199219 45.601562 L 71.800781 38.398438 Z M 71.898438 57.199219 "/>
                    </svg>
                </div>
                    <h2 class="box-item__up">Email us:</h2>
                    <a href="#" class="box-item__down">name@mail.com</a>
            </div>
        </div>
        <div id="myModal" class="form" tabindex="-1" >
            <h2 class="form__title">Book a Tour</h2>
                <div class="contact-form">
                    <form id="myForm" class="myForm" autocomplete="off" action="index.html"> 
                        <div class="form-group">
                            <label class="form-group__label" for="name">Login</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name"  data-validate="1" autocomplete="off">
                            <div class="error error_name"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-group__label"  for="email">Mail</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email"   data-validate="1" autocomplete="off">
                            <div class="error error_email"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-group__label">Person</label>
                            <select class="form-select" name="person" >
                                    <option value="-1" selected>How Many Person?</option>
                                    <option value="1">1 person</option>
                                    <option value="2">2 person</option>
                                    <option value="3">3 person</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-group__label" >Days</label>
                            <select class="form-select" name="days">
                                    <option  value="-1" selected>How Many Days?</option>
                                    <option value="1">2 days</option>
                                    <option value="2">3 days</option>
                                    <option value="3">4 days</option>
                            </select>
                        </div>
                        <div class="form-group form-group_txt">
                            <label class="form-group__label"  for="message">Message</label>
                            <textarea id="message" class="form-control" placeholder="Your Message" rows="4"  ></textarea>
                        </div>
                                    
                        <div class="form-group btn-submit">
                            <input type="submit" class="btn btn-sub" name="submit" value="Book Now">
                        </div> 
                    </form>
                    <div class="preorder">Thank you. We will contact you soon.</div>
                </div>
        </div>
                   
    </div>             
</section>
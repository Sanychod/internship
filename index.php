<?php get_header(); ?>
<div class="header-content">
            <h2 class="header-content__title"><?php the_field('header_title'); ?></h2>
            <p class="header-content__text"><?php the_field('header-subtitle'); ?></p>
            <div class="header-content__order">
            <?php 

            $link = get_field('header_button');

            if( $link ): 
                $link_url = $link['#myModal'];
                $link_title = $link['Book a tour'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn btn-order" role="button" href="<?php echo esc_url("#myModal"); ?>" target="<?php echo esc_attr('#myModal'); ?>"><?php echo esc_html('Book A Tour'); ?></a>
            <?php endif; ?>
               
            </div>
      </div>
    </div>
</header> 
 <!-- ====================================container_top ================================ -->
 <section id="About" class="main">
        <div class="container">
           <h1 class="main__title "><?php the_field('main_title'); ?></h1>
                             
            <div class="about">      
                    <div class="about__img">
                    <?php 
                    $image = get_field('main_image');
                        if( !empty($image) ): ?>

	                        <img class="img-fluid " src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
            </div>           
            
                    <div class="about-text">
                        <h3 class="about-text__title"><?php the_field('main_subtitle'); ?></h3>
                        <p class="about-text__promo"><?php the_field('main_area'); ?></p>
                        <?php 
                        $link = get_field('main_button');
                            if( $link ): 
	                            $link_url = $link['#service '];
	                            $link_title = $link['Learn More'];
	                            $link_target = $link['target'] ? $link['target'] : '_self';
	                                ?>
	                            <a class="btn btn-prime" role="button" href="<?php echo esc_url("#service"); ?>" target="<?php echo esc_attr('#service'); ?>"><?php echo esc_html('Learn more'); ?></a>
                            <?php endif; 
                        ?>

                </div>
                            
            </div>
        </div>
    </section>
 
<section id="place" class="tour-places">
    <div class="container">
        <div class="tour-places__title">
            <h2><?php the_field('places_title'); ?></h2>
        </div>
            <div class="arrows"></div>
        <div class="tour-list">
        <?php if( have_rows('places_slider') ): ?>
        <?php while( have_rows('places_slider') ): the_row(); ?>
           <?php
            $slideimage = get_sub_field('image');
            $slidetitle = get_sub_field('slider_title');
            $slidelocation = get_sub_field('slider_location');
            $slideprice = get_sub_field('slider_price');
            $slidediscount = get_sub_field('slider_discount');
            ?>
            <div class="single-place">
            <img class="img-fluid single-place__img " src="<?php echo $slideimage['url']; ?>" >
                    <div class="single-place__content">
                        <h2 class="single-place__title"><?php echo $slidetitle; ?></h2>
                        <h3 class="single-place__city"><?php echo $slidelocation; ?></h3>
                        <h4 class="single-place__price"><?php echo $slideprice; ?><span class="single-place__discount"><?php echo $slidediscount; ?></span></h4>
                    </div>
              
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
            
        </div>
    </div>
</section>
    <!-- / ======================== END  TOUR PLACE=================================-->
    
<section id="service" class="services">
    <div class="container">
        <div class="services__item">
        <?php if( have_rows('service_item') ): ?>
        <?php while( have_rows('service_item') ): the_row(); ?>
           <?php
            $serviceimage = get_sub_field('services_image');
            $serviceslogan = get_sub_field('services_slogan');
            $servicetext = get_sub_field('serices_text');
            
            ?>
            <div class="single-service">
                <div class="single-service__icon">
                    <img class="single-service__svg-icon"  src="<?php echo $serviceimage['url']; ?>'; ?>" >
                </div>
                    <h4 class="single-service__title"><?php echo $serviceslogan; ?></h4>
                    <p  class="single-service__text"><?php echo $servicetext; ?></p>
              
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

        </div>
    </div>
</section>
<!-- ===========SERVICE ===================================================================================-->
   
<section id="gallery" class="gallery">
    <div class="container-fluid">
        <h2 class="gallery__title"><?php the_field('gallery_title'); ?></h2>
            <div class="content">
            <?php 

$images = get_field('gallery_photo');

if( $images ): ?>
  
        <?php foreach( $images as $image ): ?>
           <figure class="content-item">
                <a href="<?php echo $image['url']; ?>" class="content-item__link" data-fancybox="images" data-caption="Tour gallery">
                     <img  class="img-fluid content-item__img"  src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <figcaption class="caption">
                <h3 class="caption__text"><?php echo $image['caption']; ?></h3>
                </figcaption> 
                </figure>         
        <?php endforeach; ?>
    
<?php endif; ?>

                <!-- <figure class="content-item">
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
                </figure> -->
             
            </div>
    </div>
</section>
<!-- ===========GALLERY ===================================================================================-->

<section id="testimonial" class="testimonial" >
    <div class="container">
        <h2 class="testimonial__title"><?php the_field('testimonials_title'); ?></h2>
            <div class="testimonial-list">
               
            <?php if( have_rows('testimonials_slider') ): ?>
        <?php while( have_rows('testimonials_slider') ): the_row(); ?>
           <?php
            $sliderarea = get_sub_field('slider_area');
            $slidename = get_sub_field('slider_name');
            $slideprof = get_sub_field('slider_prof');
          
            ?>
            <div class="list-item">
            <div class="list-item__content">
            <p class="list-item__text"><?php echo $sliderarea; ?></p>
            </div>
                <div class="list-item__people"> 
                    <h2 class="list-item__name"><?php echo $slidename; ?></h2>
                    <h3 class="list-item__prof"><?php echo  $slideprof; ?></h3>
                </div>
              
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
            
            </div>
                <div class="mydotts"></div>
    </div>
</section>
<!-- ===========TESTIMONIAL ===================================================================================-->
<section id="team" class="team">
    <div class="container">
        <h2 class="team__title"><?php the_field('team_title'); ?></h2>
            <div class="team-squad">

                    <?php if( have_rows('team_squad') ): ?>
                        <?php while( have_rows('team_squad') ): the_row(); ?>
                        <?php
                        $squadimg = get_sub_field('squad_img');
                        $squadname = get_sub_field('squad_name');
                        $squadprof = get_sub_field('squad_prof');
                        $squadtext = get_sub_field('squad_text');
                
                    ?>
                    <div class="team-single">
                        <div>
                            <img  class="img-fluid team-single__img" src="<?php echo $squadimg['url']; ?>'; ?>" >
                        </div>
                            <div class="team-single__content"> 
                                <h4 class="team-single__name"><?php echo  $squadname; ?></h4>
                                <h5 class="team-single__prof"><?php echo  $squadprof; ?></h5>
                                <p class="team-single__text"><?php echo   $squadtext; ?></p>
                            </div>
                    
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                
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
        <h2 class="contact__title"><?php the_field('contacts_title'); ?></h2>
        <div class="box">
            <div class="box-item" >
                <div class="box-item__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="box-item__img" viewBox="0 0 100 100" >
                        <path  d="M 37.199219 54.398438 L 47.398438 54.398438 L 47.398438 64.601562 L 37.199219 64.601562 Z M 51.898438 64.601562 L 62.101562 64.601562 L 62.101562 54.398438 L 51.898438 54.398438 Z M 37.199219 79.898438 L 47.398438 79.898438 L 47.398438 69.699219 L 37.199219 69.699219 Z M 51.898438 79.898438 L 62.101562 79.898438 L 62.101562 69.699219 L 51.898438 69.699219 Z M 100 50 C 100 77.601562 77.601562 100 50 100 C 22.398438 100 0 77.601562 0 50 C 0 22.398438 22.398438 0 50 0 C 77.601562 0 100 22.398438 100 50 Z M 9.5 50 C 9.5 51.199219 9.601562 52.300781 9.699219 53.398438 L 49.699219 26.300781 L 90.398438 53.800781 C 90.5 52.5 90.601562 51.199219 90.601562 49.898438 C 90.5 27.699219 72.398438 9.5 50 9.5 C 27.699219 9.5 9.5 27.699219 9.5 50 Z M 88.101562 63.800781 L 49.699219 37.800781 L 11.800781 63.398438 C 17.398438 79.199219 32.398438 90.5 50 90.5 C 67.5 90.5 82.398438 79.398438 88.101562 63.800781 Z M 88.101562 63.800781 "/>
                    </svg>
                </div>
                    <h2 class="box-item__up">our office:</h2>
                    <?php 
                        $officelink = get_field('office_link');
                        if( $officelink ): ?>
                            <a class="box-item__down" href="<?php echo $officelink; ?>">Jurain, Dhaka Bangladesh</a>
                        <?php endif; ?>
                   
            </div>
            
            <div class="box-item" >
                <div class="box-item__icon">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="box-item__img" viewBox="0 0 100 100"> 
                        <path d="M 50 6.300781 C 74.101562 6.300781 93.800781 25.898438 93.800781 50.101562 C 93.800781 74.300781 74.101562 93.800781 50 93.800781 C 25.898438 93.800781 6.300781 74.101562 6.300781 50 C 6.300781 25.898438 25.898438 6.300781 50 6.300781 M 50 0 C 22.398438 0 0 22.398438 0 50 C 0 77.601562 22.398438 100 50 100 C 77.601562 100 100 77.601562 100 50 C 100 22.398438 77.601562 0 50 0 Z M 77.898438 66.699219 L 77.601562 65.800781 C 76.898438 63.800781 74.800781 61.800781 72.800781 61.199219 L 65.398438 59.199219 C 63.398438 58.699219 60.5 59.398438 59.101562 60.898438 L 56.398438 63.601562 C 46.699219 61 39.101562 53.300781 36.398438 43.601562 L 39.101562 40.898438 C 40.601562 39.398438 41.300781 36.601562 40.800781 34.601562 L 38.800781 27.199219 C 38.300781 25.199219 36.199219 23 34.199219 22.398438 L 33.398438 22.101562 C 31.398438 21.398438 28.601562 22.101562 27.101562 23.601562 L 23.101562 27.601562 C 22.398438 28.300781 21.898438 30.300781 21.898438 30.300781 C 21.800781 43 26.699219 55.199219 35.699219 64.199219 C 44.699219 73.199219 56.898438 78.101562 69.5 78 C 69.601562 78 71.699219 77.601562 72.398438 76.800781 L 76.398438 72.800781 C 77.898438 71.5 78.5 68.699219 77.898438 66.699219 Z M 77.898438 66.699219 "/>  <!-- <embed> -->
                    </svg>
                </div>
                    <h2 class="box-item__up">contact number:</h2>
                    <?php 
                        $phonelink = get_field('phone_link');
                        if( $phonelink ): ?>
                            <a class="box-item__down" href="<?php echo $phonelink; ?>">+1234321321</a>
                        <?php endif; ?>
            </div>
            
            <div class="box-item">
                <div class="box-item__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="box-item__img" viewBox="0 0 100 100">
                        <path  d="M 50 0 C 22.398438 0 0 22.398438 0 50 C 0 77.601562 22.398438 100 50 100 C 77.601562 100 100 77.601562 100 50 C 100 22.398438 77.601562 0 50 0 Z M 50 92.199219 C 26.699219 92.199219 7.800781 73.300781 7.800781 50 C 7.800781 26.699219 26.699219 7.800781 50 7.800781 C 73.300781 7.800781 92.199219 26.699219 92.199219 50 C 92.199219 73.300781 73.300781 92.199219 50 92.199219 Z M 50 92.199219 "/>
                        <path  d="M 50 34.398438 L 25 34.398438 L 25 65.699219 L 75 65.699219 L 75 34.398438 Z M 50 37.5 L 67.5 37.5 L 50 50 L 32.5 37.5 Z M 28.101562 38.398438 L 38.699219 45.601562 L 28.101562 57.199219 Z M 50 62.5 L 32 62.5 L 40.898438 47 L 50 53.199219 L 59.101562 47 L 68 62.5 Z M 71.898438 57.199219 L 61.199219 45.601562 L 71.800781 38.398438 Z M 71.898438 57.199219 "/>
                    </svg>
                </div>
                    <h2 class="box-item__up">Email us:</h2>
                    <?php 
                        $phonelink = get_field('phone_link');
                        if( $phonelink ): ?>
                            <a class="box-item__down" href="<?php echo $phonelink; ?>">name@mail.com</a>
                        <?php endif; ?>
            </div>
        </div>
        <div id="myModal" class="form" tabindex="-1" >
                    <h2 class="form__title"><?php the_field('contact_title'); ?></h2>
            <?php echo do_shortcode('[contact-form-7 id="196" title="myForm"]'); ?>
                       
</section>

<?php get_footer(); ?>
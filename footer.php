<footer class="footer">
    <div class="container">
    <nav class="nav-footer">
            <?php
            if (has_nav_menu('footer_menu')) :
                wp_nav_menu([
                    'theme_location' => 'footer_menu',
                    'menu_id' => 'footer-menu',
                    'walker' => new nahl_navwalker()]);
            endif;
            ?>
        </nav>
        <?php if( have_rows('footer_socials', 'options') ):?>
                <div class="footer__socials">
                    <?php while (have_rows('footer_socials', 'options')) : the_row(); ?>
                        <?php $social_icon = get_sub_field('social_icon')?>
                        <a target="_blank" href="<?php echo get_sub_field('social_link')?>">
                            <img src="<?php echo $social_icon['url']?>" alt="<?php echo $social_icon['alt']?>">
                        </a>
                    <?php endwhile; ?>
                </div>
        <?php endif; ?>
    </div>  
    <div class="footer__text">
            <p>&copy;copyright | V-travel 2019. all right Reserved</p>
        </div>
    </div>
</footer>

    
    <?php wp_footer(); ?>

</body>
</html>
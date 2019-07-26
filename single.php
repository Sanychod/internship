<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header(); ?>
</header>
<section id="About" class="main">
        <div class="container">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1 class="post-title"><?php the_title(); ?></h1>
      <div class="post-text"><?php the_content(); ?></div>
      <?php comments_template(); ?>
      <?php endwhile; ?>

      <?php else: ?>

      <?php endif; ?>
			</div>
	</section>

<?php

get_footer();

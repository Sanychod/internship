<?php get_header(); ?>
<div class="header-content">
<h2 class="header-content__title"><?php the_title(); ?></h2>
</div>
</header>
<section id="About" class="main">

	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
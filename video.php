<?php
	/*Template Name: Home Video Slideshow */
get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();?>
				<?php get_template_part( 'template-parts/home', 'videoslideshow' ); ?>
				<?php get_template_part( 'template-parts/home', 'cta' ); ?>
			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer()?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pem
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<img id="page-header" class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
			<div class="container">
				<div class="row">
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<header class="entry-header">
						<h2 class="entry-title"><?php single_post_title(); ?></h2>
					</header><!-- .entry-header -->
				</div>
			</div>

			<?php
			endif;

			/* Start the Loop */
			
			echo '<div class="container">';
			echo '<div class="row">';
			
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;
			
			echo '</div>';
			echo '</div>';

			echo '<div class="container">';
			echo '<div class="row">';
			echo '<div class="col-md-12">';
			echo '<div class="search-nav">';
				the_posts_navigation();
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div';

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

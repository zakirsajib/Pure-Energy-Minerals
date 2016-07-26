<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pem
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<img id="page-header" class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );
			
			
			echo '<div class="container">';
				echo '<div class="row">';
					//echo '<div class="col-md-12">';
					//	the_post_navigation();
					//echo '</div>';
				echo '</div>';
			echo '</div>';

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				echo '<div class="container">';
					echo '<div class="row">';
						echo '<div class="col-md-12">';
							comments_template();
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

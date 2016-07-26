<?php
/**
 * The template for displaying archive pages.
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
		if ( have_posts() ) : ?>
			<div class="container">
				<div class="row">
					<header class="entry-header">
						<?php
							the_archive_title( '<h2 class="entry-title">', '</h2>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->
				</div>
			</div>

			<?php
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

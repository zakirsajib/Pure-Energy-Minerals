<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package pem
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<img id="page-header" class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

		<?php
		if ( have_posts() ) : ?>
			<section class="serach-results">
				<div class="container">
					<div class="row">
						<header class="entry-header">
							<h2 class="entry-title"><?php printf( esc_html__( 'Search Results for: %s', 'pem' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
						</header><!-- .page-header -->
					</div>
				</div>
			</section>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;
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
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();

<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pem
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<img id="page-header" class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

			<div class="container">
				<div class="row">
					<section class="error-404 not-found">
						<header class="entry-header">
							<h2 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'pem' ); ?></h2>
						</header><!-- .page-header -->
							<div class="page-content">
								<div class="col-md-12">
									<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search below form?', 'pem' ); ?></p>
									
									<?php get_search_form(); ?>
								</div>
							</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

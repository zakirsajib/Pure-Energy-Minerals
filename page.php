<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
			while ( have_posts() ) : the_post();
				
				if(is_page('overview')):
					get_template_part( 'template-parts/content', 'about' );
				elseif(is_page('management-advisors')):
					get_template_part( 'template-parts/content', 'management' );
				elseif(is_page('board-of-directors')):
					get_template_part( 'template-parts/content', 'directors' );
				elseif(is_page('technology-overview')):
					get_template_part( 'template-parts/content', 'technology' );
				elseif(is_page('quick-facts')):
					get_template_part( 'template-parts/content', 'facts' );
				elseif(is_page('why-lithium')):
					get_template_part( 'template-parts/content', 'why' );
				elseif(is_page('contact')):
					get_template_part( 'template-parts/content', 'contact' );
				elseif(is_page('project-partners')):
					get_template_part( 'template-parts/content', 'partner' );
				elseif(is_page('corporate-directory')):
					get_template_part( 'template-parts/content', 'directory' );
				elseif(is_page('photo-gallery')):
					get_template_part( 'template-parts/content', 'gallery' );
				elseif(is_page('reports-presentations')):
					get_template_part( 'template-parts/content', 'reports' );
				else:
					get_template_part( 'template-parts/content', 'page' );
				endif;

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

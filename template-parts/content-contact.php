<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pem
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="default-page">
		<div class="container">
			<div class="row">
				<header class="entry-header">
					<?php if(get_field('header_title_page')):?>
						<h2 class="entry-title"><?php the_field('header_title_page')?></h2>
					<?php else:?>
						<h2 class="entry-title"><?php the_title()?></h2>
					<?php endif?>
					<h1 class="entry-sub-title"><?php the_field('header_sub_title_page')?></h1>
					<h1 class="entry-sub-title"><?php the_field('header_sub_title_2_page')?></h1>
				</header><!-- .entry-header -->
			</div>
		</div>
		<div class="entry-content">
			<div class="map-shortcode">
				<?php echo do_shortcode(get_field('google_map_shortcode'));?>
			</div>
			
			<div class="location-details">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<?php the_field('address_#1')?>
						</div>
						<div class="col-md-3">
							<?php the_field('address_#2')?>
						</div>
						<div class="col-md-3">
							<?php the_field('address_#3')?>
						</div>
						<div class="col-md-3">
							<h3><?php the_field('headingtitle_contact')?></h3>
							<a href="mailto:<?php the_field('email_contact')?>"><?php the_field('email_contact')?></a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="contact-form">
				<div class="container">
					<div class="col-md-12">
						<?php echo do_shortcode(get_field('contact_form_shortcode'));?>
					</div>
				</div>	
			</div>
			
			<?php
				the_content();
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pem' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</section>
	
	<footer class="entry-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							esc_html__( 'Edit %s', 'pem' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						),
						'<span class="edit-link">',
						'</span>'
					);
				?>
				</div>
			</div>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

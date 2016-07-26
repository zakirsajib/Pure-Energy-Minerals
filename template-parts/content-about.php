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
	<section class="about">
		<div class="container">
			<div class="row">
				<header class="entry-header">
					<h1 class="entry-sub-title"><?php the_field('header_title_page')?></h1>
					<h2 class="entry-title"><?php the_field('header_sub_title_page')?></h2>
				</header><!-- .entry-header -->
			
				<div class="entry-content">
					<div class="col-md-7 match-height">
						<div class="left-col-contents"><?php the_field('descriptions_about')?></div>
					</div>
					<div class="col-md-5 hidden-xs hidden-sm match-height nevada-wrapper">
						<div class="nevada-sign"><img class="img-responsive" src="<?php the_field('photoimage_about')?>" alt=""></div>
					</div>
				</div><!-- .entry-content -->
			</div>
		</div>
	</section>
	
	
	<section class="partners">
		<div class="container">
			<div class="row">
				<header class="entry-header">
					<h2 class="entry-title"><?php the_field('headingtitle_partner')?></h2>
				</header><!-- .entry-header -->
			
				<div class="entry-content">
					<div class="partners-logo col-md-12 col-md-offset-1">
						<?php if(get_field('logo_partners')): ?>
							<?php while(has_sub_field('logo_partners')): ?>
								<div class="col-md-3">
									<div class="frame"><a href="<?php the_sub_field('partners_logo_url'); ?>" target="_blank"><img class="img-responsive" src="<?php the_sub_field('upload_partners_logo'); ?>" alt="..."></a></div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div><!-- .partners-logo -->
					
					<?php
						//the_content();
			
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pem' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</div>
		</div>
	</section>
	
	
	<footer class="entry-footer">
		<div class="container">
			<div class="row">
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
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

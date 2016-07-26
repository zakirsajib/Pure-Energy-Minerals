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
		<div class="container">
			<div class="row">
					<div class="entry-content">
						<?php
							the_content();
							
							$images = get_field('photo_gallery'); 
							if( $images ): 
								foreach( $images as $image ): ?>
									<div class="col-md-3">
										<div class="gallery">
											<figure><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['medium']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>"></a>
											</figure>
										</div>
									</div>
								<?php endforeach; ?>
							<?php endif;
							
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pem' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
			</div>
		</div>
	
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
	</section>
</article><!-- #post-## -->

<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pem
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="search-found">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<header class="entry-header">
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				
						<?php if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php pem_posted_on(); ?>
						</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->
				</div>
			</div>
		</div>
		<div class="entry-summary">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
		</div><!-- .entry-summary -->
	
		<footer class="entry-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php pem_entry_footer(); ?>
					</div>
				</div>
			</div>
		</footer><!-- .entry-footer -->
	</section>
</article><!-- #post-## -->

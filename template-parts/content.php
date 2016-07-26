<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pem
 */

?>

<div class="col-md-6">

<article id="post-<?php the_ID(); ?>" <?php post_class('match-height'); ?>>
	<section class="news">
<!-- 		<div class="container"> -->
<!-- 			<div class="row"> -->
<!-- 				<div class="col-md-6"> -->
					<header class="entry-header">
						<?php
							if ( is_single() ) {
								the_title( '<h1 class="entry-title">', '</h1>' );
							} else {
								the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							}
				
						if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php pem_posted_on(); ?>
						</div><!-- .entry-meta -->
						<?php
						endif; ?>
					</header><!-- .entry-header -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
		<div class="entry-content">
<!-- 			<div class="container"> -->
<!-- 				<div class="row"> -->
<!-- 					<div class="col-md-6"> -->
					<?php
						the_excerpt( sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pem' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );
			
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pem' ),
							'after'  => '</div>',
						) );
					?>
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
		</div><!-- .entry-content -->			
		<footer class="entry-footer">
<!-- 			<div class="container"> -->
<!-- 				<div class="row"> -->
<!-- 					<div class="col-md-6"> -->
						<?php pem_entry_footer(); ?>
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
		</footer><!-- .entry-footer -->
	</section>
</article><!-- #post-## -->
</div>

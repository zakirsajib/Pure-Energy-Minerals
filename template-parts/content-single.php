<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pem
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="single">
		<div class="container">
			<div class="row">
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
				
				<div class="entry-content">
					<div class="col-md-12">
					<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('full');
						} 
						
						//the_content( sprintf(
							/* translators: %s: Name of current post. */
							//wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pem' ), array( 'span' => array( 'class' => array() ) ) ),
							//the_title( '<span class="screen-reader-text">"', '"</span>', false )
						//) );
			
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pem' ),
							'after'  => '</div>',
						) );
					?>
					
					<?php
    //$paragraphAfter= 1; //shows image after paragraph 1
	//$paragraphEnd= 3; //total number of paragraphs to show
    $content = apply_filters('the_content', get_the_content());
    $content = explode("</p>", $content);
    for ($i = 0; $i <count($content); $i++) {
    	if ($i == 2) {
	    	echo 'Hello 2';
	    	my_post_list();
		}
		if ($i == 4) {
	    	echo 'Hello 4';
	    	my_post_list();
		}
		if ($i == 6) {
	    	echo 'Hello 6';
	    	my_post_list();
		}
		echo $content[$i] . "</p>";
	} ?>
					
					
					</div>
				</div><!-- .entry-content -->
			</div>
		</div>
			
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

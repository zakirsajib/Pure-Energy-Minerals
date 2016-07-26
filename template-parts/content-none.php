<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pem
 */

?>

<section class="no-results not-found">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<header class="entry-header">
				<h2 class="page-title"><?php esc_html_e( 'Nothing Found', 'pem' ); ?></h2>
			</header><!-- .page-header -->
			</div>
		</div>
	</div>	
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<?php
				if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
		
					<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pem' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
		
				<?php elseif ( is_search() ) : ?>
					<div class="alert alert-danger" role="alert">
						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'pem' ); ?></p>
					</div>
					<?php
						get_search_form();
		
				else : ?>
					<div class="alert alert-danger" role="alert">
					<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'pem' ); ?></p>
					</div>
					<?php
						get_search_form();
		
				endif; ?>
				</div>
			</div>
		</div>
	</div><!-- .page-content -->
</section><!-- .no-results -->

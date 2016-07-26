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
	<section class="tech">
		<div class="container">
			<div class="row">
				<header class="entry-header">
					<h1 class="entry-sub-title"><?php the_field('header_title_page')?></h1>
					<h2 class="entry-title"><?php the_field('header_sub_title_page')?></h2>
					<h3 class="lead-title"><?php the_field('lead_title_tech_page')?></h3>
					<p class="lead"><?php the_field('short_descriptions_page')?></p>
				</header><!-- .entry-header -->
			</div>
		</div>
		
		<div class="tech-first-section">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<div class="col-md-6 match-height">
							<img src="<?php the_field('image_tec_sect_one')?>" class="img-responsive" alt="">
						</div>
						<div class="col-md-6 match-height">
							<div class="inner"><?php the_field('descriptions_tec_sec_one')?></div>
						</div>
					</div><!-- .entry-content -->
				</div>
			</div>
		</div>
		<div class="tech-two-section">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<div class="col-md-6 match-height">
								<?php the_field('descriptions_tec_sec_two')?>
								<div class="footnote"><?php the_field('footnote_tec_sec_two')?></div>
						</div>
						<div class="col-md-6">
							<div class="col-md-6 match-height">
								<ul class="media-list">
								  	<?php if(get_field('column_one_icons')): ?>
								  		<?php while(has_sub_field('column_one_icons')): ?>
										  <li class="media">
										    <div class="media-left"><a href="#"><img class="media-object" src="<?php the_sub_field('upload_icon_one'); ?>" alt="..."></a></div>
										    <div class="media-body"><h4 class="media-heading"><?php the_sub_field('heading_icon_one'); ?></h4><p><?php the_sub_field('sub_heading_icon_one'); ?></p>
										    </div>
										  </li>
										<?php endwhile; ?>
									<?php endif;?>
								</ul>
							</div>
							
							<div class="col-md-6 match-height">
								<ul class="media-list">
								  <?php if(get_field('column_two_icons')): ?>
								  		<?php while(has_sub_field('column_two_icons')): ?>
										  <li class="media">
										    <div class="media-left"><a href="#"><img class="media-object" src="<?php the_sub_field('upload_icon_two'); ?>" alt="..."></a></div>
										    <div class="media-body"><h4 class="media-heading"><?php the_sub_field('heading_icon_two'); ?></h4><p><?php the_sub_field('sub_heading_icon_two'); ?></p>
										    </div>
										  </li>
										<?php endwhile; ?>
									<?php endif;?>								  
								</ul>
							</div>
						</div>
					</div><!-- .entry-content -->
				</div>
			</div>
		</div>
		<div class="tech-third-section">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<div class="col-md-6 match-height">
							<?php the_field('descriptions_tec_sec_three')?>
						</div>
						<div class="col-md-6 match-height">
							<img src="<?php the_field('image_tec_sec_three')?>" class="img-responsive" alt="<?php the_field('photoimage_caption')?>">
							<div class="caption"><p><?php the_field('photoimage_caption')?></p></div>
						</div>
					</div><!-- .entry-content -->
				</div>
			</div>
		</div>
		<div class="tech-fourth-section">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<div class="center-block">
							<h1><?php the_field('heading_tec_sec_four')?></h1>
							<div class="video-place"><?php the_field('video_code_tec_sec_four')?></div>
						</div>
					</div><!-- .entry-content -->
				</div>
			</div>
		</div>
	</section>
	
	<footer class="entry-footer">
		<div class="container">
			<div class="row">
				<?php
					wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pem' ),
								'after'  => '</div>',
							) );
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

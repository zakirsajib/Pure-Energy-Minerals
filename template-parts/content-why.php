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
	<section class="why">
		<div class="container">
			<div class="row">
				<header class="entry-header">
					<h1 class="entry-sub-title"><?php the_field('header_title_page')?></h1>
					<h2 class="entry-title"><?php the_field('header_sub_title_page')?></h2>
				</header><!-- .entry-header -->
			</div>
		</div>
		
		<div class="why-first-section">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<div class="col-md-12">
							<?php if(get_field('six_stages')): ?>
								<?php while(has_sub_field('six_stages')): ?>
									<div class="col-md-2">
										<?php if(get_sub_field('number_why')):?>
											<div class="thumbnail">
										      	<div class="num-bg"><div class="num"><?php the_sub_field('number_why'); ?></div></div>
												<div class="caption">
										        	<p><?php the_sub_field('short_text_why'); ?></p>
										   		</div>
											</div>
									    <?php endif;?>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="entry-content">
						<div class="col-md-6 match-height">
							<?php the_field('left_column_why')?>
						</div>
						<div class="col-md-6 match-height">
							<img class="img-responsive" src="<?php the_field('right_column_why')?>" alt="">
						</div>
					</div><!-- .entry-content -->
				</div>
			</div>
		</div>
		<div class="why-two-section">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<div class="col-md-12">
							<h2><?php the_field('heading_sect_two')?></h2>
						</div>
					</div><!-- .entry-content -->
				</div>
				
				<div class="row">
					<div class="entry-content">
						<div class="col-md-6 match-height">
							<?php the_field('left_column_sect_two')?>
						</div>
						<div class="col-md-6 match-height">
							<img class="img-responsive" src="<?php the_field('right_column_sect_two')?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="why-third-section">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<div class="col-md-7 match-height">
							<div class="pie-chart"><img class="img-responsive" 
							src="<?php the_field('left_column_pie_chart_one')?>" alt="">
							</div>
							<div class="pie-chart"><img class="img-responsive" 
							src="<?php the_field('left_column_pie_chart_two')?>" alt=""></div>
						</div>
						<div class="col-md-5 match-height">
							<div class="right-col-content"><?php the_field('right_column_sect_three')?></div>
						</div>
					</div><!-- .entry-content -->
				</div>
			</div>
		</div>
		<div class="why-fourth-section">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<div class="col-md-12">
							<div class="fourth-sect-lead"><?php the_field('heading_sect_four')?></div>
						</div>	
					</div><!-- .entry-content -->
				</div>
				<div class="row">
					<div class="entry-content">
						<div class="col-md-6 match-height">
							<?php the_field('left_column_sect_four')?>
						</div>
						<div class="col-md-6 match-height">
							<?php the_field('right_column_sect_four')?>
						</div>
					</div>
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

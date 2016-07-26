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
	<section class="facts">
		<div class="container">
			<div class="row">
				<header class="entry-header">
					<h1 class="entry-sub-title"><?php the_field('header_title_page')?></h1>
					<h2 class="entry-title"><?php the_field('header_sub_title_page')?></h2>
				</header><!-- .entry-header -->
			</div>
		</div>
		
		<div class="facts-first-section">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<div class="col-md-6 match-height center-border">
							<div class="location">
								<?php the_field('location_descriptions')?>
								<div class="location-map">
									<img src="<?php the_field('location_map')?>" class="img-responsive aligncenter" alt="">
								</div>
							</div>
						</div>
						<div class="col-md-6 match-height">
							<div class="location">
								<h2><?php the_field('headingtitle_project')?></h2>
								<div class="project-highlights">
									<?php if(get_field('project_highlights_details')): ?>
										<ul class="list-group">
											<?php while(has_sub_field('project_highlights_details')): ?>
												<li class="list-group-item"><img src="<?php the_sub_field('image_project'); ?>" class="img-responsive aligncenter" alt=""><p><?php the_sub_field('short_descriptions_project'); ?></p></li>
									  		<?php endwhile; ?>
									  <?php endif; ?>
									</ul>
								</div>
							</div>	
						</div>
					</div><!-- .entry-content -->
				</div>
			</div>
		</div>
		<div class="facts-two-section">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<div class="col-md-12">
							<h2><?php the_field('headingtitle_resource')?></h2>
							<p class="lead"><?php the_field('descriptions_resources')?></p>	
							<div class="resource-table table-responsive">
								<table class="table">
									<?php if(get_field('table_heading_resources')): ?>
								  <thead>
								    <tr>
									  <?php while(has_sub_field('table_heading_resources')): ?>
									  	<th><?php the_sub_field('table_heading_name'); ?></th>
									  <?php endwhile; ?>
								    </tr>
								  </thead>
								  	<?php endif; ?>
								  <tbody>
									<?php if(get_field('table_row_resources')): ?>  
										<?php while(has_sub_field('table_row_resources')): ?> 
									    <tr>
									      <td><?php the_sub_field('row_data_one_resources'); ?></td>
									      <td><?php the_sub_field('row_data_two_resources'); ?></td>
									      <td><?php the_sub_field('row_data_three_resources'); ?></td>
									      <td><?php the_sub_field('row_data_four_resources'); ?></td>
								    	</tr>
								    	<?php endwhile; ?>
								    <?php endif; ?>
								  </tbody>
								</table>
								<div class="footnote"><?php the_field('table_footnote_resources')?></div>
							</div>
						</div>
					</div><!-- .entry-content -->
				</div>
			</div>
		</div>
		<div class="facts-third-section">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<div class="col-md-6 match-height">
							<?php the_field('descriptions_deposit')?>
						</div>
						<div class="col-md-6 match-height mobile-padding">
							<?php $images = get_field('deposit_section_images'); 
								if( $images ): 
									foreach( $images as $image ): ?>
										<img src="<?php echo $image['sizes']['large']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>"><br/>
									<?php endforeach; ?>
								<?php endif; ?>
						</div>
					</div><!-- .entry-content -->
				</div>
			</div>
		</div>
		<div class="facts-fourth-section">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<h2>Advantages</h2>
						<div class="clearfix"></div>
						<div class="inner">
							<?php if(get_field('seven_stages')): ?>
								<?php while(has_sub_field('seven_stages')): ?>
									<div class="col-md-3">
										<?php if(get_sub_field('number_adv_one')):?>
											<div class="thumbnail">
										      	<div class="num-bg"><div class="num"><?php the_sub_field('number_adv_one'); ?></div></div>
												<div class="caption">
										        	<p><?php the_sub_field('descriptions_adv_one'); ?></p>
										   		</div>
											</div>
									    <?php endif;?>
									    <?php if(get_sub_field('number_adv_sec')):?>
										    <div class="thumbnail">
										      	<div class="num-bg"><div class="num"><?php the_sub_field('number_adv_sec'); ?></div></div>
												<div class="caption">
										        	<p><?php the_sub_field('descriptions_adv_two'); ?></p>
										      	</div>
										    </div>
									    <?php endif;?>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div><!-- .inner -->
					</div><!-- .entry-content -->
				</div>
			</div>
		</div>
		<div class="facts-fifth-section">
			<div class="container">
				<div class="row">
					<div class="entry-content">
						<img class="img-responsive aligncenter" src="<?php the_field('downloads_icon')?>" alt="pem-download-icon">
						<h3><?php the_field('headingtitle_downloads')?></h3>
						<div class="clearfix"></div>
						<div class="download-inner">
							<div class="col-md-6">
								<div class="thumbnail">
							      	<img class="img-responsive" src="<?php the_field('image_one_download')?>" alt="<?php the_field('caption_download_one')?>">
								  		<div class="caption">
								  			<p><?php the_field('caption_download_one')?></p>
								  				<a href="<?php the_field('link_url_one')?>" class="btn btn-default" role="button"><?php the_field('link_name_one')?></a>
							      		</div>
							    </div>
							</div>
							<div class="col-md-6">
								<div class="thumbnail">
							      	<img class="img-responsive" src="<?php the_field('image_two_download')?>" alt="<?php the_field('caption_download_two')?>">
								  		<div class="caption">
								  			<p><?php the_field('caption_download_two')?></p>
								  			<a href="<?php the_field('link_url_two')?>" class="btn btn-default" role="button"><?php the_field('link_name_two')?></a>
							      		</div>
							    </div>
							</div>
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

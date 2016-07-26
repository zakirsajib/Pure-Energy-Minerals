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
	<section class="team">
		<div class="container">
			<div class="row">
				<header class="entry-header">
					<h1 class="entry-sub-title"><?php the_field('header_title_page')?></h1>
					<h2 class="entry-title"><?php the_field('header_sub_title_page')?></h2>
				</header><!-- .entry-header -->
			
				<div class="entry-content">
					<div class="col-md-6 match-height">
						<div class="team-photo">
							<?php if(get_field('team_details')): $count = 1;?>
								<?php while(has_sub_field('team_details')): ?>
									<div class="col-md-6">
										<div class="thumbnail">
											<?php if(get_sub_field('photo_team')):?>
											<a data-target="#aa<?php echo $count?>" href="#a<?php echo $count?>" data-toggle="#a<?php echo $count?>"><img id="x<?php echo $count?>" class="grayscale" src="<?php the_sub_field('photo_team'); ?>" alt="<?php the_sub_field('name_team'); ?>"></a>
											<?php else:?>
												<a data-target="#aa<?php echo $count?>" href="#a<?php echo $count?>" data-toggle="#a<?php echo $count?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/noteam.png" alt="<?php the_sub_field('name_team'); ?>"></a>
											<?php endif;?>
									      <div class="caption">
									        <h3><?php the_sub_field('name_team'); ?></h3>
									        <h4><?php the_sub_field('position_team'); ?></h4>
									      </div>
										</div>
									</div>
									<?php $count++; ?>
								<?php endwhile; ?>
							<?php endif;?>
						</div>
					</div>
					<div class="col-md-4">
						<div id="sticky-anchor"></div>
						<div class="team-details" id="sticky">
							<?php if(get_field('team_details')): $detailscount = 1;?>
								<?php while(has_sub_field('team_details')): ?>
									<section id="a<?php echo $detailscount?>">
										<div class="team-header">
											<h3><?php the_sub_field('name_team'); ?></h3>
											<h4><?php the_sub_field('position_team'); ?></h4>
										</div>
										<div class="team-profile">
											<?php the_sub_field('profile_descriptions'); ?>
										</div>
									</section>
									<?php $detailscount++; ?>
								<?php endwhile; ?>
							<?php endif;?>
						</div>
					</div>
					
					<div class="col-md-2 team-nav match-height hidden-md hidden-xs hidden-sm">
						<div class="team-nav-scroll">
							<?php if(get_field('team_details')): $navcount = 1;?>
								<?php while(has_sub_field('team_details')): ?>
									<a id="aa<?php echo $navcount?>" href="#a<?php echo $navcount?>" data-toggle="#a<?php echo $navcount?>" data-target="#x<?php echo $navcount?>"><?php echo $navcount?></a>
									<?php $navcount++; ?>
								<?php endwhile; ?>
							<?php endif;?>
						</div>
					</div>
					
					<?php
						//the_content();
					?>
				</div><!-- .entry-content -->
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

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pem
 */

?>

	</div><!-- #content -->
	
	<section class="signup">
		<div class="container">
			<div class="row">
				<div class="thumbnail">
				    <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/assets/images/signup.png" alt="...">
			      <div class="caption">
			        <h3><?php echo get_theme_mod('signup_heading', 'No information has been saved yet.')?> – <span class="light"><?php echo get_theme_mod('signup_heading_2', 'No information has been saved yet.')?></span></h3>
			        <p><a data-toggle="modal" data-target="#pemSignup" class="btn btn-default" role="button"><?php echo get_theme_mod('signup_button', 'No information has been saved yet.')?></a></p>
			      </div>
			    </div>
			</div>
		</div>
		<?php get_template_part( 'template-parts/footer', 'signup' )?>
	</section>
	
	<section class="news-posts">
		<div class="container">
			<div class="row">
				<header class="entry-header">
					<h1 class="entry-title"><?php echo get_theme_mod('latest_news_heading', 'No information has been saved yet.')?></h1>
					<p class="lead"><?php echo get_theme_mod('latest_news_sub', 'No information has been saved yet.')?></p>
				</header><!-- .entry-header -->
			</div>
			
			<div class="row">
				<div class="col-md-4">
					<div class="lithium-news">
						<div class="panel panel-default match-height">
							<?php if (is_active_sidebar( 'lithium-news' ) ):
								dynamic_sidebar( 'lithium-news' );
							else:?>
								<div class="panel-heading">
								    <h3 class="panel-title">Lithium News</h3>
								</div>
								<ul class="list-group">
								   <li class="list-group-item">No News Found!</li>
								</ul>
							<?php endif;?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="company-news">
						<div class="panel panel-default match-height">
							<?php if (is_active_sidebar( 'company-news' ) ):
								dynamic_sidebar( 'company-news' );
							else:?>
								<div class="panel-heading">
								    <h3 class="panel-title">Company News</h3>
								</div>
								<ul class="list-group">
								   <li class="list-group-item">No News Found!</li>
								</ul>
							<?php endif;?>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="tweets">
						<div class="panel panel-default match-height">
						  <div class="panel-heading">
						    <h3 class="panel-title">TWEETS</h3>
						  </div>
						  <div class="footer-twitter">
							  <a class="twitter-timeline" href="https://twitter.com/pureenergyminer" data-widget-id="723529858949746688"></a>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="contact-details">
					<div class="col-md-4 location">
						<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ):
							dynamic_sidebar( 'footer-sidebar-1' );
						endif?>	
					</div>
					<div class="col-md-4 social-media">
						<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ):
							dynamic_sidebar( 'footer-sidebar-2' );
						endif?>	
					</div>
					<div class="col-md-4 contact">
						<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ):
							dynamic_sidebar( 'footer-sidebar-3' );
						endif?>	
					</div>
				</div>
				
				<div class="clearfix"></div>
				<div class="site-info">
					<p>&copy; <?php _e(date('Y')); ?> <?php bloginfo('name'); ?>. <span class="copyright"><?php echo get_theme_mod('copyright_text', 'No copyright information has been saved yet.')?></span> <a href="#">Legal Disclaimer</a></p> 
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page --><?php echo get_theme_mod('google_analytics_code', 'No information has been saved yet.')?>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<?php wp_footer(); ?>
</body>
</html>

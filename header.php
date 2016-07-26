<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pem
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'pem' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="row">
						<div class="center-block">
						
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#pem-navbar-collapse-complete">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
						<?php $mobile_header_logo = get_theme_mod('mobile_header_logo');?>	
						  <!-- Displays below 1200px ONLY and usual navbar will be hidden on 1200 breakpoint-->
						  	<?php if($mobile_header_logo):?>
						  	<div class="mobile-brand hidden-lg">
						  		<a href="<?php echo home_url(); ?>"><img class="img-responsive" src="<?php echo esc_html($mobile_header_logo)?>" alt="Pure Energy Minerals"></a>
						  	</div>
						 <?php endif?>						  	
				    </div><!-- .navbar-header -->
					
					
			        <?php
			            wp_nav_menu( array(
			                'menu'              => 'primary',
			                'theme_location'    => 'primary',
			                'depth'             => 2,
			                'container'         => 'div',
			                'container_class'   => 'collapse navbar-collapse col-md-4 pull-left',
							'container_id'      => 'pem-navbar-collapse-left',
			                'menu_class'        => 'nav navbar-nav',
			                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                //'walker'            => new wp_bootstrap_navwalker())
			            ));
			        ?>
			        
			        <?php $header_logo = get_theme_mod('header_logo');
					      if($header_logo):?>
						  	<a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="img-responsive" src="<?php echo esc_html($header_logo)?>" alt="<?php bloginfo( 'name' ); ?>" width="439" height="209"></a>
						  	<?php else:?>
						  		<a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="img-responsive" src="wp-content/uploads/2016/04/footer_logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>
						  <?php endif?>
			        
						  <div class="header-media hidden-md hidden-sm hidden-xs">
							<ul>
								<li><a href="mailto:info@pureenergyminerals.com"><img src="<?php echo get_template_directory_uri() ?>/assets/images/email.png" alt=""></a></li>
								<li><a href="tel:+1-604-608-6611"><img src="<?php echo get_template_directory_uri() ?>/assets/images/phone.png" alt=""></a></li>
								<li><img data-toggle="modal" data-target="#pemSearch" src="<?php echo get_template_directory_uri() ?>/assets/images/search.png" alt=""></li>
							</ul>
							</div>
			        
			        
			        <?php
			            wp_nav_menu( array(
			                'menu'              => 'secondary',
			                'theme_location'    => 'secondary',
			                'depth'             => 2,
			                'container'         => 'div',
			                'container_class'   => 'collapse navbar-collapse col-md-4 pull-right',
							'container_id'      => 'pem-navbar-collapse-right',
			                'menu_class'        => 'nav navbar-nav',
			                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                //'walker'            => new wp_bootstrap_navwalker())
			            ));
			        ?>
			        
			        <?php
			            wp_nav_menu( array(
			                'menu'              => 'complete',
			                'theme_location'    => 'complete',
			                'depth'             => 2,
			                'container'         => 'div',
			                'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'pem-navbar-collapse-complete',
			                'menu_class'        => 'nav navbar-nav hidden-lg'
			            ));
			        ?>
						</div> <!-- .center-block -->
					</div> <!-- .row -->
		    	</div><!-- .container -->
			</nav><!-- .navbar -->		
</header><!-- #masthead -->
<?php get_template_part( 'template-parts/header', 'searchform' )?>
<div id="content" class="site-content">

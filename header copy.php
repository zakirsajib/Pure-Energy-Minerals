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
		
		<div class="owl-carousel">
			<img class="owl-lazy" data-src="http://placehold.it/1280x637/000000" alt="">
			<img class="owl-lazy" data-src="http://placehold.it/1280x637/999999" alt="">
			<img class="owl-lazy" data-src="http://placehold.it/1280x637/dddddd" alt="">
			<img class="owl-lazy" data-src="http://localhost/pem/wp-content/uploads/2016/04/slide-1.jpg" alt="">
<!-- 		<a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a> -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

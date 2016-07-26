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
		<div id="mycarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
    <li data-target="#mycarousel" data-slide-to="3"></li>
    <li data-target="#mycarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item">
        <img src="https://unsplash.it/2000/1250?image=397" data-color="lightblue" alt="First Image">
        <div class="carousel-caption">
            <h3>First Image</h3>
        </div>
    </div>
    <div class="item">
        <img src="https://unsplash.it/2000/1250?image=689" data-color="firebrick" alt="Second Image">
        <div class="carousel-caption">
            <h3>Second Image</h3>
        </div>
    </div>
    <div class="item">
        <img src="https://unsplash.it/2000/1250?image=675" data-color="violet" alt="Third Image">
        <div class="carousel-caption">
            <h3>Third Image</h3>
        </div>
    </div>
    <div class="item">
        <img src="https://unsplash.it/2000/1250?image=658" data-color="lightgreen" alt="Fourth Image">
        <div class="carousel-caption">
            <h3>Fourth Image</h3>
        </div>
    </div>
    <div class="item">
        <img src="http://localhost/pem/wp-content/uploads/2016/04/slide-1.jpg" data-color="tomato" alt="Fifth Image">
        <div class="carousel-caption">
            <h3>Fifth Image</h3>
        </div>
    </div>
    <div class="item">
        <video width="100%" height="100%" poster="https://archive.org/download/WebmVp8Vorbis/webmvp8.gif" >
			<source src="https://archive.org/download/WebmVp8Vorbis/webmvp8_512kb.mp4" type="video/mp4">
			<source src="https://archive.org/download/WebmVp8Vorbis/webmvp8.ogv" type="video/ogg">
			<source src="https://archive.org/download/WebmVp8Vorbis/webmvp8.webm" type="video/webm">
			Your browser doesn't support HTML5 video tag.
    	</video>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">

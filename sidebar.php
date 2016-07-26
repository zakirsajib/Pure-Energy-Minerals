<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pem
 */

if ( ! is_active_sidebar( 'blog-sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="col-md-4 widget-area" role="complementary">
	<?php dynamic_sidebar( 'blog-sidebar-1' ); ?>
</aside><!-- #secondary -->

<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpthemens
 */

if ( ! is_active_sidebar( 'footer-widgets' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
</aside><!-- #secondary -->
<hr class="widget-hr">

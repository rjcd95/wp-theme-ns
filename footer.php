<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpthemens
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpthemens' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'wpthemens' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpthemens' ), 'wpthemens', '<a href="https://github.com/rjcd95/">rjcd95</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.scrollex.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.scrolly.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/browser.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/breakpoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/util.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

</body>
</html>

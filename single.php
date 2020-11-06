<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wpthemens
 */

get_header();
?>

	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<!-- Wrapper -->
		<div id="wrapper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<?php
					get_template_part( 'template-parts/content', get_post_type() );
					?><br><?php
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle button">' . esc_html__( 'Previous', 'wpthemens' ) . '</span>',
							'next_text' => '<span class="nav-subtitle button">' . esc_html__( 'Next', 'wpthemens' ) . '</span>',
						)
					);
					?><br><?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;					
					?>
				</div>
			</section>
		</div>
		<?php
	endwhile; // End of the loop.
	?>

<?php
get_sidebar();
get_footer();

<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpthemens
 */

?>

<!-- Wrapper -->
<div id="wrapper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Main -->
	<section id="main" class="wrapper">
		<div class="inner">
			<?php the_title( '<h1 class="major">', '</h1>' ); ?>
			<?php if (get_the_post_thumbnail_url()) : ?>
				<span class="image fit"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" /></span>
			<?php endif; ?>
			<div class="entry-content">
				<?php
				the_content();
				?>
			</div>
	</section>

</div>

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpthemens
 */

?>

<?php
	if ( is_singular() ) :
	?>	
		<div class="content-post">
			<?php the_title( '<h1 class="major">', '</h1>' ); ?>
			<?php if (get_the_post_thumbnail_url()) : ?>
				<span class="image fit"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" /></span>
			<?php endif; ?>
			<div class="entry-content">
				<?php
				the_content();
				?>
			</div>
		</div>
	<?php
	else :
	?>
		<section id="post-<?php the_ID(); ?>" class="wrapper style2 spotlights">
			<a href="<?php echo get_permalink();?>" class="image"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" data-position="center center" /></a>
			<div class="content">
				<div class="inner">
					<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
					<p><?php the_excerpt(); ?></p>
					<ul class="actions">
						<li><a href="<?php echo get_permalink();?>" class="button">Learn more</a></li>
					</ul>
				</div>
			</div>
		</section>
	<?php
	
	endif;

?>


<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpthemens
 */

get_header();
?>

	<!-- Wrapper -->
	<div id="wrapper">        
	<!-- Intro -->
		<section id="intro" class="wrapper style1 fullscreen fade-up">
			<div class="inner">
				<h1><?php bloginfo( 'name' ); ?></h1>
				<?php
				$_s_description = get_bloginfo( 'description', 'display' );
				if ( $_s_description || is_customize_preview() ) :
				?>
					<p><?php echo $_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div>
		</section>

        <!-- One -->
        <section id="one" class="wrapper style2 spotlights">
            <section>
                <a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center" /></a>
                <div class="content">
                    <div class="inner">
                        <h2>Sed ipsum dolor</h2>
                        <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
                        <ul class="actions">
                            <li><a href="generic.html" class="button">Learn more</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center" /></a>
                <div class="content">
                    <div class="inner">
                        <h2>Feugiat consequat</h2>
                        <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
                        <ul class="actions">
                            <li><a href="generic.html" class="button">Learn more</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <a href="#" class="image"><img src="images/pic03.jpg" alt="" data-position="25% 25%" /></a>
                <div class="content">
                    <div class="inner">
                        <h2>Ultricies aliquam</h2>
                        <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
                        <ul class="actions">
                            <li><a href="generic.html" class="button">Learn more</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>


	</div>
	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

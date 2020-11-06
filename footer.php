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
    <!-- Footer -->
    <footer id="footer" class="wrapper style1-alt">
        <div class="inner">
            <ul class="footer-list">
                <li>&copy; All rights reserved.</li>
                <li>

					<?php
						printf( esc_html__( 'Theme developed by: %1$s'), '<a href="https://github.com/rjcd95/" target="_blank">rjcd95</a>' );
					?>
				</li>
            </ul>
        </div>
    </footer>
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

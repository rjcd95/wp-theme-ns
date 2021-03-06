<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpthemens
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="is-preload" <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
if ( is_front_page() && is_home() ) :
	?>
	<section id="sidebar">
        <div class="inner">
            <nav>
			<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
            </nav>
        </div>
    </section>
	<?php
else :
	?>
	<!-- Header -->
	<header id="header">
		<div class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="title" rel="home"><?php bloginfo( 'name' ); ?></a>
		</div>
		<nav>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>
		</nav>
	</header>
	<?php
endif;
?>
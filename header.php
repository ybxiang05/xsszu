<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
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

	<body <?php body_class();?> id="<?php get_page_template();?>" >
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<a class="xsszu-logo" href="<?php echo esc_url(home_url('/'))?>">
						<img class="logo-img" src="<?php echo get_template_directory_uri() . '/assets/szudrawsthings - logo3.png'?>" alt="xsszu site logo">
					</a>
					<button id="toggle-btn"class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( ' Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">

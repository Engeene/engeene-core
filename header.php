<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Engeene Core
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

		<div class="navbar navbar-core navbar-static-top">
			<div class="container-fluid">
				<?php // Brand and toggle get grouped for better mobile display ?>
				<div class="navbar-header site-branding">
					<button type="button" class="navbar-toggle menu-toggle" data-toggle="collapse" data-target="site-navigation">
						<span class="sr-only"><?php _e( 'Toggle navigation', 'engeene-core' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div><!-- .navbar-header -->

				<?php // Collect the nav links, forms, and other content for toggling ?>
				<nav class="collapse navbar-collapse" id="site-navigation" role="navigation">
					<h3 class="sr-only"><?php _e( 'Menu', 'engeene-core' ); ?></h3>
					<div class="sr-only skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'engeene-core' ); ?>"><?php _e( 'Skip to content', 'engeene-core' ); ?></a></div>
					<?php wp_nav_menu( array(
						'theme_location'	=> 'primary',
						'container'			=> false,
						'menu_class'		=> 'nav navbar-nav',
						'show_home'			=> true,
						'fallback_cb'		=> 'Bootstrap_Walker::fallback',//'engeene_core_page_menu',
						'depth'				=> 3,
						'walker'			=> new Bootstrap_Walker
					) ); ?>
				</nav>
			</div>
		</div><!-- .navbar -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package DriveRight
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/png" href="/wp-content/themes/driveright/images/favicon.ico">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="header-widgets">
				<?php dynamic_sidebar( 'header-widgets' ); ?>
			</div>
			<div class="header-logo">
				<h1 class="site-title"><a href="<?php bloginfo('url'); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
			</div>

		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'driveright' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'driveright' ); ?></a>

			<?php wp_nav_menu( array( 
				'theme_location' => 'primary', 
				'link_before'    => '<span class="menu-item-wraper">', 
				'link_after'     => '</span>',
			) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

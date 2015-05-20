<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package semplicemente
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="/wp-content/themes/tatuh.net/images/header.png"></a>
		</div>
		<?php 
			global $semplicemente_theme_options;
			$se_options = get_option( 'semplicemente_theme_options', $semplicemente_theme_options );
		?>
	</header><!-- #masthead -->

<div class="tatuh_top_nav">
<nav id="site-navigation" class="main-navigation" role="navigation">
<button class="menu-toggle"><?php _e( 'Menu', 'semplicemente' ); ?><i class="fa fa-align-justify"></i></button>
<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
<?php if ( ! $se_options['hidesearch'] ) : ?>
<a href="#" class="top-search"><i class="fa spaceLeftDouble fa-search"></i></a>
<?php endif; ?>
<?php if ( ! $se_options['hidesearch'] ) : ?>
<div class="topSearchForm">
<?php get_search_form(); ?>
</div>
<?php endif; ?>
</nav>
</div>
	<div id="content" class="site-content">

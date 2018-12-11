<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package modrzjwzki
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

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="header">
			<img src="<?php echo bloginfo('template_directory'); ?>/assets/logo.png" class="img-fluid logo" width="90" />
			<ul class="menu">
			<li><a href="#">główna</a></li>
			<li><a href="#">O nas</a></li>
			<li><a href="#">Kontakt</a></li>
			<li><a href="#">blog</a></li>
			</ul>
		 </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">


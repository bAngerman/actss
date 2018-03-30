<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* nav ******************* -->

	<nav class="nav">
		<div class="brand">
			<a href="#">
				<img class="logo" src="http://actssa.web.dmitcapstone.ca/wp-content/uploads/2018/03/ACTSS-LOGO.svg" alt="ACTSS LOGO"/>
			</a>
			<div class="brand-tagline">Animal Cancer Therapy Subsidization Society</div>
		</div>
		<div class="mobile-nav-btn">
			<a href="#" id="toggleNav"><i class="fas fa-bars fa-2x"></i><i class="hidden fas fa-times fa-2x"></i></a>
		</div>
		<!-- The WordPress Menu goes here -->
		<?php wp_nav_menu(
			array(
				'menu_class'      => 'nav-item',
				'fallback_cb'     => 'false',
				'menu_id'         => 'main-menu'
			)
		); ?>

	</nav><!-- /nav -->
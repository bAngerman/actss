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
	<style>
	.banner {
		
		<?php 
			if ( is_front_page() ) {
				echo 'background-image: url(' . get_site_url() . '/wp-content/uploads/2018/03/header-992px.png);';
				echo 'height: 400px';
			} else {
				echo 'background-image: url(' . get_site_url() . '/wp-content/uploads/2018/04/secondary-pages-header-mobile.jpg);';
				echo 'height: 150px;';
			}
		?>
	}
	@media only screen and (min-width: 600px) {
		.banner {
			<?php 
				if ( is_front_page() ) {
					echo 'background-image: url(' . get_site_url() . '/wp-content/uploads/2018/03/header-992px.png);';
					echo 'height: 450px;';
				} else {
					echo 'background-image: url(' . get_site_url() . '/wp-content/uploads/2018/04/secondary-pages-header-tablet.jpg);';
					echo 'height: 248px;';
				}
			?>
		}
	}
	@media only screen and (min-width: 992px) {
		.banner {
			<?php 
				if ( is_front_page() ) {
					echo 'background-image: url(' . get_site_url() . '/wp-content/uploads/2018/03/header-image-1600px.png);';
					echo 'height: 600px;';
				} else {
					echo 'background-image: url(' . get_site_url() . '/wp-content/uploads/2018/04/secondary-pages-header-desktop-1.jpg);';
					echo 'height: 300px;';
				}
			?>
		}
	}
	
	</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* nav ******************* -->

	<nav class="nav">
		<div class="brand">
			<a href="<?php echo get_site_url(); ?>">
				<img class="logo" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/03/ACTSS-LOGO.svg" alt="ACTSS LOGO"/>
			</a>
			<div class="brand-tagline"><?php echo get_query_var('pagename'); ?></div>
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

<!-- Banner -->
	<div class="banner">
		<div class="<?php echo $container; ?>">
			<div class="banner-text rocksalt">
				<h1>
				<?php 
				if( is_front_page() ) {
					echo "Helping pet families <span class=\"yellow\">live</span> with cancer"; 
				} 
				else if ( is_category('blog-post') ) {
					echo "Blog";
				}
				else if ( is_category('pets') ) {
					echo "Our Pets";
				}
				else if ( is_category('event') ) {
					echo "Events";
				}
				else {
					the_title();
				}
				?>
				</h1>
			</div>
		</div>
	</div>
<!-- /Banner -->
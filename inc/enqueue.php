<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		// font awesome
		wp_enqueue_script( 'fa-all', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', array(), $the_theme->get( 'Version' ), false );
		// google fonts
		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Rock+Salt', array(), $the_theme->get( 'Version' ), false );
		// our styles
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ), false );
		// jquery
		wp_enqueue_script( 'jquery');
		// popper (jquery helper)
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), true);
		// modernizr
		wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), $the_theme->get( 'Version' ), false);
		// theme's js
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		wp_localize_script( 'understrap-scripts', 'ajaxObject',
		array( 'ajaxUrl' => admin_url( 'admin-ajax.php' ) ) );
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );


function get_cancer_type() {
	if (isset($_REQUEST)) {

		$id = $_REQUEST['id'];

		$data = array(
			"description" => get_field('description', $id),
			"diagnosis" => get_field('diagnosis', $id),
			"treatment" => get_field('treatment', $id)
		);
		echo json_encode($data);
	}
	wp_reset_query();
	die();
}

add_action( 'wp_ajax_get_cancer_type', 'get_cancer_type' );
add_action( 'wp_ajax_nopriv_get_cancer_type', 'get_cancer_type' );
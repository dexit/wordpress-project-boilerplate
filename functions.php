<?php
add_theme_support( 'menus' );
require_once('includes/class-wp-bootstrap-navwalker.php');
register_nav_menus( array(
	'header_menu' => __( 'Header Menu' ),
	'footer_menu' => __( 'Footer Menu' )
));

// Custom Logo
function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(

		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function theme_prefix_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}

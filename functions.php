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

add_action( 'admin_enqueue_scripts', 'wptuts_add_color_picker' );
function wptuts_add_color_picker( $hook ) {
 
    if( is_admin() ) { 
     
        // Add the color picker css file       
        wp_enqueue_style( 'wp-color-picker' ); 
         
        // Include our custom jQuery file with WordPress Color Picker dependency
        wp_enqueue_script( 'custom-script-handle', plugins_url( 'custom-script.js', __FILE__ ), array( 'wp-color-picker' ), false, true ); 
    }
}

// Load scripts
function load_css_js() {
	wp_enqueue_style('project/app.css', get_template_directory_uri() . '/public/css/style.min.css', false, null);
	//wp_enqueue_script('blankslate/manifest.js', get_template_directory_uri() . '/dist/scripts/manifest.js', null, null, true);
	wp_enqueue_script('project/app.js', get_template_directory_uri() . '/public/js/scripts.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'load_css_js', 100);

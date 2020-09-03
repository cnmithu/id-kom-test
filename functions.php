<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/required-plugins.php'
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}



/* Custom Post Type Start */

function idtest_posttype() {

	register_post_type( 'intro',
		array(
		'labels' => array (
			'name' => __( 'Intros' ),
			'singular_name' => __( 'Intro' )
			),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-welcome-add-page'
		//'rewrite' => array('slug' => 'intro'),
		)
	);
}

// Hooking up our function to theme setup
add_action( 'init', 'idtest_posttype' );

/*
 register user with role Editor
*/
add_action( 'wp_ajax_register_user', 'register_user');
add_action( 'wp_ajax_nopriv_register_user', 'register_user');

function register_user() {

	$formdata = [];
	wp_parse_str($_POST['data'], $formdata );

	$user_id = username_exists( $formdata['name'] );

    if ( !$user_id && email_exists( $formdata['email'] ) == false ) {
		$user_id = wp_create_user( $formdata['name'], $formdata['password'], $formdata['email'] );
		
        if( !is_wp_error($user_id) ) {
            $user = get_user_by( 'id', $user_id );
			$user->set_role( 'editor' );
			wp_send_json_success( 'User <strong>' . $formdata['name'] . ' </strong> has been registered succesfully!' );
        }
	} else {
		wp_send_json_error( 'User already exist' );
	}
	wp_send_json_error( 'Something goes wrong. Try again!' );
}



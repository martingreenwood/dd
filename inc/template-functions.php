<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package dd
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function dd_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'dd_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function dd_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'dd_pingback_header' );


function custom_menu_page_removing() {
	global $current_user;
	wp_get_current_user();

	$email = (string) $current_user->user_email;
	$emailDomain = explode('@', $email);
	$emailDomain = $emailDomain[1];

	if ($emailDomain !== 'wearebeard.com') {
		remove_menu_page( 'themes.php' );                 //Appearance
		remove_menu_page( 'plugins.php' );                //Plugins
		remove_menu_page( 'tools.php' );                  //Tools
		remove_menu_page( 'options-general.php' );                  //Tools
		remove_menu_page( 'edit.php?post_type=acf-field-group' );                  //Tools
		remove_menu_page( 'users.php' );                  //Tools
	}
}
// add_action( 'admin_menu', 'custom_menu_page_removing' );

add_action( 'init', 'club_tax' );

function club_tax() {
    register_taxonomy(
        'club',
        'post',
        array(
            'label' => __( 'Club' ),
            'public' => true,
            'hierarchical' => true,
        )
    );
}
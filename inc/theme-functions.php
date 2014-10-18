<?php
/**
 * bootstrapped theme functions 
 * functions initialized with actions/filters in /lib/init.php
 *
 * @package bootstrapped
 */



/**
 * Remove Dashboard Meta Boxes
 */
function wsdev_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	// unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}


/**
 * Hide Admin Areas that are not used
 */
function wsdev_remove_menu_pages() {
	remove_menu_page( 'link-manager.php' );
}

/**
 * Remove default link for images
 */
function wsdev_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ( $image_set !== 'none' ) {
		update_option( 'image_default_link_type', 'none' );
	}
}

/**
 * Enqueue scripts
 */
function wsdev_scripts() {
	wp_enqueue_style( 'db-styles', get_template_directory_uri() . '/dist/styles/style.min.css' );

	wp_enqueue_script( 'db-scripts', get_template_directory_uri() . '/dist/js/main.min.js', array('jquery'), NULL, true );

}

/**
 * Remove Query Strings From Static Resources
 */
function wsdev_remove_script_version( $src ){
	$parts = explode( '?ver', $src );
	return $parts[0];
}

/**
 * Remove Read More Jump
 */
function wsdev_remove_more_jump_link( $link ) {
	$offset = strpos( $link, '#more-' );
	if ($offset) {
		$end = strpos( $link, '"',$offset );
	}
	if ($end) {
		$link = substr_replace( $link, '', $offset, $end-$offset );
	}
	return $link;
}

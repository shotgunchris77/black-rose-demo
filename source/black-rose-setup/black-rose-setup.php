<?php
/**
 * Plugin Name: Black Rose Setup (one-time)
 * Description: One-time setup for the Black Rose theme. Creates the Home, Menu, Events and Visit pages, sets the home page and turns on clean links. Activate once, then deactivate and delete.
 * Version: 1.0
 * Requires at least: 6.4
 * Requires PHP: 7.4
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

register_activation_hook( __FILE__, function () {
	update_option( 'br_setup_pending', 1 );
} );

add_action( 'admin_init', function () {
	if ( ! get_option( 'br_setup_pending' ) || ! current_user_can( 'manage_options' ) ) { return; }
	if ( 'black-rose' !== get_stylesheet() ) {
		set_transient( 'br_setup_msg', 'theme', 60 );
		return;
	}
	$reg = WP_Block_Patterns_Registry::get_instance();
	$ids = array();
	foreach ( array( 'home' => 'Home', 'menu' => 'Menu', 'events' => 'Events', 'visit' => 'Visit' ) as $slug => $title ) {
		$p       = $reg->get_registered( 'black-rose/' . $slug );
		$content = $p ? $p['content'] : '';
		$existing = get_page_by_path( $slug );
		$args = array( 'post_type' => 'page', 'post_status' => 'publish', 'post_name' => $slug, 'post_title' => $title, 'post_content' => $content );
		if ( $existing ) { $args['ID'] = $existing->ID; $ids[ $slug ] = wp_update_post( wp_slash( $args ) ); }
		else { $ids[ $slug ] = wp_insert_post( wp_slash( $args ) ); }
	}
	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $ids['home'] );
	update_option( 'blogname', 'Black Rose West Allis' );
	update_option( 'blogdescription', 'Cocktail bar and elevated Italian street food in West Allis, WI' );
	update_option( 'timezone_string', 'America/Chicago' );
	update_option( 'permalink_structure', '/%postname%/' );
	foreach ( array( 'sample-page', 'hello-world' ) as $junk ) {
		foreach ( get_posts( array( 'post_type' => array( 'post', 'page' ), 'name' => $junk, 'post_status' => 'any', 'numberposts' => -1 ) ) as $jp ) { wp_delete_post( $jp->ID, true ); }
	}
	if ( ! get_page_by_path( 'nye-party-tba', OBJECT, 'br_event' ) ) {
		$ev = wp_insert_post( array( 'post_type' => 'br_event', 'post_status' => 'publish', 'post_name' => 'nye-party-tba', 'post_title' => 'NYE Party TBA', 'post_excerpt' => 'Details to be announced. Follow @blackrosewestallis on Instagram for updates.', 'post_content' => '<!-- wp:paragraph --><p>Details to be announced. Follow @blackrosewestallis on Instagram for updates.</p><!-- /wp:paragraph -->' ) );
		if ( $ev ) { update_post_meta( $ev, 'br_date', '2026-12-31' ); }
	}
	flush_rewrite_rules();
	delete_option( 'br_setup_pending' );
	set_transient( 'br_setup_msg', 'done', 300 );
} );

add_action( 'admin_notices', function () {
	$m = get_transient( 'br_setup_msg' );
	if ( 'theme' === $m ) {
		echo '<div class="notice notice-warning"><p><strong>Black Rose Setup:</strong> activate the Black Rose theme first (Appearance &gt; Themes), then come back to this page.</p></div>';
	} elseif ( 'done' === $m ) {
		delete_transient( 'br_setup_msg' );
		echo '<div class="notice notice-success"><p><strong>Black Rose Setup is done.</strong> Home, Menu, Events and Visit pages are live. You can now deactivate and delete the Black Rose Setup plugin.</p></div>';
	}
} );

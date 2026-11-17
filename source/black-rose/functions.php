<?php
/**
 * Black Rose theme functions.
 *
 * - Loads the theme stylesheet and the scrolling tape-banner script.
 * - Registers the "Events" post type with date/time fields (Events in the dashboard menu).
 * - Provides shortcodes: [br_calendar]  month-grid events calendar
 *                        [br_upcoming count="3"]  next upcoming events as cards
 *                        [br_event_details]  date, time and link on a single event page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function black_rose_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'black_rose_setup' );

function black_rose_assets() {
	$ver = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'black-rose-style', get_stylesheet_uri(), array(), $ver );

	// Tape banner: the words are typed once in the "Tape Banner" template part; repeat them so the loop is seamless.
	$js = "document.querySelectorAll('.br-tape p').forEach(function(p){var t=p.innerHTML;p.innerHTML=t+' <span class=\"br-dot\">&#10047;</span> '+t+' <span class=\"br-dot\">&#10047;</span> '+t+' <span class=\"br-dot\">&#10047;</span> '+t+' <span class=\"br-dot\">&#10047;</span> ';p.classList.add('is-looping');});"
		. "document.querySelectorAll('.br-menu-jump a').forEach(function(a){a.addEventListener('click',function(){var id=a.getAttribute('href').split('#')[1];var d=document.getElementById(id);if(d&&d.tagName==='DETAILS'){d.open=true;}});});"
		. "function brOpen(){if(!location.hash){return;}var d=document.getElementById(decodeURIComponent(location.hash.slice(1)));if(d&&d.tagName==='DETAILS'){d.open=true;setTimeout(function(){d.scrollIntoView({block:'start'});},30);}}brOpen();window.addEventListener('hashchange',brOpen);";
	wp_register_script( 'black-rose-ui', false, array(), $ver, true );
	wp_enqueue_script( 'black-rose-ui' );
	wp_add_inline_script( 'black-rose-ui', $js );
}
add_action( 'wp_enqueue_scripts', 'black_rose_assets' );

function black_rose_pattern_category() {
	register_block_pattern_category( 'black-rose', array( 'label' => __( 'Black Rose', 'black-rose' ) ) );
}
add_action( 'init', 'black_rose_pattern_category' );

/* -------------------------------------------------------------------------
 * Events
 * ---------------------------------------------------------------------- */

function black_rose_register_events() {
	register_post_type(
		'br_event',
		array(
			'labels'       => array(
				'name'          => 'Events',
				'singular_name' => 'Event',
				'add_new_item'  => 'Add New Event',
				'edit_item'     => 'Edit Event',
				'all_items'     => 'All Events',
			),
			'public'       => true,
			'has_archive'  => false,
			'rewrite'      => array( 'slug' => 'event' ),
			'menu_icon'    => 'dashicons-calendar-alt',
			'menu_position'=> 5,
			'show_in_rest' => true,
			'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		)
	);
	foreach ( array( 'br_date', 'br_start', 'br_end', 'br_link', 'br_tag' ) as $key ) {
		register_post_meta( 'br_event', $key, array( 'type' => 'string', 'single' => true, 'show_in_rest' => true, 'sanitize_callback' => 'sanitize_text_field', 'auth_callback' => function () { return current_user_can( 'edit_posts' ); } ) );
	}
}
add_action( 'init', 'black_rose_register_events' );

function black_rose_event_metabox() {
	add_meta_box( 'br_event_when', 'Event date & time', 'black_rose_event_metabox_html', 'br_event', 'side', 'high' );
}
add_action( 'add_meta_boxes', 'black_rose_event_metabox' );

function black_rose_event_metabox_html( $post ) {
	wp_nonce_field( 'br_event_save', 'br_event_nonce' );
	$v = function ( $k ) use ( $post ) { return esc_attr( get_post_meta( $post->ID, $k, true ) ); };
	echo '<p><label><strong>Date</strong><br><input type="date" name="br_date" value="' . $v( 'br_date' ) . '" style="width:100%"></label></p>';
	echo '<p><label><strong>Start time</strong><br><input type="time" name="br_start" value="' . $v( 'br_start' ) . '" style="width:100%"></label></p>';
	echo '<p><label><strong>End time</strong> (optional)<br><input type="time" name="br_end" value="' . $v( 'br_end' ) . '" style="width:100%"></label></p>';
	echo '<p><label><strong>Label</strong> (optional, e.g. Live Music, Pop-Up, Ticketed)<br><input type="text" name="br_tag" value="' . $v( 'br_tag' ) . '" style="width:100%"></label></p>';
	echo '<p><label><strong>Tickets / RSVP link</strong> (optional)<br><input type="url" name="br_link" value="' . $v( 'br_link' ) . '" style="width:100%"></label></p>';
}

function black_rose_event_save( $post_id ) {
	if ( ! isset( $_POST['br_event_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['br_event_nonce'] ) ), 'br_event_save' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	foreach ( array( 'br_date', 'br_start', 'br_end', 'br_tag' ) as $k ) {
		if ( isset( $_POST[ $k ] ) ) {
			update_post_meta( $post_id, $k, sanitize_text_field( wp_unslash( $_POST[ $k ] ) ) );
		}
	}
	if ( isset( $_POST['br_link'] ) ) {
		update_post_meta( $post_id, 'br_link', esc_url_raw( wp_unslash( $_POST['br_link'] ) ) );
	}
}
add_action( 'save_post_br_event', 'black_rose_event_save' );

/* Show the date in the Events list in the dashboard. */
add_filter( 'manage_br_event_posts_columns', function ( $cols ) { $cols['br_date'] = 'Event date'; return $cols; } );
add_action( 'manage_br_event_posts_custom_column', function ( $col, $id ) { if ( 'br_date' === $col ) { echo esc_html( black_rose_fmt_date( get_post_meta( $id, 'br_date', true ) ) ); } }, 10, 2 );

function black_rose_fmt_time( $t ) {
	if ( ! $t ) {
		return '';
	}
	$ts = strtotime( '2000-01-01 ' . $t );
	return $ts ? strtolower( str_replace( ':00', '', gmdate( 'g:i a', $ts ) ) ) : $t;
}

function black_rose_fmt_date( $d ) {
	$ts = $d ? strtotime( $d ) : false;
	return $ts ? date_i18n( 'l, F j, Y', $ts ) : '';
}

function black_rose_time_range( $id ) {
	$s = black_rose_fmt_time( get_post_meta( $id, 'br_start', true ) );
	$e = black_rose_fmt_time( get_post_meta( $id, 'br_end', true ) );
	return $s ? ( $e ? $s . ' – ' . $e : $s ) : '';
}

function black_rose_get_events( $from, $to, $limit = -1 ) {
	return get_posts(
		array(
			'post_type'      => 'br_event',
			'post_status'    => 'publish',
			'posts_per_page' => $limit,
			'meta_key'       => 'br_date',
			'orderby'        => array( 'meta_value' => 'ASC', 'title' => 'ASC' ),
			'meta_query'     => array(
				array( 'key' => 'br_date', 'value' => array( $from, $to ), 'compare' => 'BETWEEN', 'type' => 'DATE' ),
			),
		)
	);
}

/* [br_calendar] — month grid with previous / next month links and a list of that month's events. */
function black_rose_calendar_shortcode() {
	$tz    = wp_timezone();
	$today = new DateTimeImmutable( 'now', $tz );
	$req   = isset( $_GET['month'] ) ? sanitize_text_field( wp_unslash( $_GET['month'] ) ) : '';
	$first = preg_match( '/^\d{4}-\d{2}$/', $req ) ? DateTimeImmutable::createFromFormat( '!Y-m', $req, $tz ) : $today->modify( 'first day of this month' )->setTime( 0, 0 );
	if ( ! $first ) {
		$first = $today->modify( 'first day of this month' )->setTime( 0, 0 );
	}
	$last   = $first->modify( 'last day of this month' );
	$events = black_rose_get_events( $first->format( 'Y-m-d' ), $last->format( 'Y-m-d' ) );
	$by_day = array();
	foreach ( $events as $ev ) {
		$by_day[ get_post_meta( $ev->ID, 'br_date', true ) ][] = $ev;
	}
	$base = get_permalink();
	$prev = add_query_arg( 'month', $first->modify( '-1 month' )->format( 'Y-m' ), $base ) . '#calendar';
	$next = add_query_arg( 'month', $first->modify( '+1 month' )->format( 'Y-m' ), $base ) . '#calendar';

	ob_start();
	echo '<div class="br-cal" id="calendar">';
	echo '<div class="br-cal-head"><a class="br-cal-nav" href="' . esc_url( $prev ) . '" aria-label="Previous month">&larr;</a>';
	echo '<h3 class="br-cal-title">' . esc_html( wp_date( 'F Y', $first->getTimestamp(), $tz ) ) . '</h3>';
	echo '<a class="br-cal-nav" href="' . esc_url( $next ) . '" aria-label="Next month">&rarr;</a></div>';
	echo '<div class="br-cal-grid" role="grid">';
	foreach ( array( 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat' ) as $dn ) {
		echo '<div class="br-cal-dow" role="columnheader">' . esc_html( $dn ) . '</div>';
	}
	$lead = (int) $first->format( 'w' );
	for ( $i = 0; $i < $lead; $i++ ) {
		echo '<div class="br-cal-day is-empty" aria-hidden="true"></div>';
	}
	$days = (int) $last->format( 'j' );
	for ( $d = 1; $d <= $days; $d++ ) {
		$date    = $first->setDate( (int) $first->format( 'Y' ), (int) $first->format( 'n' ), $d );
		$key     = $date->format( 'Y-m-d' );
		$classes = array( 'br-cal-day' );
		if ( $key === $today->format( 'Y-m-d' ) ) {
			$classes[] = 'is-today';
		}
		if ( '1' === $date->format( 'w' ) ) {
			$classes[] = 'is-closed';
		}
		if ( ! empty( $by_day[ $key ] ) ) {
			$classes[] = 'has-event';
		}
		echo '<div class="' . esc_attr( implode( ' ', $classes ) ) . '" role="gridcell"><span class="br-cal-num">' . esc_html( $d ) . '</span>';
		if ( '1' === $date->format( 'w' ) && empty( $by_day[ $key ] ) ) {
			echo '<span class="br-cal-closed">Closed</span>';
		}
		if ( ! empty( $by_day[ $key ] ) ) {
			foreach ( $by_day[ $key ] as $ev ) {
				echo '<a class="br-cal-chip" href="' . esc_url( get_permalink( $ev ) ) . '"><span>' . esc_html( black_rose_fmt_time( get_post_meta( $ev->ID, 'br_start', true ) ) ) . '</span> ' . esc_html( get_the_title( $ev ) ) . '</a>';
			}
		}
		echo '</div>';
	}
	$trail = ( 7 - ( ( $lead + $days ) % 7 ) ) % 7;
	for ( $i = 0; $i < $trail; $i++ ) {
		echo '<div class="br-cal-day is-empty" aria-hidden="true"></div>';
	}
	echo '</div>';

	echo '<div class="br-cal-list"><h4>This month at Black Rose</h4>';
	if ( $events ) {
		foreach ( $events as $ev ) {
			echo black_rose_event_row( $ev ); // phpcs:ignore WordPress.Security.EscapeOutput -- escaped inside.
		}
	} else {
		echo '<p class="br-cal-empty">Nothing on the books yet this month. Follow <a href="https://www.instagram.com/blackrosewestallis/" target="_blank" rel="noopener">@blackrosewestallis</a> for announcements.</p>';
	}
	echo '</div></div>';
	return ob_get_clean();
}
add_shortcode( 'br_calendar', 'black_rose_calendar_shortcode' );

function black_rose_event_row( $ev ) {
	$date = get_post_meta( $ev->ID, 'br_date', true );
	$ts   = strtotime( $date );
	$tag  = get_post_meta( $ev->ID, 'br_tag', true );
	$out  = '<a class="br-event-row" href="' . esc_url( get_permalink( $ev ) ) . '">';
	$out .= '<span class="br-event-date"><span class="m">' . esc_html( $ts ? date_i18n( 'M', $ts ) : '' ) . '</span><span class="d">' . esc_html( $ts ? date_i18n( 'j', $ts ) : '' ) . '</span></span>';
	$out .= '<span class="br-event-body">';
	if ( $tag ) {
		$out .= '<span class="br-event-tag">' . esc_html( $tag ) . '</span>';
	}
	$out .= '<span class="br-event-title">' . esc_html( get_the_title( $ev ) ) . '</span>';
	$out .= '<span class="br-event-meta">' . esc_html( trim( ( $ts ? date_i18n( 'l', $ts ) : '' ) . ' · ' . black_rose_time_range( $ev->ID ), ' ·' ) ) . '</span>';
	if ( has_excerpt( $ev ) ) {
		$out .= '<span class="br-event-excerpt">' . esc_html( get_the_excerpt( $ev ) ) . '</span>';
	}
	$out .= '</span><span class="br-event-arrow" aria-hidden="true">&rarr;</span></a>';
	return $out;
}

/* [br_upcoming count="3"] — the next events from today forward. */
function black_rose_upcoming_shortcode( $atts ) {
	$atts   = shortcode_atts( array( 'count' => 3 ), $atts );
	$today  = wp_date( 'Y-m-d' );
	$events = black_rose_get_events( $today, '2100-12-31', (int) $atts['count'] );
	if ( ! $events ) {
		return '<p class="br-cal-empty">Events are coming soon. Watch <a href="https://www.instagram.com/blackrosewestallis/" target="_blank" rel="noopener">@blackrosewestallis</a>.</p>';
	}
	$out = '<div class="br-upcoming">';
	foreach ( $events as $ev ) {
		$out .= black_rose_event_row( $ev );
	}
	return $out . '</div>';
}
add_shortcode( 'br_upcoming', 'black_rose_upcoming_shortcode' );

/* [br_event_details] — used on the single event template. */
function black_rose_event_details_shortcode() {
	$id = get_the_ID();
	if ( ! $id || 'br_event' !== get_post_type( $id ) ) {
		return '';
	}
	$out  = '<div class="br-event-details">';
	$tag  = get_post_meta( $id, 'br_tag', true );
	if ( $tag ) {
		$out .= '<span class="br-event-tag">' . esc_html( $tag ) . '</span>';
	}
	$out .= '<p class="br-event-when">' . esc_html( black_rose_fmt_date( get_post_meta( $id, 'br_date', true ) ) ) . '</p>';
	$tr   = black_rose_time_range( $id );
	if ( $tr ) {
		$out .= '<p class="br-event-time">' . esc_html( $tr ) . '</p>';
	}
	$out .= '<p class="br-event-where">Black Rose · 6601 W. National Ave., West Allis</p>';
	$link = get_post_meta( $id, 'br_link', true );
	if ( $link ) {
		$out .= '<div class="wp-block-buttons"><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $link ) . '" target="_blank" rel="noopener">Tickets / RSVP</a></div></div>';
	}
	return $out . '</div>';
}
add_shortcode( 'br_event_details', 'black_rose_event_details_shortcode' );

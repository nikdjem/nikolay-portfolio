<?php
/**
 * Theme setup.
 *
 * @package Nikolay_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue the theme stylesheet on the frontend.
 *
 * Block themes do not load style.css automatically.
 *
 * @return void
 */
function nikolay_portfolio_enqueue_styles() {
	$stylesheet_path = get_stylesheet_directory() . '/style.css';

	wp_enqueue_style(
		'nikolay-portfolio-style',
		get_stylesheet_uri(),
		array(),
		filemtime( $stylesheet_path )
	);
}
add_action( 'wp_enqueue_scripts', 'nikolay_portfolio_enqueue_styles' );

/**
 * Make newly added pattern files visible to long-lived PHP-FPM workers.
 *
 * WordPress registers theme patterns on init from a Version-keyed file list.
 * PHP-FPM can cache negative realpath/stat lookups, so a new patterns/*.php
 * file is visible to WP-CLI (fresh process) but skipped on HTTP until the
 * worker recycles. Clear that cache before `_register_theme_block_patterns`.
 *
 * @return void
 */
function nikolay_portfolio_clear_pattern_stat_cache() {
	clearstatcache( true );
}
add_action( 'init', 'nikolay_portfolio_clear_pattern_stat_cache', 0 );

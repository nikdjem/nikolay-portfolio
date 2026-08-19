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

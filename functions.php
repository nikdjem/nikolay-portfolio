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
 * Render the public header brand in the core site-title block.
 *
 * @param string $block_content Rendered site title block HTML.
 * @return string
 */
function nikolay_portfolio_site_title_brand( $block_content ) {
	if ( is_admin() ) {
		return $block_content;
	}

	return preg_replace(
		'/(<a[^>]*>)(.*?)(<\/a>)/s',
		'$1' . esc_html( 'NIKWEB.EU' ) . '$3',
		$block_content,
		1
	);
}
add_filter( 'render_block_core/site-title', 'nikolay_portfolio_site_title_brand' );

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

/**
 * Register the public Contact REST route.
 *
 * @return void
 */
function nikolay_portfolio_register_contact_route() {
	register_rest_route(
		'nikolay-portfolio/v1',
		'/contact',
		array(
			'methods'             => 'POST',
			'callback'            => 'nikolay_portfolio_handle_contact',
			'permission_callback' => '__return_true',
		)
	);
}
add_action( 'rest_api_init', 'nikolay_portfolio_register_contact_route' );

/**
 * Enqueue a contact-only submit helper on the homepage.
 *
 * REST returns JSON. Without intercepting submit, the browser would navigate
 * to a JSON document. Layout and styling do not depend on this script.
 *
 * @return void
 */
function nikolay_portfolio_enqueue_contact_script() {
	if ( ! is_front_page() ) {
		return;
	}

	wp_register_script( 'nikolay-portfolio-contact', false, array(), false, true );
	wp_enqueue_script( 'nikolay-portfolio-contact' );
	wp_add_inline_script(
		'nikolay-portfolio-contact',
		'(function(){var form=document.querySelector(".np-contact-form");if(!form){return;}var status=form.querySelector(".np-contact-status");form.addEventListener("submit",function(event){event.preventDefault();if(!status){return;}status.textContent="";var body=new FormData(form);fetch(form.action,{method:"POST",body:body,credentials:"same-origin"}).then(function(response){return response.json().then(function(data){return {ok:response.ok,data:data};});}).then(function(result){status.textContent=(result.data&&result.data.message)?result.data.message:(result.ok?"Transmission received.":"Transmission failed.");if(result.ok){form.reset();}}).catch(function(){status.textContent="Transmission failed.";});});})();'
	);
}
add_action( 'wp_enqueue_scripts', 'nikolay_portfolio_enqueue_contact_script' );

/**
 * Handle Contact form submissions.
 *
 * @param WP_REST_Request $request Request.
 * @return WP_REST_Response|WP_Error
 */
function nikolay_portfolio_handle_contact( WP_REST_Request $request ) {
	$nonce = $request->get_param( '_wpnonce' );
	if ( ! is_string( $nonce ) || ! wp_verify_nonce( $nonce, 'np_contact' ) ) {
		return new WP_Error(
			'np_contact_forbidden',
			__( 'Transmission rejected.', 'nikolay-portfolio' ),
			array( 'status' => 403 )
		);
	}

	$honeypot = $request->get_param( 'np_hp' );
	if ( is_string( $honeypot ) && '' !== trim( $honeypot ) ) {
		return rest_ensure_response(
			array(
				'message' => __( 'Transmission received.', 'nikolay-portfolio' ),
			)
		);
	}

	$ip      = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : 'unknown';
	$rate_id = 'np_contact_' . md5( $ip );
	$hits    = (int) get_transient( $rate_id );
	if ( $hits >= 5 ) {
		return new WP_Error(
			'np_contact_rate',
			__( 'Transmission throttled. Try again later.', 'nikolay-portfolio' ),
			array( 'status' => 429 )
		);
	}

	$name    = sanitize_text_field( (string) $request->get_param( 'name' ) );
	$email   = sanitize_email( (string) $request->get_param( 'email' ) );
	$message = sanitize_textarea_field( (string) $request->get_param( 'message' ) );

	if ( '' === $name || '' === $email || '' === $message ) {
		return new WP_Error(
			'np_contact_invalid',
			__( 'All fields are required.', 'nikolay-portfolio' ),
			array( 'status' => 400 )
		);
	}

	if ( ! is_email( $email ) ) {
		return new WP_Error(
			'np_contact_email',
			__( 'Access channel is invalid.', 'nikolay-portfolio' ),
			array( 'status' => 400 )
		);
	}

	set_transient( $rate_id, $hits + 1, 10 * MINUTE_IN_SECONDS );

	$to      = get_option( 'admin_email' );
	$subject = sprintf(
		/* translators: %s: sender name */
		__( 'New Portfolio Contact: %s', 'nikolay-portfolio' ),
		$name
	);
	$body    = sprintf(
		"Name: %s\nEmail: %s\n\nMessage:\n%s\n",
		$name,
		$email,
		$message
	);
	$safe_name = trim( str_replace( array( "\r", "\n" ), '', $name ) );
	$headers   = array(
		'Content-Type: text/plain; charset=UTF-8',
		sprintf( 'Reply-To: %s <%s>', $safe_name, $email ),
	);

	$sent = wp_mail( $to, $subject, $body, $headers );
	if ( ! $sent ) {
		return new WP_Error(
			'np_contact_mail',
			__( 'Transmission failed.', 'nikolay-portfolio' ),
			array( 'status' => 500 )
		);
	}

	return rest_ensure_response(
		array(
			'message' => __( 'Transmission received.', 'nikolay-portfolio' ),
		)
	);
}

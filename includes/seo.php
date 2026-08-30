<?php
/**
 * Native theme SEO: titles, meta descriptions, canonical, social tags, JSON-LD,
 * project image alt fallback, and sitemap/robots policy.
 *
 * @package Nikolay_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Whether the theme SEO layer should output metadata.
 *
 * Defers to supported SEO plugins when active.
 *
 * @return bool
 */
function nikolay_portfolio_seo_enabled() {
	if ( defined( 'WPSEO_VERSION' ) ) {
		return false;
	}

	if ( defined( 'RANK_MATH_VERSION' ) ) {
		return false;
	}

	if ( defined( 'AIOSEO_VERSION' ) ) {
		return false;
	}

	return true;
}

/**
 * Whether head metadata should render on the current frontend request.
 *
 * @return bool
 */
function nikolay_portfolio_seo_should_output_head_tags() {
	if ( ! nikolay_portfolio_seo_enabled() ) {
		return false;
	}

	if ( is_admin() || is_feed() || is_404() ) {
		return false;
	}

	if ( function_exists( 'is_login' ) && is_login() ) {
		return false;
	}

	return is_front_page() || is_singular( 'project' );
}

/**
 * Approved static homepage meta description.
 *
 * @return string
 */
function nikolay_portfolio_seo_get_homepage_description() {
	return 'Nikolay is a WordPress and PHP developer building plugins, Gutenberg/FSE themes, WooCommerce solutions, and exploring AI automation workflows.';
}

/**
 * Trim plain text to a natural boundary for SERP descriptions.
 *
 * Prefers sentence, clause, then word boundaries. Normalizes dash punctuation
 * only for boundary detection; stored excerpt and visible content are untouched.
 *
 * @param string $text    Plain text.
 * @param int    $max_len Maximum character length.
 * @return string
 */
function nikolay_portfolio_seo_trim_description( $text, $max_len = 155 ) {
	$text = trim( preg_replace( '/\s+/u', ' ', $text ) );

	if ( '' === $text || mb_strlen( $text ) <= $max_len ) {
		return $text;
	}

	$min_len   = (int) max( 60, floor( $max_len * 0.45 ) );
	$window    = mb_substr( $text, 0, $max_len );
	$cut_at    = 0;

	// Prefer a complete sentence ending within the limit.
	for ( $i = mb_strlen( $window ) - 1; $i >= 0; $i-- ) {
		$char = mb_substr( $window, $i, 1 );

		if ( ! in_array( $char, array( '.', '!', '?' ), true ) ) {
			continue;
		}

		$next = ( $i + 1 < mb_strlen( $window ) ) ? mb_substr( $window, $i + 1, 1 ) : '';
		if ( '' !== $next && ' ' !== $next ) {
			continue;
		}

		$candidate = $i + 1;
		if ( $candidate >= $min_len ) {
			$cut_at = $candidate;
			break;
		}
	}

	// Otherwise prefer a clause or list boundary (dashes, semicolon).
	if ( 0 === $cut_at ) {
		$boundary_text = str_replace( array( '—', '–' ), '|', $window );
		$separators    = array( '|', ';' );

		foreach ( $separators as $separator ) {
			$pos = mb_strrpos( $boundary_text, $separator );
			if ( false === $pos || $pos < $min_len ) {
				continue;
			}

			$cut_at = max( $cut_at, $pos );
		}
	}

	// Fall back to the last word boundary.
	if ( 0 === $cut_at ) {
		$last_space = mb_strrpos( $window, ' ' );
		if ( false !== $last_space && $last_space > 0 ) {
			$cut_at = $last_space;
		} else {
			$cut_at = mb_strlen( $window );
		}
	}

	$result = rtrim( mb_substr( $text, 0, $cut_at ) );
	$result = rtrim( $result, " \t\n\r\0\x0B,;—–-" );

	if ( '' === $result ) {
		return mb_substr( $text, 0, $max_len ) . '…';
	}

	if ( mb_strlen( $text ) > mb_strlen( $result ) && ! preg_match( '/[.!?]$/u', $result ) ) {
		$result .= '…';
	}

	return $result;
}

/**
 * Get the SEO description for the current supported context.
 *
 * @return string Empty string when unavailable.
 */
function nikolay_portfolio_seo_get_description() {
	if ( is_front_page() ) {
		return nikolay_portfolio_seo_get_homepage_description();
	}

	if ( is_singular( 'project' ) ) {
		$excerpt = get_the_excerpt();
		$excerpt = wp_strip_all_tags( $excerpt );

		return nikolay_portfolio_seo_trim_description( $excerpt );
	}

	return '';
}

/**
 * Build the document title string for SEO-supported contexts.
 *
 * @return string
 */
function nikolay_portfolio_seo_get_document_title() {
	if ( is_front_page() ) {
		return 'Nikolay — WordPress / PHP Developer | NIKWEB.EU';
	}

	if ( is_singular( 'project' ) ) {
		return get_the_title() . ' | Nikolay — WordPress Developer';
	}

	return wp_get_document_title();
}

/**
 * Filter document title parts for homepage and project pages.
 *
 * @param array<string, string> $title Title parts.
 * @return array<string, string>
 */
function nikolay_portfolio_seo_document_title_parts( $title ) {
	if ( ! nikolay_portfolio_seo_enabled() ) {
		return $title;
	}

	if ( is_front_page() ) {
		$title['title'] = 'Nikolay — WordPress / PHP Developer | NIKWEB.EU';
		unset( $title['site'], $title['tagline'] );

		return $title;
	}

	if ( is_singular( 'project' ) ) {
		$title['title'] = get_the_title();
		$title['site']  = 'Nikolay — WordPress Developer';
		unset( $title['tagline'] );

		return $title;
	}

	return $title;
}
add_filter( 'document_title_parts', 'nikolay_portfolio_seo_document_title_parts' );

/**
 * Use pipe separators on SEO-managed title contexts.
 *
 * @param string $separator Current separator.
 * @return string
 */
function nikolay_portfolio_seo_document_title_separator( $separator ) {
	if ( ! nikolay_portfolio_seo_enabled() ) {
		return $separator;
	}

	if ( is_front_page() || is_singular( 'project' ) ) {
		return '|';
	}

	return $separator;
}
add_filter( 'document_title_separator', 'nikolay_portfolio_seo_document_title_separator' );

/**
 * Get the canonical URL for SEO-managed contexts.
 *
 * @return string Empty when core should handle canonical output.
 */
function nikolay_portfolio_seo_get_canonical_url() {
	if ( is_singular() ) {
		return '';
	}

	if ( is_front_page() ) {
		return user_trailingslashit( home_url( '/' ) );
	}

	return '';
}

/**
 * Get the Open Graph / Twitter image URL for the current context.
 *
 * @return string
 */
function nikolay_portfolio_seo_get_image_url() {
	if ( is_front_page() ) {
		return (string) get_theme_file_uri( 'assets/images/about.jpg' );
	}

	if ( is_singular( 'project' ) ) {
		$thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'project-hero' );

		return is_string( $thumbnail ) ? $thumbnail : '';
	}

	return '';
}

/**
 * Get the Open Graph type for the current context.
 *
 * @return string
 */
function nikolay_portfolio_seo_get_og_type() {
	if ( is_singular( 'project' ) ) {
		return 'article';
	}

	return 'website';
}

/**
 * Get the page URL for SEO metadata.
 *
 * @return string
 */
function nikolay_portfolio_seo_get_page_url() {
	if ( is_singular( 'project' ) ) {
		return (string) get_permalink();
	}

	return user_trailingslashit( home_url( '/' ) );
}

/**
 * Build JSON-LD graph data for the current SEO context.
 *
 * @return array<int, array<string, mixed>>
 */
function nikolay_portfolio_seo_get_schema_graph() {
	$home       = user_trailingslashit( home_url( '/' ) );
	$person_id  = $home . '#person';
	$website_id = $home . '#website';
	$graph      = array(
		array(
			'@type'       => 'Person',
			'@id'         => $person_id,
			'name'        => 'Nikolay',
			'jobTitle'    => 'WordPress / PHP Developer',
			'url'         => $home,
			'sameAs'      => array(
				'https://github.com/nikdjem',
				'https://www.linkedin.com/in/nikolaidjemerenovv/',
			),
		),
	);

	if ( is_front_page() ) {
		$graph[] = array(
			'@type'     => 'WebSite',
			'@id'       => $website_id,
			'url'       => $home,
			'name'      => 'NIKWEB.EU',
			'publisher' => array(
				'@id' => $person_id,
			),
		);
		$graph[] = array(
			'@type'           => 'WebPage',
			'@id'             => $home . '#webpage',
			'url'             => $home,
			'name'            => nikolay_portfolio_seo_get_document_title(),
			'description'     => nikolay_portfolio_seo_get_description(),
			'isPartOf'        => array(
				'@id' => $website_id,
			),
		);

		return $graph;
	}

	if ( is_singular( 'project' ) ) {
		$page_url = (string) get_permalink();
		$creative = array(
			'@type'             => 'CreativeWork',
			'@id'               => $page_url . '#project',
			'name'              => get_the_title(),
			'url'               => $page_url,
			'description'       => nikolay_portfolio_seo_get_description(),
			'author'            => array(
				'@id' => $person_id,
			),
			'mainEntityOfPage'  => array(
				'@id' => $page_url . '#webpage',
			),
			'datePublished'     => get_the_date( 'c' ),
			'dateModified'      => get_the_modified_date( 'c' ),
		);

		$image_url = nikolay_portfolio_seo_get_image_url();
		if ( '' !== $image_url ) {
			$creative['image'] = $image_url;
		}

		$graph[] = array(
			'@type'     => 'WebSite',
			'@id'       => $website_id,
			'url'       => $home,
			'name'      => 'NIKWEB.EU',
			'publisher' => array(
				'@id' => $person_id,
			),
		);
		$graph[] = array(
			'@type'       => 'WebPage',
			'@id'         => $page_url . '#webpage',
			'url'         => $page_url,
			'name'        => nikolay_portfolio_seo_get_document_title(),
			'description' => nikolay_portfolio_seo_get_description(),
			'isPartOf'    => array(
				'@id' => $website_id,
			),
		);
		$graph[] = $creative;

		return $graph;
	}

	return array();
}

/**
 * Output homepage canonical, meta description, social tags, and JSON-LD.
 *
 * @return void
 */
function nikolay_portfolio_seo_render_head_tags() {
	if ( ! nikolay_portfolio_seo_should_output_head_tags() ) {
		return;
	}

	$description = nikolay_portfolio_seo_get_description();
	$title       = nikolay_portfolio_seo_get_document_title();
	$page_url    = nikolay_portfolio_seo_get_page_url();
	$image_url   = nikolay_portfolio_seo_get_image_url();
	$og_type     = nikolay_portfolio_seo_get_og_type();
	$canonical   = nikolay_portfolio_seo_get_canonical_url();

	if ( '' !== $canonical ) {
		echo '<link rel="canonical" href="' . esc_url( $canonical ) . '" />' . "\n";
	}

	if ( '' !== $description ) {
		echo '<meta name="description" content="' . esc_attr( $description ) . '" />' . "\n";
	}

	echo '<meta property="og:title" content="' . esc_attr( $title ) . '" />' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $description ) . '" />' . "\n";
	echo '<meta property="og:type" content="' . esc_attr( $og_type ) . '" />' . "\n";
	echo '<meta property="og:url" content="' . esc_url( $page_url ) . '" />' . "\n";
	echo '<meta property="og:site_name" content="NIKWEB.EU" />' . "\n";

	if ( '' !== $image_url ) {
		echo '<meta property="og:image" content="' . esc_url( $image_url ) . '" />' . "\n";
	}

	echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
	echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '" />' . "\n";
	echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '" />' . "\n";

	if ( '' !== $image_url ) {
		echo '<meta name="twitter:image" content="' . esc_url( $image_url ) . '" />' . "\n";
	}

	$graph = nikolay_portfolio_seo_get_schema_graph();
	if ( ! empty( $graph ) ) {
		$schema = array(
			'@context' => 'https://schema.org',
			'@graph'   => $graph,
		);

		echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
	}
}
add_action( 'wp_head', 'nikolay_portfolio_seo_render_head_tags', 1 );

/**
 * Resolve the project post associated with an attachment render context.
 *
 * @param int $attachment_id Attachment ID.
 * @return WP_Post|null
 */
function nikolay_portfolio_seo_get_project_for_attachment( $attachment_id ) {
	$post = get_post();

	if ( $post instanceof WP_Post && 'project' === $post->post_type ) {
		return $post;
	}

	if ( is_singular( 'project' ) ) {
		$queried = get_queried_object();

		if ( $queried instanceof WP_Post ) {
			return $queried;
		}
	}

	$attachment = get_post( $attachment_id );
	if ( $attachment instanceof WP_Post && $attachment->post_parent ) {
		$parent = get_post( (int) $attachment->post_parent );

		if ( $parent instanceof WP_Post && 'project' === $parent->post_type ) {
			return $parent;
		}
	}

	return null;
}

/**
 * Provide runtime alt text for project featured images when Media Library alt is empty.
 *
 * @param array<string, string> $attr       Image attributes.
 * @param WP_Post               $attachment Attachment post object.
 * @param string|int[]          $size       Requested size.
 * @return array<string, string>
 */
function nikolay_portfolio_seo_attachment_image_attributes( $attr, $attachment, $size ) {
	unset( $size );

	if ( ! empty( $attr['alt'] ) ) {
		return $attr;
	}

	if ( ! $attachment instanceof WP_Post ) {
		return $attr;
	}

	$project = nikolay_portfolio_seo_get_project_for_attachment( (int) $attachment->ID );
	if ( ! $project instanceof WP_Post ) {
		return $attr;
	}

	$attr['alt'] = sprintf(
		/* translators: %s: project title */
		__( '%s — portfolio project preview', 'nikolay-portfolio' ),
		get_the_title( $project )
	);

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'nikolay_portfolio_seo_attachment_image_attributes', 10, 3 );

/**
 * Exclude thin taxonomy archives from the core sitemap.
 *
 * @param array<string, WP_Taxonomy> $taxonomies Registered taxonomies.
 * @return array<string, WP_Taxonomy>
 */
function nikolay_portfolio_seo_filter_sitemap_taxonomies( $taxonomies ) {
	unset( $taxonomies['project_category'], $taxonomies['category'] );

	return $taxonomies;
}
add_filter( 'wp_sitemaps_taxonomies', 'nikolay_portfolio_seo_filter_sitemap_taxonomies' );

/**
 * Exclude the users sitemap provider.
 *
 * @param WP_Sitemaps_Provider|false $provider Provider instance.
 * @param string                     $name     Provider name.
 * @return WP_Sitemaps_Provider|false
 */
function nikolay_portfolio_seo_filter_sitemap_provider( $provider, $name ) {
	if ( 'users' === $name ) {
		return false;
	}

	return $provider;
}
add_filter( 'wp_sitemaps_add_provider', 'nikolay_portfolio_seo_filter_sitemap_provider', 10, 2 );

/**
 * Noindex thin taxonomy and author archives.
 *
 * @param array<string, bool|string> $robots Robots directives.
 * @return array<string, bool|string>
 */
function nikolay_portfolio_seo_filter_robots( $robots ) {
	if ( is_tax( 'project_category' ) || is_category() || is_author() ) {
		$robots['noindex'] = true;
	}

	return $robots;
}
add_filter( 'wp_robots', 'nikolay_portfolio_seo_filter_robots' );

/**
 * Preload the homepage hero image for LCP discovery.
 *
 * @return void
 */
function nikolay_portfolio_seo_preload_hero_image() {
	if ( ! is_front_page() || is_admin() ) {
		return;
	}

	$hero_url = get_theme_file_uri( 'assets/images/hero.jpg' );
	if ( ! is_string( $hero_url ) || '' === $hero_url ) {
		return;
	}

	echo '<link rel="preload" as="image" href="' . esc_url( $hero_url ) . '" fetchpriority="high" />' . "\n";
}
add_action( 'wp_head', 'nikolay_portfolio_seo_preload_hero_image', 0 );

/**
 * Prioritize the homepage hero cover background image.
 *
 * @param string $block_content Rendered block HTML.
 * @param array  $block         Block data.
 * @return string
 */
function nikolay_portfolio_seo_hero_cover_fetchpriority( $block_content, $block ) {
	if ( ! is_array( $block ) || ( $block['blockName'] ?? '' ) !== 'core/cover' ) {
		return $block_content;
	}

	$class_name = $block['attrs']['className'] ?? '';
	if ( ! is_string( $class_name ) || false === strpos( $class_name, 'np-hero' ) ) {
		return $block_content;
	}

	if ( false !== strpos( $block_content, 'fetchpriority=' ) ) {
		return $block_content;
	}

	return preg_replace(
		'/(<img[^>]*class="wp-block-cover__image-background"[^>]*?)(\s*\/?>)/',
		'$1 fetchpriority="high"$2',
		$block_content,
		1
	);
}
add_filter( 'render_block', 'nikolay_portfolio_seo_hero_cover_fetchpriority', 10, 2 );

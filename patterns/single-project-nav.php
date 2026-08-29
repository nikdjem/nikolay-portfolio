<?php
/**
 * Title: Single Project Nav
 * Slug: nikolay-portfolio/single-project-nav
 * Categories: portfolio, nikolay-portfolio/sections
 * Description: Reusable project navigation for single project case-study pages.
 * Viewport Width: 1280
 *
 * @package Nikolay_Portfolio
 */

/**
 * Get the adjacent published project by menu_order.
 *
 * @param int    $post_id   Current project post ID.
 * @param string $direction Previous or next adjacency.
 * @return WP_Post|null
 */
if ( ! function_exists( 'np_single_project_get_adjacent' ) ) {
	function np_single_project_get_adjacent( $post_id, $direction ) {
	$post_id = (int) $post_id;

	if ( $post_id <= 0 || 'project' !== get_post_type( $post_id ) ) {
		return null;
	}

	$project_ids = get_posts(
		array(
			'post_type'              => 'project',
			'post_status'            => 'publish',
			'posts_per_page'         => -1,
			'orderby'                => 'menu_order',
			'order'                  => 'ASC',
			'fields'                 => 'ids',
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
		)
	);

	$project_ids = array_map( 'intval', $project_ids );
	$index       = array_search( $post_id, $project_ids, true );

	if ( false === $index ) {
		return null;
	}

	$target_index = 'previous' === $direction ? $index - 1 : $index + 1;

	if ( ! isset( $project_ids[ $target_index ] ) ) {
		return null;
	}

	$adjacent = get_post( $project_ids[ $target_index ] );

	return ( $adjacent instanceof WP_Post ) ? $adjacent : null;
	}
}

$np_post_id       = get_the_ID();
$np_prev_project  = np_single_project_get_adjacent( $np_post_id, 'previous' );
$np_next_project  = np_single_project_get_adjacent( $np_post_id, 'next' );
$np_back_work_url = home_url( '/#work' );
?>
<!-- wp:group {"tagName":"nav","metadata":{"name":"Project Navigation"},"className":"np-single-project-nav","ariaLabel":"Project navigation","style":{"border":{"radius":"0px","top":{"color":"var:preset|color|outline-variant","width":"1px"}},"spacing":{"blockGap":"var:preset|spacing|24","padding":{"top":"var:preset|spacing|48","bottom":"0"},"margin":{"top":"var:preset|spacing|64","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1152px"}} -->
<nav aria-label="Project navigation" class="wp-block-group np-single-project-nav" style="border-radius:0px;border-top-color:var(--wp--preset--color--outline-variant);border-top-width:1px;margin-top:var(--wp--preset--spacing--64);margin-bottom:0;padding-top:var(--wp--preset--spacing--48)">
	<!-- wp:group {"className":"np-single-project-nav__inner","style":{"spacing":{"blockGap":"var:preset|spacing|24","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group np-single-project-nav__inner" style="margin-top:0;margin-bottom:0">
		<div class="np-single-project-nav__previous">
			<?php if ( $np_prev_project instanceof WP_Post ) : ?>
				<a class="np-single-project-nav__link" href="<?php echo esc_url( get_permalink( $np_prev_project ) ); ?>"><span class="np-single-project-nav__label">Previous Project</span><span class="np-single-project-nav__title"><?php echo esc_html( get_the_title( $np_prev_project ) ); ?></span></a>
			<?php endif; ?>
		</div>

		<div class="np-single-project-nav__back">
			<a class="np-single-project-nav__link np-single-project-nav__link--back" href="<?php echo esc_url( $np_back_work_url ); ?>">Back to Work</a>
		</div>

		<div class="np-single-project-nav__next">
			<?php if ( $np_next_project instanceof WP_Post ) : ?>
				<a class="np-single-project-nav__link np-single-project-nav__link--next" href="<?php echo esc_url( get_permalink( $np_next_project ) ); ?>"><span class="np-single-project-nav__label">Next Project</span><span class="np-single-project-nav__title"><?php echo esc_html( get_the_title( $np_next_project ) ); ?></span></a>
			<?php endif; ?>
		</div>
	</div>
	<!-- /wp:group -->
</nav>
<!-- /wp:group -->

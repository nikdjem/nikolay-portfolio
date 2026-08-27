<?php
/**
 * Title: Single Project Links
 * Slug: nikolay-portfolio/single-project-links
 * Categories: portfolio, nikolay-portfolio/sections
 * Description: Reusable external links area for single project case-study pages.
 * Viewport Width: 1280
 *
 * @package Nikolay_Portfolio
 */

$np_post_id    = get_the_ID();
$np_show_github = $np_post_id && function_exists( 'np_projects_should_render_github_link' ) && np_projects_should_render_github_link( $np_post_id );
$np_show_live   = $np_post_id && function_exists( 'np_projects_should_render_live_link' ) && np_projects_should_render_live_link( $np_post_id );

if ( ! $np_show_github && ! $np_show_live ) {
	return;
}

$np_github_url = $np_show_github ? get_post_meta( $np_post_id, '_np_project_github_url', true ) : '';
$np_live_url   = $np_show_live ? get_post_meta( $np_post_id, '_np_project_live_url', true ) : '';
?>
<!-- wp:group {"className":"np-single-project-links","style":{"border":{"radius":"0px"},"spacing":{"blockGap":"var:preset|spacing|24","margin":{"top":"var:preset|spacing|64","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1152px"}} -->
<div class="wp-block-group np-single-project-links" style="border-radius:0px;margin-top:var(--wp--preset--spacing--64);margin-bottom:0">
	<!-- wp:paragraph {"textColor":"primary","fontSize":"eyebrow","style":{"typography":{"fontWeight":"700","letterSpacing":"0.4em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<p class="has-primary-color has-text-color has-eyebrow-font-size" style="margin-top:0;margin-bottom:0;font-weight:700;letter-spacing:0.4em;text-transform:uppercase">Project Links</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"className":"np-single-project-links__buttons","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|16","margin":{"top":"0","bottom":"0"}}}} -->
	<div class="wp-block-buttons np-single-project-links__buttons" style="margin-top:0;margin-bottom:0">
		<?php if ( $np_show_github && is_string( $np_github_url ) && '' !== $np_github_url ) : ?>
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $np_github_url ); ?>" target="_blank" rel="noopener noreferrer">GitHub Repository</a></div>
		<!-- /wp:button -->
		<?php endif; ?>

		<?php if ( $np_show_live && is_string( $np_live_url ) && '' !== $np_live_url ) : ?>
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $np_live_url ); ?>" target="_blank" rel="noopener noreferrer">Live Project</a></div>
		<!-- /wp:button -->
		<?php endif; ?>
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

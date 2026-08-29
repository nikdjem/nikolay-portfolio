<?php
/**
 * Title: Single Project Hero
 * Slug: nikolay-portfolio/single-project-hero
 * Categories: portfolio, nikolay-portfolio/sections
 * Description: Reusable hero shell for single project case-study pages.
 * Viewport Width: 1280
 *
 * @package Nikolay_Portfolio
 */

$np_post_id      = get_the_ID();
$np_status_label = '';

if ( $np_post_id && function_exists( 'np_projects_get_status_label' ) ) {
	$np_status_value = get_post_meta( $np_post_id, '_np_project_status', true );
	$np_status_label = np_projects_get_status_label( is_string( $np_status_value ) ? $np_status_value : '' );
}
?>
<!-- wp:group {"className":"np-single-project-hero","style":{"border":{"radius":"0px"},"spacing":{"blockGap":"var:preset|spacing|24","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1152px"}} -->
<div class="wp-block-group np-single-project-hero" style="border-radius:0px;margin-top:0;margin-bottom:0">
	<!-- wp:post-featured-image {"aspectRatio":"2/1","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

	<!-- wp:group {"className":"np-single-project-hero__meta","style":{"spacing":{"blockGap":"var:preset|spacing|16","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group np-single-project-hero__meta" style="margin-top:0;margin-bottom:0">
		<!-- wp:post-terms {"term":"project_category","textColor":"primary","fontSize":"eyebrow","style":{"typography":{"fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

		<?php if ( '' !== $np_status_label ) : ?>
		<!-- wp:group {"className":"np-single-project__status-slot np-projects-chip","backgroundColor":"surface-container","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|16","right":"var:preset|spacing|16"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
		<div class="wp-block-group np-single-project__status-slot np-projects-chip has-surface-container-background-color has-background" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:8px;padding-right:var(--wp--preset--spacing--16);padding-bottom:8px;padding-left:var(--wp--preset--spacing--16)">
			<p class="has-on-surface-variant-color has-text-color has-small-font-size np-single-project__status-label" style="margin-top:0;margin-bottom:0;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html( $np_status_label ); ?></p>
		</div>
		<!-- /wp:group -->
		<?php endif; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:post-title {"level":1,"fontSize":"section","style":{"typography":{"fontWeight":"700","lineHeight":"1","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

	<!-- wp:post-excerpt {"textColor":"on-surface-variant","fontSize":"large","style":{"typography":{"lineHeight":"1.625"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
</div>
<!-- /wp:group -->

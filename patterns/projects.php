<?php
/**
 * Title: Projects
 * Slug: nikolay-portfolio/projects
 * Categories: portfolio, nikolay-portfolio/sections
 * Description: Homepage project archive with a Query Loop of project CPT cards.
 * Viewport Width: 1280
 *
 * @package Nikolay_Portfolio
 */
?>
<!-- wp:group {"tagName":"section","anchor":"work","align":"full","className":"np-projects","backgroundColor":"surface","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|96","bottom":"var:preset|spacing|96","left":"var:preset|spacing|32","right":"var:preset|spacing|32"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1152px"}} -->
<section class="wp-block-group alignfull np-projects has-surface-background-color has-background" id="work" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--96);padding-right:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--96);padding-left:var(--wp--preset--spacing--32)">
	<!-- wp:group {"className":"np-projects__header","style":{"spacing":{"blockGap":"var:preset|spacing|24","margin":{"bottom":"var:preset|spacing|64"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group np-projects__header" style="margin-bottom:var(--wp--preset--spacing--64)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"eyebrow","style":{"typography":{"fontWeight":"700","letterSpacing":"0.4em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|16","top":"0"}}}} -->
			<p class="has-primary-color has-text-color has-eyebrow-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--16);font-weight:700;letter-spacing:0.4em;text-transform:uppercase">Project Archive</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"fontSize":"section","style":{"typography":{"fontWeight":"700","lineHeight":"1","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<h2 class="wp-block-heading has-section-font-size" style="margin-top:0;margin-bottom:0;font-weight:700;line-height:1;text-transform:uppercase">Recent Neural Prototypes</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"np-projects-chip","backgroundColor":"surface-container","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"var:preset|spacing|16","right":"var:preset|spacing|16"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
		<div class="wp-block-group np-projects-chip has-surface-container-background-color has-background" style="border-radius:0px;padding-top:8px;padding-right:var(--wp--preset--spacing--16);padding-bottom:8px;padding-left:var(--wp--preset--spacing--16)">
			<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small","style":{"typography":{"fontWeight":"500","letterSpacing":"0.2em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-on-surface-variant-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;letter-spacing:0.2em;text-transform:uppercase">STATUS: [STABLE_BUILD_V2.0]</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":51,"query":{"perPage":6,"pages":0,"offset":0,"postType":"project","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"np-projects-query","layout":{"type":"default"}} -->
	<div class="wp-block-query np-projects-query">
		<!-- wp:post-template {"className":"np-projects-grid","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"np-project-card","backgroundColor":"surface-container","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group np-project-card has-surface-container-background-color has-background" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:post-featured-image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

				<!-- wp:group {"className":"np-project-card__overlay","gradient":"project-fade","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|32","left":"var:preset|spacing|32","right":"var:preset|spacing|32"},"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
				<div class="wp-block-group np-project-card__overlay has-project-fade-gradient-background has-background" style="border-radius:0px;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--32)">
					<!-- wp:post-terms {"term":"project_category","textColor":"secondary","fontSize":"eyebrow","style":{"typography":{"fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|8"}}}} /-->

					<!-- wp:post-title {"level":3,"isLink":false,"fontSize":"card","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

					<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":40,"textColor":"on-surface-variant","fontSize":"small","style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|16","bottom":"0"}}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</section>
<!-- /wp:group -->

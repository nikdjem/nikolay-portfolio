<?php
/**
 * Title: About
 * Slug: nikolay-portfolio/about
 * Categories: about, nikolay-portfolio/sections
 * Description: Two-column about section with biography copy and media.
 * Viewport Width: 1280
 *
 * @package Nikolay_Portfolio
 */

$np_about_image = esc_url( get_theme_file_uri( 'assets/images/about.jpg' ) );
$np_github_repo = esc_url( 'https://github.com/nikdjem' );
?>
<!-- wp:group {"tagName":"section","anchor":"about","align":"full","className":"np-about","backgroundColor":"surface-container-lowest","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|96","bottom":"var:preset|spacing|96","left":"var:preset|spacing|32","right":"var:preset|spacing|32"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1152px"}} -->
<section class="wp-block-group alignfull np-about has-surface-container-lowest-background-color has-background" id="about" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--96);padding-right:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--96);padding-left:var(--wp--preset--spacing--32)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|48","left":"var:preset|spacing|48"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"58.33%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58.33%">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"eyebrow","style":{"typography":{"fontWeight":"700","letterSpacing":"0.4em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|16","top":"0"}}}} -->
			<p class="has-primary-color has-text-color has-eyebrow-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--16);font-weight:700;letter-spacing:0.4em;text-transform:uppercase">Bio-Digital Overview</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"fontSize":"about","style":{"typography":{"fontWeight":"700","lineHeight":"1","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|32","top":"0"}}}} -->
			<h2 class="wp-block-heading has-about-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--32);font-weight:700;line-height:1;text-transform:uppercase">THE INTERSECTION OF CODE AND COGNITION.</h2>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|24"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"textColor":"on-surface-variant","style":{"typography":{"lineHeight":"1.625"}}} -->
				<p class="has-on-surface-variant-color has-text-color" style="line-height:1.625">Specializing in the convergence of legacy WordPress architecture and cutting-edge Artificial Intelligence. My methodology prioritizes algorithmic efficiency and user-centric data flows.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"on-surface-variant","style":{"typography":{"lineHeight":"1.625"}}} -->
				<p class="has-on-surface-variant-color has-text-color" style="line-height:1.625">With a decade of experience in the WordPress ecosystem, I now leverage LLMs and neural processing to automate content strategies, optimize performance metrics, and create dynamic interfaces that evolve with user behavior.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"},"style":{"spacing":{"blockGap":"16px"}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $np_github_repo; ?>" target="_blank" rel="noopener noreferrer">GitHub Repository</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"41.67%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:41.67%">
			<!-- wp:group {"className":"np-about-media","style":{"border":{"radius":"0px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group np-about-media" style="border-radius:0px">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-about-image","style":{"border":{"radius":"0px"}}} -->
				<figure class="wp-block-image size-full np-about-image" style="border-radius:0px"><img src="<?php echo $np_about_image; ?>" alt="Futuristic high-tech computer hardware components glowing with violet light and intricate circuitry details" style="border-radius:0px"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->

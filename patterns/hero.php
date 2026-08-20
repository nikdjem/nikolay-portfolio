<?php
/**
 * Title: Hero
 * Slug: nikolay-portfolio/hero
 * Categories: banner, nikolay-portfolio/sections
 * Description: Full-bleed editorial homepage hero with status chip, display heading, and two CTAs.
 * Viewport Width: 1280
 *
 * @package Nikolay_Portfolio
 */

$np_hero_image = esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) );
?>
<!-- wp:cover {"url":"<?php echo $np_hero_image; ?>","alt":"","dimRatio":0,"isUserOverlayColor":true,"contentPosition":"center center","isDark":true,"tagName":"section","align":"full","className":"np-hero","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|48","bottom":"var:preset|spacing|48","left":"var:preset|spacing|32","right":"var:preset|spacing|32"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1152px","justifyContent":"center"}} -->
<section class="wp-block-cover alignfull has-custom-content-position is-position-center-center np-hero" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--48);padding-right:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--48);padding-left:var(--wp--preset--spacing--32)">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo $np_hero_image; ?>" data-object-fit="cover" aria-hidden="true"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"className":"np-hero__content","layout":{"type":"constrained","justifyContent":"left","contentSize":"1152px"}} -->
		<div class="wp-block-group np-hero__content">
			<!-- wp:group {"className":"np-hero-chip","backgroundColor":"surface-container","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"},"blockGap":"8px","margin":{"bottom":"var:preset|spacing|32"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
			<div class="wp-block-group np-hero-chip has-surface-container-background-color has-background" style="border-radius:0px;margin-bottom:var(--wp--preset--spacing--32);padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px">
				<!-- wp:html -->
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="1.75" y="2.75" width="12.5" height="10.5"/><path d="M4.25 6.25L6.5 8l-2.25 1.75"/><path d="M7.75 10.25h3.5"/></svg>
				<!-- /wp:html -->

				<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"meta","style":{"typography":{"fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase"}}} -->
				<p class="has-on-surface-variant-color has-text-color has-meta-font-size" style="font-weight:700;letter-spacing:0.2em;text-transform:uppercase">System Protocol: Active</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"level":1,"className":"np-hero-heading","fontSize":"hero","style":{"typography":{"fontWeight":"700","letterSpacing":"-0.05em","lineHeight":"0.9","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|32"}}}} -->
			<h1 class="wp-block-heading np-hero-heading has-hero-font-size" style="margin-bottom:var(--wp--preset--spacing--32);font-weight:700;letter-spacing:-0.05em;line-height:0.9;text-transform:uppercase">ARCHITECTING<br><span class="np-hero-intelligent">INTELLIGENT</span><br><span class="np-hero-lockup">WORDPRESS ECOSYSTEMS</span></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"np-hero-body","textColor":"on-surface-variant","fontSize":"large","style":{"typography":{"fontWeight":"300","lineHeight":"1.625"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
			<p class="np-hero-body has-on-surface-variant-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-weight:300;line-height:1.625">Deploying high-performance neural integrations within the WordPress framework. We don't just build sites; we engineer sentient digital infrastructures.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"np-hero-ctas","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"},"style":{"spacing":{"blockGap":"16px"}}} -->
			<div class="wp-block-buttons np-hero-ctas">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact">Initialize Project</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#work">View Matrix</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</section>
<!-- /wp:cover -->

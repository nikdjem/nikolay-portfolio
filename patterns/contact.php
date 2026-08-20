<?php
/**
 * Title: Contact
 * Slug: nikolay-portfolio/contact
 * Categories: featured, nikolay-portfolio/sections
 * Description: Homepage contact form with name, email, message, and submit.
 * Viewport Width: 1280
 *
 * @package Nikolay_Portfolio
 */

$np_contact_action = esc_url( rest_url( 'nikolay-portfolio/v1/contact' ) );
$np_contact_nonce  = esc_attr( wp_create_nonce( 'np_contact' ) );
?>
<!-- wp:group {"tagName":"section","anchor":"contact","align":"full","className":"np-contact","backgroundColor":"surface-container-lowest","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|96","bottom":"var:preset|spacing|96","left":"var:preset|spacing|32","right":"var:preset|spacing|32"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"896px"}} -->
<section class="wp-block-group alignfull np-contact has-surface-container-lowest-background-color has-background" id="contact" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--96);padding-right:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--96);padding-left:var(--wp--preset--spacing--32)">
	<!-- wp:group {"className":"np-contact-inner","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"896px"}} -->
	<div class="wp-block-group np-contact-inner">
		<!-- wp:group {"className":"np-contact-header","style":{"spacing":{"blockGap":"0","margin":{"bottom":"var:preset|spacing|64"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group np-contact-header" style="margin-bottom:var(--wp--preset--spacing--64)">
			<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"eyebrow","style":{"typography":{"fontWeight":"700","letterSpacing":"0.4em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|16","top":"0"}}}} -->
			<p class="has-text-align-center has-primary-color has-text-color has-eyebrow-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--16);font-weight:700;letter-spacing:0.4em;text-transform:uppercase">Communication Uplink</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"section","style":{"typography":{"fontWeight":"700","lineHeight":"1","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<h2 class="wp-block-heading has-text-align-center has-section-font-size" style="margin-top:0;margin-bottom:0;font-weight:700;line-height:1;text-transform:uppercase">Initiate Connection</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<form class="np-contact-form" action="<?php echo $np_contact_action; ?>" method="post">
			<input type="hidden" name="_wpnonce" value="<?php echo $np_contact_nonce; ?>" />
			<div class="np-contact-honeypot" aria-hidden="true">
				<label for="np-contact-website">Website</label>
				<input id="np-contact-website" type="text" name="np_hp" tabindex="-1" autocomplete="off" />
			</div>
			<div class="np-contact-fields">
				<div class="np-contact-field">
					<label for="np-contact-name">Source Identity</label>
					<input id="np-contact-name" name="name" type="text" placeholder="NAME / ENTITY" autocomplete="name" required />
				</div>
				<div class="np-contact-field">
					<label for="np-contact-email">Access Channel</label>
					<input id="np-contact-email" name="email" type="email" placeholder="EMAIL@PROTOCOL.COM" autocomplete="email" required />
				</div>
			</div>
			<div class="np-contact-field">
				<label for="np-contact-message">Encrypted Message</label>
				<textarea id="np-contact-message" name="message" rows="6" placeholder="STATE YOUR PROJECT PARAMETERS..." autocomplete="off" required></textarea>
			</div>
			<button type="submit">Transmit Data Package</button>
			<div class="np-contact-status" role="status" aria-live="polite"></div>
		</form>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

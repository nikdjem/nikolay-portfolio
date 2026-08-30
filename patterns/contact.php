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
					<label for="np-contact-name">Source Identity <span class="np-contact-required" aria-hidden="true">*</span></label>
					<input id="np-contact-name" name="name" type="text" placeholder="NAME / ENTITY" autocomplete="name" required aria-required="true" aria-describedby="np-contact-name-error" />
					<span class="np-contact-field-error" id="np-contact-name-error"></span>
				</div>
				<div class="np-contact-field">
					<label for="np-contact-email">Access Channel <span class="np-contact-required" aria-hidden="true">*</span></label>
					<input id="np-contact-email" name="email" type="email" placeholder="EMAIL@PROTOCOL.COM" autocomplete="email" required aria-required="true" aria-describedby="np-contact-email-error" />
					<span class="np-contact-field-error" id="np-contact-email-error"></span>
				</div>
			</div>
			<div class="np-contact-field">
				<label for="np-contact-message">Encrypted Message <span class="np-contact-required" aria-hidden="true">*</span></label>
				<textarea id="np-contact-message" name="message" rows="6" placeholder="STATE YOUR PROJECT PARAMETERS..." autocomplete="off" required aria-required="true" aria-describedby="np-contact-message-error"></textarea>
				<span class="np-contact-field-error" id="np-contact-message-error"></span>
			</div>
			<button type="submit">Transmit Data Package</button>
			<div class="np-contact-status" role="status" aria-live="polite"></div>
		</form>
		<script>
		(function () {
			'use strict';

			var form = document.querySelector('.np-contact-form');
			if (!form) {
				return;
			}

			var status = form.querySelector('.np-contact-status');
			var fields = [
				form.querySelector('#np-contact-name'),
				form.querySelector('#np-contact-email'),
				form.querySelector('#np-contact-message'),
			];

			function getFieldError(field) {
				return document.getElementById(field.id + '-error');
			}

			function clearFieldError(field) {
				field.removeAttribute('aria-invalid');
				var error = getFieldError(field);
				if (error) {
					error.textContent = '';
				}
			}

			function clearAllFieldErrors() {
				fields.forEach(function (field) {
					if (field) {
						clearFieldError(field);
					}
				});
			}

			function setFieldError(field, message) {
				field.setAttribute('aria-invalid', 'true');
				var error = getFieldError(field);
				if (error) {
					error.textContent = message;
				}
			}

			function focusFirstInvalid() {
				for (var i = 0; i < fields.length; i++) {
					if (fields[i] && fields[i].getAttribute('aria-invalid') === 'true') {
						fields[i].focus();
						return;
					}
				}
			}

			fields.forEach(function (field) {
				if (!field) {
					return;
				}

				field.addEventListener('input', function () {
					clearFieldError(field);
				});
			});

			form.addEventListener(
				'invalid',
				function (event) {
					var field = event.target;
					if (!field || !field.id || field.id.indexOf('np-contact-') !== 0 || field.id === 'np-contact-website') {
						return;
					}

					setFieldError(field, field.validationMessage);
				},
				true
			);

			if (status && window.MutationObserver) {
				new MutationObserver(function () {
					var message = (status.textContent || '').trim();

					clearAllFieldErrors();

					if (!message || message === 'Transmission received.') {
						return;
					}

					if (message === 'All fields are required.') {
						if (fields[0] && !fields[0].value.trim()) {
							setFieldError(fields[0], message);
						}
						if (fields[1] && !fields[1].value.trim()) {
							setFieldError(fields[1], message);
						}
						if (fields[2] && !fields[2].value.trim()) {
							setFieldError(fields[2], message);
						}
					} else if (message === 'Access channel is invalid.') {
						if (fields[1]) {
							setFieldError(fields[1], message);
						}
					}

					focusFirstInvalid();
				}).observe(status, { childList: true, characterData: true, subtree: true });
			}
		})();
		</script>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

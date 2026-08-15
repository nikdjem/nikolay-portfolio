/**
 * Mobile navigation helpers for the site header.
 *
 * Core Navigation already handles overlay open/close, Escape, focus trap,
 * and aria-modal. This script only covers gaps in WordPress 7.0.4:
 * - aria-expanded is not bound on the overlay toggle
 * - hash links inside the open overlay do not close the menu
 * - a viewport resize to desktop should dismiss the overlay
 */
(function () {
	'use strict';

	function init() {
		const header = document.querySelector('.np-site-header');
		if (!header) {
			return;
		}

		const openBtn = header.querySelector('.wp-block-navigation__responsive-container-open');
		const overlay = header.querySelector('.wp-block-navigation__responsive-container');
		if (!openBtn || !overlay) {
			return;
		}

		const closeOverlay = function () {
			const closeBtn = overlay.querySelector('.wp-block-navigation__responsive-container-close');
			if (overlay.classList.contains('is-menu-open') && closeBtn) {
				closeBtn.click();
			}
		};

		const syncExpanded = function () {
			openBtn.setAttribute(
				'aria-expanded',
				overlay.classList.contains('is-menu-open') ? 'true' : 'false'
			);
		};

		openBtn.setAttribute('aria-expanded', 'false');
		new MutationObserver(syncExpanded).observe(overlay, {
			attributes: true,
			attributeFilter: ['class'],
		});

		header.addEventListener('click', function (event) {
			if (!overlay.classList.contains('is-menu-open')) {
				return;
			}
			const link = event.target.closest('a[href^="#"]');
			if (!link || !overlay.contains(link)) {
				return;
			}
			closeOverlay();
		});

		const desktopQuery = window.matchMedia('(min-width: 768px)');
		const onViewportChange = function () {
			if (desktopQuery.matches) {
				closeOverlay();
			}
		};
		if (typeof desktopQuery.addEventListener === 'function') {
			desktopQuery.addEventListener('change', onViewportChange);
		} else if (typeof desktopQuery.addListener === 'function') {
			desktopQuery.addListener(onViewportChange);
		}
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();

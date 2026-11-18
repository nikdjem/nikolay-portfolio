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

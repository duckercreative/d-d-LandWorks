/**
 * D&D Land Works theme — vanilla JS, no build step, no jQuery dependency.
 * Ports the small interactive bits from the Astro build's Header.astro,
 * Hero.astro, and BeforeAfterSlider.astro <script> blocks.
 */
(function () {
	'use strict';

	/* Mobile menu ---------------------------------------------------- */
	function initMobileMenu() {
		var toggle = document.getElementById('menu-toggle');
		var closeBtn = document.getElementById('menu-close');
		var menu = document.getElementById('mobile-menu');
		if (!toggle || !menu) return;

		function open() {
			menu.classList.add('is-open');
			toggle.setAttribute('aria-expanded', 'true');
			document.body.style.overflow = 'hidden';
		}
		function close() {
			menu.classList.remove('is-open');
			toggle.setAttribute('aria-expanded', 'false');
			document.body.style.overflow = '';
		}

		toggle.addEventListener('click', open);
		if (closeBtn) closeBtn.addEventListener('click', close);
		menu.querySelectorAll('a').forEach(function (a) {
			a.addEventListener('click', close);
		});
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape') close();
		});
	}

	/* Hero background slideshow -------------------------------------- */
	function initHeroSlideshow() {
		document.querySelectorAll('.hero__bg-slideshow').forEach(function (container) {
			var slides = Array.prototype.slice.call(container.querySelectorAll('.hero__bg-slide'));
			if (slides.length < 2) return;
			var current = 0;
			setInterval(function () {
				var next = (current + 1) % slides.length;
				slides[current].classList.remove('is-active');
				slides[next].classList.add('is-active');
				current = next;
			}, 4000);
		});
	}

	/* Before/after drag sliders ---------------------------------------- */
	function initBeforeAfter() {
		document.querySelectorAll('.before-after-input').forEach(function (input) {
			var wrapper = input.closest('[data-before-after]');
			if (!wrapper || wrapper.dataset.wired) return;
			wrapper.dataset.wired = 'true';
			function update() {
				wrapper.style.setProperty('--reveal', input.value + '%');
			}
			input.addEventListener('input', update);
			update();
		});
	}

	/* Contact form preview (no backend wired — see README.md) ---------- */
	function initContactForm() {
		var form = document.getElementById('ddlw-estimate-form');
		var status = document.getElementById('ddlw-form-status');
		if (!form) return;
		form.addEventListener('submit', function (e) {
			e.preventDefault();
			if (status) {
				status.textContent = "Thanks — wire this form to your mail handler of choice (WP mail, Formspree, etc.) before launch. Call " + (window.ddlwPhone || '541-401-8726') + " in the meantime.";
				status.classList.remove('hidden');
			}
		});
	}

	document.addEventListener('DOMContentLoaded', function () {
		initMobileMenu();
		initHeroSlideshow();
		initBeforeAfter();
		initContactForm();
	});
})();

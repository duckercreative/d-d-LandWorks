/**
 * DD Land Works v7 — main.js
 * Mobile menu toggle + accessibility
 */
(function () {
  'use strict';

  /* ── Mobile menu ────────────────────────────────────────── */
  var toggle   = document.getElementById('menu-toggle');
  var closeBtn = document.getElementById('menu-close');
  var menu     = document.getElementById('mobile-menu');
  var iconOpen = document.getElementById('icon-open');
  var iconClose = document.getElementById('icon-close');

  if (!toggle || !menu) return;

  function openMenu() {
    menu.classList.add('is-open');
    toggle.setAttribute('aria-expanded', 'true');
    if (iconOpen)  iconOpen.style.display  = 'none';
    if (iconClose) iconClose.style.display = '';
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    menu.classList.remove('is-open');
    toggle.setAttribute('aria-expanded', 'false');
    if (iconOpen)  iconOpen.style.display  = '';
    if (iconClose) iconClose.style.display = 'none';
    document.body.style.overflow = '';
  }

  toggle.addEventListener('click', openMenu);
  if (closeBtn) closeBtn.addEventListener('click', closeMenu);

  /* Close when any link inside menu is clicked */
  menu.querySelectorAll('a').forEach(function (a) {
    a.addEventListener('click', closeMenu);
  });

  /* Close on Escape */
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMenu();
  });

  /* ── Desktop dropdown accessibility ────────────────────── */
  /* Allow keyboard trigger via Enter/Space on summary buttons */
  document.querySelectorAll('.nav-dropdown__trigger').forEach(function (btn) {
    btn.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        var panel = btn.closest('.nav-dropdown').querySelector('.nav-dropdown__panel');
        if (!panel) return;
        var isVisible = panel.style.visibility === 'visible';
        if (isVisible) {
          panel.style.visibility = 'hidden';
          panel.style.opacity    = '0';
          btn.setAttribute('aria-expanded', 'false');
        } else {
          panel.style.visibility = 'visible';
          panel.style.opacity    = '1';
          btn.setAttribute('aria-expanded', 'true');
        }
      }
    });
  });

  /* Reduce motion: disable transitions */
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    if (menu) {
      menu.style.transition = 'none';
    }
  }

})();

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ═══════════════════════════════════════════════════════
     UTILITY BAR  (scrolls away — not sticky)
════════════════════════════════════════════════════════════ -->
<div class="utility-bar">
  <div class="utility-bar__inner">
    <div class="utility-bar__left">
      <span class="utility-bar__ccb">CCB #261742</span>
      <span class="utility-bar__sep" aria-hidden="true">&middot;</span>
      <span class="utility-bar__licensed">Licensed &amp; Bonded</span>
      <span class="utility-bar__sep" aria-hidden="true" style="display:none;" id="deq-sep-desktop">&middot;</span>
      <span class="utility-bar__deq">DEQ Certified — PLC# 39996</span>
    </div>
    <div class="utility-bar__right">
      <a href="mailto:david@ddlandworks.com" class="utility-bar__email">david@ddlandworks.com</a>
      <span class="utility-bar__sep" aria-hidden="true">&middot;</span>
      <span class="utility-bar__hours">Mon&ndash;Fri &nbsp;7am&ndash;5pm</span>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════════════
     STICKY HEADER
════════════════════════════════════════════════════════════ -->
<header class="site-header">
  <div class="site-header__inner">

    <!-- Logo -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo" aria-label="D&amp;D Land Works &mdash; Home">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="D&amp;D Land Works" width="180" height="64" />
    </a>

    <!-- Desktop Navigation -->
    <nav class="desktop-nav" aria-label="Primary">

      <!-- Services dropdown -->
      <div class="nav-dropdown">
        <button type="button" class="nav-dropdown__trigger" aria-expanded="false" aria-haspopup="true">
          Services
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="nav-dropdown__panel" role="region" aria-label="Services menu">
          <div class="nav-dropdown__box nav-dropdown__box--services">
            <div class="nav-dropdown__grid">
              <!-- Core Services -->
              <div>
                <p class="nav-dropdown__heading nav-dropdown__heading--accent">Core Services</p>
                <ul class="nav-dropdown__list">
                  <li><a href="/site-preparation-contractor-eugene-or">Site Preparation</a></li>
                  <li><a href="/excavation-contractor-eugene-or">Excavation</a></li>
                  <li><a href="/land-clearing-services-eugene-or">Land Clearing</a></li>
                  <li><a href="/land-grading-services-eugene-or">Grading &amp; Leveling</a></li>
                  <li>
                    <a href="/septic-installation-lane-county-or">
                      Septic Install &amp; Repairs
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Additional Services -->
              <div>
                <p class="nav-dropdown__heading nav-dropdown__heading--muted">Additional</p>
                <ul class="nav-dropdown__list">
                  <li><a href="/foundation-excavation-eugene-or">Foundation Excavation</a></li>
                  <li><a href="/drainage-installation-eugene-or">Drainage Excavation</a></li>
                  <li><a href="/utility-trenching-eugene-or">Utility Excavation</a></li>
                  <li><a href="/driveway-excavation-grading-eugene-or">Driveway Repair</a></li>
                  <li><a href="/trenching-services-eugene-or">Trenching &amp; Backfill</a></li>
                  <li><a href="/brush-clearing-eugene-or">Brush Clearing</a></li>
                  <li><a href="/slope-stabilization-eugene-or">Slope Stabilization</a></li>
                </ul>
              </div>
            </div>
            <div class="nav-dropdown__footer">
              <a href="/services">
                View All Services
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Service Area dropdown -->
      <div class="nav-dropdown">
        <button type="button" class="nav-dropdown__trigger" aria-expanded="false" aria-haspopup="true">
          Service Area
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="nav-dropdown__panel" role="region" aria-label="Service area menu">
          <div class="nav-dropdown__box nav-dropdown__box--area">
            <div class="nav-dropdown__grid-3">
              <!-- Primary -->
              <div>
                <p class="nav-dropdown__heading nav-dropdown__heading--accent">Primary Coverage</p>
                <ul class="nav-dropdown__list">
                  <li><a href="/service-area">Lane County, OR (all areas)</a></li>
                  <li><a href="/excavation-contractor-eugene-or">Eugene, OR</a></li>
                  <li><a href="/excavation-contractor-springfield-or">Springfield, OR</a></li>
                </ul>
              </div>
              <!-- Also Serving -->
              <div>
                <p class="nav-dropdown__heading nav-dropdown__heading--muted">Also Serving</p>
                <ul class="nav-dropdown__list">
                  <li><a href="/excavation-contractor-cottage-grove-or">Cottage Grove, OR</a></li>
                  <li><a href="/excavation-contractor-junction-city-or">Junction City, OR</a></li>
                  <li><a href="/excavation-contractor-creswell-or">Creswell, OR</a></li>
                  <li><a href="/excavation-contractor-veneta-or">Veneta, OR</a></li>
                </ul>
              </div>
              <!-- Further Out -->
              <div>
                <p class="nav-dropdown__heading nav-dropdown__heading--muted">Further Out</p>
                <ul class="nav-dropdown__list">
                  <li><a href="/excavation-contractor-florence-or">Florence, OR</a></li>
                  <li><a href="/locations/oakridge">Oakridge, OR</a></li>
                  <li><a href="/excavation-contractor-coburg-or">Coburg, OR</a></li>
                  <li><a href="/excavation-contractor-lowell-or">Lowell, OR</a></li>
                </ul>
              </div>
            </div>
            <div class="nav-dropdown__footer">
              <a href="/service-area">
                View Full Service Area
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <a href="/about">About</a>
      <a href="/blog">Blog</a>
      <a href="/contact">Contact</a>
    </nav>

    <!-- Desktop CTA -->
    <div class="header-actions">
      <a href="tel:5414018726" class="header-actions__phone">541-401-8726</a>
      <a href="/contact" class="btn btn-cta btn-sm">Free Estimate</a>
    </div>

    <!-- Mobile right: call + hamburger -->
    <div class="mobile-actions">
      <a href="tel:5414018726" class="btn btn-cta btn-sm">Call</a>
      <button type="button" id="menu-toggle" aria-expanded="false" aria-controls="mobile-menu" aria-label="Open menu" class="hamburger">
        <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

  </div>
</header>

<!-- ═══════════════════════════════════════════════════════
     FULL-SCREEN MOBILE MENU
════════════════════════════════════════════════════════════ -->
<div id="mobile-menu" role="dialog" aria-modal="true" aria-label="Site navigation">

  <!-- Top bar: logo + close -->
  <div class="mobile-menu__topbar">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-menu__logo">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="D&amp;D Land Works" height="56" />
    </a>
    <button type="button" id="menu-close" aria-label="Close menu" class="mobile-menu__close">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <!-- Nav links -->
  <nav class="mobile-nav" aria-label="Mobile navigation">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>

    <!-- Services accordion -->
    <details>
      <summary>
        Services
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
      </summary>
      <div class="mobile-nav__sub">
        <p class="mobile-nav__sub-label mobile-nav__sub-label--accent">Core Services</p>
        <a href="/site-preparation-contractor-eugene-or">Site Preparation</a>
        <a href="/excavation-contractor-eugene-or">Excavation</a>
        <a href="/land-clearing-services-eugene-or">Land Clearing</a>
        <a href="/land-grading-services-eugene-or">Grading &amp; Leveling</a>
        <a href="/septic-installation-lane-county-or">
          Septic Install &amp; Repairs
        </a>
        <p class="mobile-nav__sub-label mobile-nav__sub-label--muted">Additional</p>
        <a href="/foundation-excavation-eugene-or">Foundation Excavation</a>
        <a href="/drainage-installation-eugene-or">Drainage Excavation</a>
        <a href="/utility-trenching-eugene-or">Utility Excavation</a>
        <a href="/driveway-excavation-grading-eugene-or">Driveway Repair</a>
        <a href="/trenching-services-eugene-or">Trenching &amp; Backfill</a>
        <a href="/brush-clearing-eugene-or">Brush Clearing</a>
        <a href="/slope-stabilization-eugene-or">Slope Stabilization</a>
        <a href="/services" class="view-all">View All Services &rarr;</a>
      </div>
    </details>

    <!-- Service Area accordion -->
    <details>
      <summary>
        Service Area
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
      </summary>
      <div class="mobile-nav__sub">
        <a href="/service-area">Lane County, OR (all areas)</a>
        <a href="/excavation-contractor-eugene-or">Eugene, OR</a>
        <a href="/excavation-contractor-springfield-or">Springfield, OR</a>
        <a href="/excavation-contractor-cottage-grove-or">Cottage Grove, OR</a>
        <a href="/excavation-contractor-junction-city-or">Junction City, OR</a>
        <a href="/excavation-contractor-creswell-or">Creswell, OR</a>
        <a href="/excavation-contractor-veneta-or">Veneta, OR</a>
        <a href="/excavation-contractor-florence-or">Florence, OR</a>
        <a href="/locations/oakridge">Oakridge, OR</a>
        <a href="/excavation-contractor-coburg-or">Coburg, OR</a>
        <a href="/excavation-contractor-lowell-or">Lowell, OR</a>
        <a href="/service-area" class="view-all">View Full Service Area &rarr;</a>
      </div>
    </details>

    <a href="/about">About</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>
  </nav>

  <!-- Bottom CTA buttons -->
  <div class="mobile-menu__cta">
    <a href="tel:5414018726" class="btn btn-outline-white btn-lg">Call 541-401-8726</a>
    <a href="/contact" class="btn btn-cta btn-lg">Free Estimate</a>
  </div>

</div><!-- #mobile-menu -->

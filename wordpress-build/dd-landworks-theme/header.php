<?php
/**
 * Header — top utility bar + sticky nav with mega-menu dropdowns.
 * Ports Header.astro. Sticky lives on <header> itself (not a wrapper), see
 * that component's comment for why: a sticky element needs its immediate
 * parent to span the scrollable range, and <header>'s parent is <body>.
 */
$services       = ddlw_services();
$core_services  = array_filter( $services, fn( $s ) => $s['group'] === 'core' );
$extra_services = array_filter( $services, fn( $s ) => $s['group'] === 'additional' );
$areas          = ddlw_service_areas();
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="topbar">
	<div class="container">
		<span class="topbar__license">Licensed &amp; Bonded (CCB #<?php echo esc_html( ddlw_ccb_number() ); ?>)</span>
		<div class="topbar__social"><?php ddlw_render_social_links(); ?></div>
		<a href="mailto:<?php echo esc_attr( ddlw_email() ); ?>" class="topbar__email"><?php echo esc_html( ddlw_email() ); ?></a>
	</div>
</div>

<header class="site-header">
	<div class="container">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo">
			<?php if ( has_custom_logo() ) : the_custom_logo(); else : ?>
				<img src="<?php echo esc_url( ddlw_img( 'logo.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			<?php endif; ?>
		</a>

		<ul class="primary-nav">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
			<li>
				<button type="button">Services
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:0.85rem;width:0.85rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
				</button>
				<div class="nav-dropdown">
					<div class="nav-dropdown__panel">
						<div class="nav-dropdown__cols">
							<div>
								<p class="nav-dropdown__heading">Core Services</p>
								<ul><?php foreach ( $core_services as $s ) : ?><li><a href="/services/<?php echo esc_attr( $s['slug'] ); ?>"><?php echo esc_html( $s['title'] ); ?></a></li><?php endforeach; ?></ul>
							</div>
							<div>
								<p class="nav-dropdown__heading nav-dropdown__heading--muted">Additional Services</p>
								<ul><?php foreach ( $extra_services as $s ) : ?><li><a href="/services/<?php echo esc_attr( $s['slug'] ); ?>"><?php echo esc_html( $s['title'] ); ?></a></li><?php endforeach; ?></ul>
							</div>
						</div>
						<a href="/services" class="nav-dropdown__all">View All Services
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:0.85rem;width:0.85rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
						</a>
					</div>
				</div>
			</li>
			<li>
				<button type="button">Service Areas
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:0.85rem;width:0.85rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
				</button>
				<div class="nav-dropdown">
					<div class="nav-dropdown__panel nav-dropdown__panel--wide">
						<div class="nav-dropdown__cols nav-dropdown__cols--3">
							<div>
								<p class="nav-dropdown__heading">Primary Coverage</p>
								<ul><?php foreach ( $areas['primary'] as $a ) : ?><li><a href="<?php echo $a['slug'] ? '/locations/' . esc_attr( $a['slug'] ) : '/service-area'; ?>"><?php echo esc_html( $a['label'] ); ?></a></li><?php endforeach; ?></ul>
							</div>
							<div>
								<p class="nav-dropdown__heading nav-dropdown__heading--muted">Also Serving</p>
								<ul><?php foreach ( $areas['secondary'] as $a ) : ?><li><a href="/locations/<?php echo esc_attr( $a['slug'] ); ?>"><?php echo esc_html( $a['label'] ); ?></a></li><?php endforeach; ?></ul>
							</div>
							<div>
								<p class="nav-dropdown__heading nav-dropdown__heading--muted">Further Out</p>
								<ul><?php foreach ( $areas['further'] as $a ) : ?><li><a href="/locations/<?php echo esc_attr( $a['slug'] ); ?>"><?php echo esc_html( $a['label'] ); ?></a></li><?php endforeach; ?></ul>
							</div>
						</div>
						<a href="/service-area" class="nav-dropdown__all">View Full Service Area
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:0.85rem;width:0.85rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
						</a>
					</div>
				</div>
			</li>
			<li><a href="/commercial-excavation">Commercial</a></li>
			<li><a href="/resources">Resources</a></li>
			<li><a href="/blog">Blog</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/contact">Contact</a></li>
		</ul>

		<div class="site-header__cta"><a href="<?php echo esc_url( ddlw_phone_href() ); ?>" class="btn btn-cta btn-sm">Call <?php echo esc_html( ddlw_phone() ); ?></a></div>

		<div class="site-header__mobile-actions">
			<a href="<?php echo esc_url( ddlw_phone_href() ); ?>" class="btn btn-cta btn-sm">Call</a>
			<button type="button" id="menu-toggle" class="menu-toggle" aria-expanded="false" aria-controls="mobile-menu" aria-label="Open menu">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
			</button>
		</div>
	</div>
</header>

<div id="mobile-menu" class="mobile-menu">
	<div class="mobile-menu__top">
		<img src="<?php echo esc_url( ddlw_img( 'logo.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
		<button type="button" id="menu-close" class="mobile-menu__close" aria-label="Close menu">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1.75rem;width:1.75rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
		</button>
	</div>
	<nav>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
		<details>
			<summary>Services <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1.5rem;width:1.5rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></summary>
			<div class="mobile-menu__sub">
				<p class="mobile-menu__sub-label mobile-menu__sub-label--accent">Core Services</p>
				<?php foreach ( $core_services as $s ) : ?><a href="/services/<?php echo esc_attr( $s['slug'] ); ?>"><?php echo esc_html( $s['title'] ); ?></a><?php endforeach; ?>
				<p class="mobile-menu__sub-label">Additional Services</p>
				<?php foreach ( $extra_services as $s ) : ?><a href="/services/<?php echo esc_attr( $s['slug'] ); ?>"><?php echo esc_html( $s['title'] ); ?></a><?php endforeach; ?>
				<a href="/services" class="mobile-menu__sub-label--accent" style="font-weight:700;">View All Services →</a>
			</div>
		</details>
		<details>
			<summary>Service Areas <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1.5rem;width:1.5rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></summary>
			<div class="mobile-menu__sub">
				<p class="mobile-menu__sub-label mobile-menu__sub-label--accent">Primary Coverage</p>
				<?php foreach ( $areas['primary'] as $a ) : ?><a href="<?php echo $a['slug'] ? '/locations/' . esc_attr( $a['slug'] ) : '/service-area'; ?>"><?php echo esc_html( $a['label'] ); ?></a><?php endforeach; ?>
				<p class="mobile-menu__sub-label">Also Serving</p>
				<?php foreach ( $areas['secondary'] as $a ) : ?><a href="/locations/<?php echo esc_attr( $a['slug'] ); ?>"><?php echo esc_html( $a['label'] ); ?></a><?php endforeach; ?>
				<p class="mobile-menu__sub-label">Further Out</p>
				<?php foreach ( $areas['further'] as $a ) : ?><a href="/locations/<?php echo esc_attr( $a['slug'] ); ?>"><?php echo esc_html( $a['label'] ); ?></a><?php endforeach; ?>
				<a href="/service-area" class="mobile-menu__sub-label--accent" style="font-weight:700;">View Full Service Area →</a>
			</div>
		</details>
		<a href="/commercial-excavation">Commercial</a>
		<a href="/resources">Resources</a>
		<a href="/blog">Blog</a>
		<a href="/about">About</a>
		<a href="/contact">Contact</a>
	</nav>
	<div class="mobile-menu__cta"><a href="<?php echo esc_url( ddlw_phone_href() ); ?>" class="btn btn-cta btn-lg">Call <?php echo esc_html( ddlw_phone() ); ?></a></div>
</div>

<main>

<?php
/**
 * Component shortcodes — the page-builder-free way to assemble a page in
 * this theme. Each one ports a component from the Astro build
 * (site/src/components/*.astro in the main repo) so a page built from
 * these shortcodes matches the same visual system. Usable in either the
 * block editor (as a Shortcode block / Classic Paragraph) or the classic
 * editor.
 *
 * Repeating items (FAQ, reviews, before/after pairs) use a nested-shortcode
 * pattern: the outer shortcode calls do_shortcode() on its content, and the
 * inner shortcode pushes into a module-level buffer instead of rendering
 * itself directly. See ddlw_faq / ddlw_faq_item for the reference pair.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* -------------------------------------------------------------------------
   [hero] — full-bleed slideshow hero. Matches Hero.astro.
   Atts: eyebrow, title, subtitle, primary_label, primary_href,
         secondary_label, secondary_href, images (comma-separated filenames
         from assets/images/), phone
   ---------------------------------------------------------------------- */
function ddlw_hero( $atts ) {
	$a = shortcode_atts( array(
		'eyebrow'         => '',
		'title'           => get_bloginfo( 'name' ),
		'subtitle'        => '',
		'primary_label'   => 'Call ' . ddlw_phone(),
		'primary_href'    => ddlw_phone_href(),
		'secondary_label' => 'Our Services',
		'secondary_href'  => '#services',
		'images'          => '',
	), $atts, 'hero' );

	$images = array_filter( array_map( 'trim', explode( ',', $a['images'] ) ) );

	ob_start();
	?>
	<section class="hero">
		<?php if ( $images ) : ?>
			<div class="hero__bg-slideshow">
				<?php foreach ( $images as $i => $img ) : ?>
					<img src="<?php echo esc_url( ddlw_img( $img ) ); ?>" alt="" aria-hidden="true" class="hero__bg-slide<?php echo $i === 0 ? ' is-active' : ''; ?>" />
				<?php endforeach; ?>
			</div>
			<div class="hero__overlay"></div>
		<?php endif; ?>
		<div class="container hero__inner">
			<?php if ( $a['eyebrow'] ) : ?><p class="hero__eyebrow"><?php echo esc_html( $a['eyebrow'] ); ?></p><?php endif; ?>
			<h1 class="hero__title"><?php echo esc_html( $a['title'] ); ?></h1>
			<?php if ( $a['subtitle'] ) : ?><p class="hero__subtitle"><?php echo esc_html( $a['subtitle'] ); ?></p><?php endif; ?>
			<div class="hero__ctas">
				<?php if ( $a['secondary_label'] ) : ?>
					<a href="<?php echo esc_url( $a['secondary_href'] ); ?>" class="btn-pill">
						<?php echo esc_html( $a['secondary_label'] ); ?>
						<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
					</a>
				<?php endif; ?>
				<a href="<?php echo esc_url( $a['primary_href'] ); ?>" class="hero__phone">
					<span class="hero__phone-badge"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="height:1.1rem;width:1.1rem;"><path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3c0-.6.4-1 1-1h3.2c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z"/></svg></span>
					<span class="hero__phone-text"><small>Call us any time</small><strong><?php echo esc_html( ddlw_phone() ); ?></strong></span>
				</a>
			</div>
		</div>
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'hero', 'ddlw_hero' );

/* -------------------------------------------------------------------------
   [trust_bar] — the 4-item credential strip. Matches TrustBar.astro.
   ---------------------------------------------------------------------- */
function ddlw_trust_bar() {
	$items = array(
		array( 'label' => 'Licensed & Bonded', 'detail' => 'CCB #' . ddlw_ccb_number(), 'icon' => 'M12 2 4 5v6c0 5.25 3.4 9.74 8 11 4.6-1.26 8-5.75 8-11V5l-8-3Z' ),
		array( 'label' => 'DEQ Certified', 'detail' => 'Septic install & repair', 'icon' => 'M12 2a5 5 0 1 0 0 10 5 5 0 0 0 0-10ZM7 21l2-5m8 5-2-5' ),
		array( 'label' => 'Free Estimates', 'detail' => 'On every job', 'icon' => 'M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Zm3 7h8m-8 3.5h5' ),
		array( 'label' => 'Residential & Commercial', 'detail' => 'One crew, both', 'icon' => 'M5 21V7l7-4 7 4v14M3 21h18M9 21v-4h6v4' ),
	);
	ob_start();
	?>
	<section class="trust-bar">
		<div class="container trust-bar__grid">
			<?php foreach ( $items as $item ) : ?>
				<div class="trust-bar__item">
					<span class="icon-badge"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr( $item['icon'] ); ?>"/></svg></span>
					<div>
						<p class="trust-bar__label"><?php echo esc_html( $item['label'] ); ?></p>
						<p class="trust-bar__detail"><?php echo esc_html( $item['detail'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'trust_bar', 'ddlw_trust_bar' );

/* -------------------------------------------------------------------------
   [about_section] — image + floating badge + copy. Matches AboutSection.astro.
   Atts: eyebrow, title, image, badge_value, badge_label, cta_label, cta_href
   Content: description HTML (wrapped in <p> if plain text)
   ---------------------------------------------------------------------- */
function ddlw_about_section( $atts, $content = '' ) {
	$a = shortcode_atts( array(
		'eyebrow'     => 'About D&D Land Works',
		'title'       => 'Lane County\'s Owner-Operated Excavation & Site Prep Team',
		'image'       => 'project-material-delivery.webp',
		'badge_value' => 'CCB #' . ddlw_ccb_number(),
		'badge_label' => 'Licensed & Bonded',
		'cta_label'   => 'Meet David',
		'cta_href'    => '/about',
	), $atts, 'about_section' );

	ob_start();
	?>
	<section class="section">
		<div class="container split">
			<div class="about-media">
				<img src="<?php echo esc_url( ddlw_img( $a['image'] ) ); ?>" alt="D&D Land Works job site in Lane County, Oregon" loading="lazy" />
				<div class="about-media__badge">
					<span class="about-media__badge-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg></span>
					<div><strong><?php echo esc_html( $a['badge_value'] ); ?></strong><span><?php echo esc_html( $a['badge_label'] ); ?></span></div>
				</div>
			</div>
			<div>
				<p class="eyebrow eyebrow--left"><img src="<?php echo esc_url( ddlw_img( 'logo.png' ) ); ?>" alt="" /><?php echo esc_html( $a['eyebrow'] ); ?></p>
				<h2 class="section-title"><?php echo wp_kses_post( $a['title'] ); ?></h2>
				<div class="lede gap-lg"><?php echo wp_kses_post( wpautop( do_shortcode( $content ) ) ); ?></div>
				<a href="<?php echo esc_url( $a['cta_href'] ); ?>" class="btn-pill gap-lg" style="margin-top:2rem;">
					<?php echo esc_html( $a['cta_label'] ); ?>
					<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
				</a>
			</div>
		</div>
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'about_section', 'ddlw_about_section' );

/* -------------------------------------------------------------------------
   [why_choose_us] — dark section, 4 fixed trust cards. Matches WhyChooseUs.astro.
   Atts: bg_image. Content: description HTML override.
   ---------------------------------------------------------------------- */
function ddlw_why_choose_us( $atts, $content = '' ) {
	$a = shortcode_atts( array(
		'bg_image' => 'service-excavation.webp',
	), $atts, 'why_choose_us' );

	$items = array(
		array( 'title' => 'On-Site Estimates', 'desc' => 'Every quote follows a walkthrough of your property, priced for your actual soil, slope, and access.', 'icon' => 'M9 3h6a1 1 0 0 1 1 1v1H8V4a1 1 0 0 1 1-1Z M7 6h10v14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V6Z M9 12.5l2 2 4-4.5' ),
		array( 'title' => 'Residential & Commercial', 'desc' => 'The same crew and equipment for homeowners, builders, and commercial development sites across Lane County.', 'icon' => 'M5 21V7l7-4 7 4v14M3 21h18M9 21v-4h6v4' ),
		array( 'title' => 'Clean Job Sites', 'desc' => "Clear, grade, trench, compact, or install — whatever the job, the site gets left clean when it's done.", 'icon' => 'M4 20h16M6 20V9l6-5 6 5v11M10 20v-6h4v6' ),
		array( 'title' => 'Direct Communication', 'desc' => "Call or message and reach the person who'll actually run the job, not a call center or a dispatcher relay.", 'icon' => 'M21 11.5a8.4 8.4 0 0 1-1.1 4.2L21 20l-4.5-1a8.4 8.4 0 1 1 4.5-7.5Z' ),
	);

	$default_desc = 'Every quote starts with David walking your property, not a phone-in estimate. One crew handles excavation, grading, and site prep for homeowners and builders across Lane County, and the site gets left clean when the work is done.';

	ob_start();
	?>
	<section class="why-choose">
		<img src="<?php echo esc_url( ddlw_img( $a['bg_image'] ) ); ?>" alt="" aria-hidden="true" class="why-choose__bg" loading="lazy" />
		<div class="why-choose__overlay"></div>
		<div class="container why-choose__inner">
			<div>
				<p class="eyebrow eyebrow--left eyebrow--light"><img src="<?php echo esc_url( ddlw_img( 'logo.png' ) ); ?>" alt="" />Why Choose Us</p>
				<h2 class="section-title section-title--white">Why Lane County Trusts <span style="color:var(--color-brand-blue-light);">D&amp;D Land Works</span></h2>
				<div class="lede gap-lg" style="color:var(--color-slate-300);max-width:28rem;">
					<?php echo $content ? wp_kses_post( wpautop( do_shortcode( $content ) ) ) : esc_html( $default_desc ); ?>
				</div>
				<a href="/services" class="btn-pill gap-lg" style="margin-top:2rem;">
					Know More
					<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
				</a>
			</div>
			<div class="why-choose__cards">
				<?php foreach ( $items as $item ) : ?>
					<div class="card why-choose__card">
						<span class="icon-badge"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr( $item['icon'] ); ?>"/></svg></span>
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<p><?php echo esc_html( $item['desc'] ); ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'why_choose_us', 'ddlw_why_choose_us' );

/* -------------------------------------------------------------------------
   [achievement] — photo collage + stat row. Matches Achievement.astro.
   Content: description HTML override.
   ---------------------------------------------------------------------- */
function ddlw_achievement( $atts, $content = '' ) {
	$default_desc = "Most crews that can grade your lot can't legally touch a septic system, and vice versa. D&amp;D Land Works holds both the general excavation license and the DEQ septic certification, so one contractor covers the full job from site prep through system install.";
	$stats = array(
		array( 'value' => 'CCB', 'label' => 'Licensed & Bonded (#' . ddlw_ccb_number() . ')' ),
		array( 'value' => 'DEQ', 'label' => 'Certified for Septic' ),
		array( 'value' => '1', 'label' => 'Contractor for the Full Job' ),
	);
	ob_start();
	?>
	<section class="section">
		<div class="container split">
			<div class="achievement-media">
				<img class="achievement-media__main" src="<?php echo esc_url( ddlw_img( 'project-grading-driveway.webp' ) ); ?>" alt="D&D Land Works job site in Lane County, Oregon" loading="lazy" />
				<img class="achievement-media__second" src="<?php echo esc_url( ddlw_img( 'service-driveway-repair.webp' ) ); ?>" alt="D&D Land Works site preparation work" loading="lazy" />
				<a href="<?php echo esc_url( ddlw_phone_href() ); ?>" class="achievement-media__phone">
					<span class="icon-badge" style="height:2rem;width:2rem;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="height:1rem;width:1rem;"><path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3c0-.6.4-1 1-1h3.2c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z"/></svg></span>
					<strong style="font-family:var(--font-display);font-weight:700;font-size:0.9rem;"><?php echo esc_html( ddlw_phone() ); ?></strong>
				</a>
			</div>
			<div>
				<p class="eyebrow eyebrow--left"><img src="<?php echo esc_url( ddlw_img( 'logo.png' ) ); ?>" alt="" />Our Commitment</p>
				<h2 class="section-title">Building Strong Foundations for Lane County, Oregon</h2>
				<div class="lede gap-lg"><?php echo $content ? wp_kses_post( wpautop( do_shortcode( $content ) ) ) : wp_kses_post( $default_desc ); ?></div>
				<div class="card achievement-stats">
					<?php foreach ( $stats as $stat ) : ?>
						<div><strong><?php echo esc_html( $stat['value'] ); ?></strong><span><?php echo esc_html( $stat['label'] ); ?></span></div>
					<?php endforeach; ?>
				</div>
				<a href="/service-area" class="btn-pill gap-lg" style="margin-top:2rem;">
					Learn More
					<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
				</a>
			</div>
		</div>
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'achievement', 'ddlw_achievement' );

/* -------------------------------------------------------------------------
   [service_grid] — the 12-service card grid on a dark intro band.
   Matches the "Services" section of index.astro.
   Atts: title, intro
   ---------------------------------------------------------------------- */
function ddlw_service_grid( $atts ) {
	$a = shortcode_atts( array(
		'title' => 'One Licensed Contractor for Your Whole Project',
		'intro' => "Most projects in Lane County touch more than one kind of dirt work: clearing, then grading, then drainage, then maybe septic. D&D Land Works covers all of it under one Oregon CCB license, so a small residential lot gets the same attention as a larger commercial job.",
	), $atts, 'service_grid' );

	$icons = array(
		'site-preparation'       => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 20 4 18V4l5 2 6-2 5 2v14l-5-2-6 2Z M9 4v14M15 6v14" />',
		'excavation'             => '<path stroke-linecap="round" stroke-linejoin="round" d="M4 21V10l8-6 8 6v11M4 21h16M9 21v-6h6v6" />',
		'land-clearing'          => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 2 8 9h2l-3 6h3v6h4v-6h3l-3-6h2L12 2Z" />',
		'grading-leveling'       => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 17h4l4-9 4 5 3-4h3M17 6h3v3" />',
		'septic-install-repairs' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6 7c0-1.7 2.7-3 6-3s6 1.3 6 3v10c0 1.7-2.7 3-6 3s-6-1.3-6-3V7Z M6 7c0 1.7 2.7 3 6 3s6-1.3 6-3" />',
		'foundation-excavation'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6a1 1 0 0 1 1 1v1H8V4a1 1 0 0 1 1-1Z M7 6h10v14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V6Z" />',
		'drainage-excavation'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 3s6 7 6 11a6 6 0 1 1-12 0c0-4 6-11 6-11Z" />',
		'utility-excavation'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M14.7 6.3a4 4 0 0 1-5.6 5.6L4 17l3 3 5.1-5.1a4 4 0 0 1 5.6-5.6L21 6l-3-3-3.3 3.3Z" />',
		'driveway-repair'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 3 5 21M15 3l4 18M12 8v2.5m0 4v2.5" />',
		'trenching-backfill'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M4 21V10l8-6 8 6v11M4 21h16" />',
		'brush-clearing'         => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 2 8 9h2l-3 6h3v6h4v-6h3l-3-6h2L12 2Z" />',
		'slope-stabilization'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 20 9 8l4 6 2-3 6 9H3Z" />',
	);

	ob_start();
	?>
	<section id="services" class="services-intro">
		<img src="<?php echo esc_url( ddlw_img( 'service-site-preparation.webp' ) ); ?>" alt="" aria-hidden="true" class="services-intro__bg" loading="lazy" />
		<div class="services-intro__overlay"></div>
		<div class="container services-intro__inner">
			<p class="eyebrow eyebrow--light"><?php esc_html_e( 'Services', 'dd-landworks' ); ?></p>
			<h2 class="section-title section-title--white"><?php echo wp_kses_post( $a['title'] ); ?></h2>
			<p><?php echo esc_html( $a['intro'] ); ?></p>
		</div>
	</section>
	<div class="container">
		<div class="service-grid">
			<?php foreach ( ddlw_services() as $service ) :
				$icon = $icons[ $service['slug'] ] ?? $icons['excavation'];
				?>
				<a href="/services/<?php echo esc_attr( $service['slug'] ); ?>" class="card service-card">
					<span class="icon-badge"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><?php echo $icon; ?></svg></span>
					<h3><?php echo esc_html( $service['title'] ); ?></h3>
					<p><?php echo esc_html( $service['description'] ); ?></p>
					<span class="learn-more"><?php esc_html_e( 'Learn more →', 'dd-landworks' ); ?></span>
				</a>
			<?php endforeach; ?>
		</div>
		<div class="text-center" style="padding-block:3rem 1rem;max-width:42rem;margin-inline:auto;">
			<p class="text-muted" style="font-size:0.875rem;">
				D&amp;D Land Works keeps its scope honest rather than claiming to do everything: this company does not perform tree removal, stump grinding, forestry mulching, asphalt paving, concrete work, retaining-wall engineering, septic pumping, or septic inspection beyond DEQ install authority.
			</p>
			<a href="/contact" class="btn btn-cta" style="margin-top:1.5rem;">Get a Free Estimate</a>
		</div>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'service_grid', 'ddlw_service_grid' );

/* -------------------------------------------------------------------------
   [gallery_grid] — real jobsite photo grid. Matches Gallery.astro.
   Atts: images="file.webp:Caption,file2.webp:Caption Two"
   ---------------------------------------------------------------------- */
function ddlw_gallery_grid( $atts ) {
	$a = shortcode_atts( array(
		'title'  => 'Our Projects Gallery',
		'intro'  => 'A look at recent excavation and site prep work across Lane County, Oregon.',
		'images' => 'project-excavation-bucket.webp:Excavation Work,project-grading-driveway.webp:Driveway Grading,project-site-excavation.webp:Site Excavation,project-driveway-repair.webp:Gravel Driveway Resurfacing,project-site-layout-survey.webp:Site Layout & Grading,project-finished-grading.webp:Finished Site Grading',
	), $atts, 'gallery_grid' );

	$items = array();
	foreach ( explode( ',', $a['images'] ) as $pair ) {
		$parts = explode( ':', $pair, 2 );
		if ( count( $parts ) === 2 ) {
			$items[] = array( 'src' => trim( $parts[0] ), 'caption' => trim( $parts[1] ) );
		}
	}

	ob_start();
	?>
	<section class="section container">
		<div class="text-center" style="max-width:36rem;margin-inline:auto;">
			<p class="eyebrow"><img src="<?php echo esc_url( ddlw_img( 'logo.png' ) ); ?>" alt="" /><?php esc_html_e( 'Projects', 'dd-landworks' ); ?></p>
			<h2 class="section-title section-title--center"><?php echo esc_html( $a['title'] ); ?></h2>
			<p class="text-muted mt-tight"><?php echo esc_html( $a['intro'] ); ?></p>
		</div>
		<div class="gallery-grid">
			<?php foreach ( $items as $item ) : ?>
				<figure class="card gallery-item">
					<img src="<?php echo esc_url( ddlw_img( $item['src'] ) ); ?>" alt="<?php echo esc_attr( $item['caption'] ); ?>" loading="lazy" />
					<figcaption><?php echo esc_html( $item['caption'] ); ?></figcaption>
				</figure>
			<?php endforeach; ?>
		</div>
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'gallery_grid', 'ddlw_gallery_grid' );

/* -------------------------------------------------------------------------
   [before_after] — drag-to-reveal comparison sliders. Matches
   BeforeAfter.astro / BeforeAfterSlider.astro.
   Atts: items="before.webp:after.webp:Caption,before2.webp:after2.webp:Caption2"
   ---------------------------------------------------------------------- */
function ddlw_before_after( $atts ) {
	$a = shortcode_atts( array(
		'items' => 'before-lot.webp:after-lot.webp:Overgrown Lot to Build-Ready Site,before-driveway.webp:after-driveway.webp:Driveway Regrade',
	), $atts, 'before_after' );

	$pairs = array();
	foreach ( explode( ',', $a['items'] ) as $triplet ) {
		$parts = explode( ':', $triplet, 3 );
		if ( count( $parts ) === 3 ) {
			$pairs[] = array( 'before' => trim( $parts[0] ), 'after' => trim( $parts[1] ), 'caption' => trim( $parts[2] ) );
		}
	}

	ob_start();
	?>
	<section class="section section--tint section--border-b">
		<div class="container">
			<div class="text-center" style="max-width:36rem;margin-inline:auto;">
				<p class="eyebrow"><?php esc_html_e( 'Before & After', 'dd-landworks' ); ?></p>
				<h2 class="section-title section-title--center"><?php esc_html_e( 'See the Difference', 'dd-landworks' ); ?></h2>
				<p class="text-muted mt-tight"><?php esc_html_e( 'Drag the slider to compare a site before and after D&D Land Works clears, grades, or excavates it.', 'dd-landworks' ); ?></p>
			</div>
			<div class="before-after-grid">
				<?php foreach ( $pairs as $i => $pair ) : ?>
					<div class="card gallery-item">
						<div class="before-after" data-before-after style="--reveal:50%;">
							<img src="<?php echo esc_url( ddlw_img( $pair['after'] ) ); ?>" alt="<?php echo esc_attr( $pair['caption'] ); ?> — after" loading="lazy" draggable="false" />
							<img class="before-after__before" src="<?php echo esc_url( ddlw_img( $pair['before'] ) ); ?>" alt="<?php echo esc_attr( $pair['caption'] ); ?> — before" loading="lazy" draggable="false" />
							<span class="before-after__tag before-after__tag--before">Before</span>
							<span class="before-after__tag before-after__tag--after">After</span>
							<div class="before-after__handle"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7 4 12l4 5M16 7l4 5-4 5"/></svg></span></div>
							<input type="range" min="0" max="100" value="50" aria-label="Drag to compare <?php echo esc_attr( $pair['caption'] ); ?> before and after" class="before-after-input" id="ba-<?php echo esc_attr( $i ); ?>" />
						</div>
						<figcaption><?php echo esc_html( $pair['caption'] ); ?></figcaption>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'before_after', 'ddlw_before_after' );

/* -------------------------------------------------------------------------
   [faq] + [faq_item] — accordion with FAQPage JSON-LD. Matches FAQ.astro.
   Usage:
     [faq title="Frequently Asked Questions"]
       [faq_item question="..."]Answer text[/faq_item]
       [faq_item question="..."]Answer text[/faq_item]
     [/faq]
   ---------------------------------------------------------------------- */
$GLOBALS['ddlw_faq_buffer'] = array();

function ddlw_faq_item( $atts, $content = '' ) {
	$a = shortcode_atts( array( 'question' => '' ), $atts, 'faq_item' );
	$GLOBALS['ddlw_faq_buffer'][] = array(
		'question' => $a['question'],
		'answer'   => trim( wp_strip_all_tags( do_shortcode( $content ) ) ),
	);
	return '';
}
add_shortcode( 'faq_item', 'ddlw_faq_item' );

function ddlw_faq( $atts, $content = '' ) {
	$a = shortcode_atts( array( 'title' => 'Frequently Asked Questions' ), $atts, 'faq' );

	$GLOBALS['ddlw_faq_buffer'] = array();
	do_shortcode( $content );
	$items = $GLOBALS['ddlw_faq_buffer'];

	$schema = array(
		'@context'   => 'https://schema.org',
		'@type'      => 'FAQPage',
		'mainEntity' => array_map( function ( $item ) {
			return array(
				'@type'          => 'Question',
				'name'           => $item['question'],
				'acceptedAnswer' => array(
					'@type' => 'Answer',
					'text'  => $item['answer'],
				),
			);
		}, $items ),
	);

	ob_start();
	?>
	<section class="container container--narrow section">
		<h2 class="section-title section-title--center"><?php echo esc_html( $a['title'] ); ?></h2>
		<div class="faq-list">
			<?php foreach ( $items as $item ) : ?>
				<details class="card faq-item">
					<summary>
						<?php echo esc_html( $item['question'] ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
					</summary>
					<p><?php echo esc_html( $item['answer'] ); ?></p>
				</details>
			<?php endforeach; ?>
		</div>
	</section>
	<?php if ( $items ) : ?>
		<script type="application/ld+json"><?php echo wp_json_encode( $schema ); ?></script>
	<?php endif; ?>
	<?php
	return ob_get_clean();
}
add_shortcode( 'faq', 'ddlw_faq' );

/* -------------------------------------------------------------------------
   [cta_block] — closing CTA band with the excavator cutout image.
   Matches CTABlock.astro.
   ---------------------------------------------------------------------- */
function ddlw_cta_block( $atts ) {
	$a = shortcode_atts( array(
		'title'    => 'Get a Free Estimate From D&D Land Works',
		'subtitle' => 'Site preparation, excavation and grading, land clearing, drainage, utility work, and DEQ-certified septic installation and repair — one licensed, bonded contractor for residential and commercial properties throughout Lane County.',
		'cta_label' => 'Book Appointment',
		'cta_href'  => '/contact',
	), $atts, 'cta_block' );

	ob_start();
	?>
	<section class="cta-block">
		<div class="container">
			<div class="cta-block__inner">
				<h2><?php echo esc_html( $a['title'] ); ?></h2>
				<p><?php echo esc_html( $a['subtitle'] ); ?></p>
				<div class="cta-block__actions">
					<a href="<?php echo esc_url( $a['cta_href'] ); ?>" class="btn-pill cta-block__pill">
						<?php echo esc_html( $a['cta_label'] ); ?>
						<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
					</a>
					<a href="<?php echo esc_url( ddlw_phone_href() ); ?>" class="hero__phone">
						<span class="hero__phone-badge"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="height:1.1rem;width:1.1rem;"><path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3c0-.6.4-1 1-1h3.2c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z"/></svg></span>
						<span class="hero__phone-text"><small>Call us any time</small><strong><?php echo esc_html( ddlw_phone() ); ?></strong></span>
					</a>
				</div>
			</div>
		</div>
		<img src="<?php echo esc_url( ddlw_img( 'ctaimage.png' ) ); ?>" alt="" aria-hidden="true" class="cta-block__image" />
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'cta_block', 'ddlw_cta_block' );

/* -------------------------------------------------------------------------
   [testimonials] + [review] — Google-review style panel with pagination.
   Matches Testimonials.astro.
   ---------------------------------------------------------------------- */
$GLOBALS['ddlw_review_buffer'] = array();

function ddlw_review( $atts, $content = '' ) {
	$a = shortcode_atts( array( 'name' => '', 'initial' => '', 'date' => '', 'stars' => 5 ), $atts, 'review' );
	$GLOBALS['ddlw_review_buffer'][] = array(
		'name'    => $a['name'],
		'initial' => $a['initial'] ?: mb_substr( $a['name'], 0, 1 ),
		'date'    => $a['date'],
		'stars'   => (int) $a['stars'],
		'text'    => trim( wp_strip_all_tags( do_shortcode( $content ) ) ),
	);
	return '';
}
add_shortcode( 'review', 'ddlw_review' );

function ddlw_testimonials( $atts, $content = '' ) {
	$a = shortcode_atts( array(
		'business' => get_bloginfo( 'name' ),
		'rating'   => '',
		'count'    => '',
	), $atts, 'testimonials' );

	$GLOBALS['ddlw_review_buffer'] = array();
	do_shortcode( $content );
	$reviews = $GLOBALS['ddlw_review_buffer'];
	$rating  = $a['rating'] ? (float) $a['rating'] : ( $reviews ? array_sum( array_column( $reviews, 'stars' ) ) / count( $reviews ) : 0 );
	$count   = $a['count'] ? (int) $a['count'] : count( $reviews );

	ob_start();
	?>
	<section class="testimonials">
		<div class="container container--narrow testimonials__head">
			<span class="testimonials__badge">Google Reviews</span>
			<h2 class="section-title section-title--white section-title--center gap-lg">Live Google Reviews for <?php echo esc_html( $a['business'] ); ?></h2>
			<p>Read live Google reviews from customers who have worked with <?php echo esc_html( $a['business'] ); ?>.</p>
		</div>
		<div class="container testimonials__panel">
			<?php if ( $reviews ) : ?>
				<div style="display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:1.5rem;">
					<h3 style="font-family:var(--font-display);font-weight:700;font-size:1.25rem;">What our clients say about us</h3>
					<div style="display:flex;align-items:center;gap:1rem;">
						<div style="text-align:right;">
							<p style="font-family:var(--font-display);font-weight:900;font-size:1.75rem;"><?php echo esc_html( number_format( $rating, 2 ) ); ?></p>
							<p style="display:flex;align-items:center;gap:0.35rem;justify-content:flex-end;font-size:0.875rem;color:var(--color-slate-500);"><?php echo ddlw_stars( $rating ); ?> <?php echo esc_html( $count ); ?> reviews</p>
						</div>
					</div>
				</div>
				<div class="review-grid">
					<?php foreach ( $reviews as $review ) : ?>
						<div class="review-card">
							<div class="review-card__top">
								<span style="display:flex;align-items:center;gap:0.35rem;font-family:var(--font-display);font-weight:700;"><?php echo esc_html( $review['stars'] ); ?> <?php echo ddlw_stars( $review['stars'] ); ?></span>
								<span style="font-size:0.75rem;color:var(--color-slate-400);"><?php echo esc_html( $review['date'] ); ?></span>
							</div>
							<p class="review-card__text"><?php echo esc_html( $review['text'] ); ?></p>
							<div class="review-card__foot">
								<span class="review-avatar"><?php echo esc_html( $review['initial'] ); ?></span>
								<p style="font-size:0.875rem;font-weight:600;"><?php echo esc_html( $review['name'] ); ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php else : ?>
				<div class="text-center" style="padding-block:2rem;">
					<p style="font-family:var(--font-display);font-weight:700;text-transform:uppercase;">No Reviews Yet</p>
					<p class="text-muted mt-tight"><?php echo esc_html( $a['business'] ); ?> is a new business building its Google presence. Worked with us on a project? Be the first to leave a review.</p>
				</div>
			<?php endif; ?>
		</div>
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'testimonials', 'ddlw_testimonials' );

/* -------------------------------------------------------------------------
   [photo_block] — the reusable alternating photo+content section used
   across service pages. Matches PhotoContentBlock.astro.
   Atts: eyebrow, title, image, alt, badge_value, badge_label, side
         (left|right), cta_label, cta_href
   Content: body HTML
   ---------------------------------------------------------------------- */
function ddlw_photo_block( $atts, $content = '' ) {
	$a = shortcode_atts( array(
		'eyebrow'     => '',
		'title'       => '',
		'image'       => 'project-material-delivery.webp',
		'alt'         => '',
		'badge_value' => '',
		'badge_label' => '',
		'side'        => 'left',
		'cta_label'   => 'Get a Free Estimate',
		'cta_href'    => '/contact',
	), $atts, 'photo_block' );

	$order_class = $a['side'] === 'right' ? ' style="direction:rtl;"' : '';
	ob_start();
	?>
	<section class="photo-block">
		<div class="container split"<?php echo $order_class; ?>>
			<div class="photo-block__media" style="direction:ltr;">
				<img src="<?php echo esc_url( ddlw_img( $a['image'] ) ); ?>" alt="<?php echo esc_attr( $a['alt'] ); ?>" loading="lazy" />
				<?php if ( $a['badge_value'] ) : ?>
					<div class="about-media__badge">
						<span class="about-media__badge-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg></span>
						<div><strong><?php echo esc_html( $a['badge_value'] ); ?></strong><span><?php echo esc_html( $a['badge_label'] ); ?></span></div>
					</div>
				<?php endif; ?>
			</div>
			<div class="photo-block__body" style="direction:ltr;">
				<?php if ( $a['eyebrow'] ) : ?><p class="eyebrow eyebrow--left"><img src="<?php echo esc_url( ddlw_img( 'logo.png' ) ); ?>" alt="" /><?php echo esc_html( $a['eyebrow'] ); ?></p><?php endif; ?>
				<h2><?php echo esc_html( $a['title'] ); ?></h2>
				<div class="lede"><?php echo wp_kses_post( wpautop( do_shortcode( $content ) ) ); ?></div>
				<div class="photo-block__actions">
					<a href="<?php echo esc_url( $a['cta_href'] ); ?>" class="btn-pill">
						<?php echo esc_html( $a['cta_label'] ); ?>
						<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
					</a>
					<a href="<?php echo esc_url( ddlw_phone_href() ); ?>" class="phone-inline">
						<span class="phone-inline-badge"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="height:1.1rem;width:1.1rem;"><path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3c0-.6.4-1 1-1h3.2c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z"/></svg></span>
						<span class="phone-inline-text"><small>Call us any time</small><strong><?php echo esc_html( ddlw_phone() ); ?></strong></span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'photo_block', 'ddlw_photo_block' );

/* -------------------------------------------------------------------------
   [cost_factors] + [process_steps] — the two homepage/service-page
   informational grids. Atts let an editor override title/intro per page;
   the items themselves are passed as pipe-delimited "Label: detail" lines.
   ---------------------------------------------------------------------- */
function ddlw_cost_factors( $atts ) {
	$a = shortcode_atts( array(
		'title' => 'How Much Does Excavation or Site Prep Cost in Lane County?',
		'intro' => "There isn't an honest single number for this. Instead of publishing a generic dollar figure that would be wrong for most projects, D&D Land Works gives every project a real, no-obligation estimate after seeing the site. Here's what actually moves the number:",
		'items' => 'Project Scope: A driveway regrade costs less than a full building-pad site prep — scope drives most of the variation.|Site Access: Tight, hard-to-reach lots or long haul distances for equipment and material add time and cost.|Soil & Slope: Willamette Valley clay soil and steep or unstable slopes can require extra passes, rock, or erosion control.|Season: Wet-season work (roughly November–April) often needs more rock and drainage work than the same job in summer.|Permits: Projects that require a Lane County or city permit add review time and fees on top of the excavation itself.|Utility / Septic Scope: Adding utility trenching or septic work to a grading job changes both timeline and cost.',
	), $atts, 'cost_factors' );

	ob_start();
	?>
	<section class="section container">
		<div class="text-center" style="max-width:40rem;margin-inline:auto;">
			<h2 class="section-title section-title--center"><?php echo esc_html( $a['title'] ); ?></h2>
			<p class="lede gap-lg"><?php echo esc_html( $a['intro'] ); ?></p>
		</div>
		<div class="factor-grid">
			<?php foreach ( explode( '|', $a['items'] ) as $row ) :
				$parts = explode( ':', $row, 2 );
				if ( count( $parts ) < 2 ) continue;
				?>
				<div class="card factor-card">
					<p class="factor-label"><?php echo esc_html( trim( $parts[0] ) ); ?></p>
					<p><?php echo esc_html( trim( $parts[1] ) ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="text-center gap-lg"><a href="/contact" class="btn btn-cta">Request a Free Estimate</a></div>
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'cost_factors', 'ddlw_cost_factors' );

function ddlw_process_steps( $atts ) {
	$a = shortcode_atts( array(
		'title' => 'What Should You Expect During an Excavation or Grading Project?',
		'items' => 'Call or submit a request: Reach D&D Land Works at ' . ddlw_phone() . ' or through the contact page with a general description of the project.|Site visit: David Deggelman or the crew walks the property to see access, soil, slope, and scope firsthand.|Estimate: You get a written estimate based on what was actually seen on-site, not a phone-quoted guess.|Scheduling: Work gets scheduled around the project\'s real timeline and, where possible, around Oregon\'s dry-season window.|The work itself: Excavation, grading, clearing, drainage, utility, or septic work is carried out to the agreed scope.|Cleanup: The site is left graded and cleaned up, ready for the next phase of your project.',
	), $atts, 'process_steps' );

	ob_start();
	?>
	<section class="section" style="background:var(--color-ink);color:#fff;">
		<div class="container">
			<h2 class="section-title section-title--white section-title--center"><?php echo esc_html( $a['title'] ); ?></h2>
			<div class="process-grid">
				<?php foreach ( explode( '|', $a['items'] ) as $i => $row ) :
					$parts = explode( ':', $row, 2 );
					if ( count( $parts ) < 2 ) continue;
					?>
					<div class="card process-step">
						<span class="process-step__num"><?php echo esc_html( $i + 1 ); ?></span>
						<h4><?php echo esc_html( trim( $parts[0] ) ); ?></h4>
						<p><?php echo esc_html( trim( $parts[1] ) ); ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'process_steps', 'ddlw_process_steps' );

/* -------------------------------------------------------------------------
   [stat_row] — small 3-up stat strip (used for the "best time to excavate"
   section and similar).
   Atts: items="value:label,value2:label2"
   ---------------------------------------------------------------------- */
function ddlw_stat_row( $atts ) {
	$a = shortcode_atts( array(
		'title' => '',
		'items' => 'May–Oct:Standard dry-season window in the Willamette Valley,40.83″:Eugene\'s average annual rainfall,Nov–Apr:Wet-season work — still doable, usually needs extra rock & erosion control',
	), $atts, 'stat_row' );

	ob_start();
	?>
	<section class="section container container--narrow">
		<?php if ( $a['title'] ) : ?><h2 class="section-title section-title--center"><?php echo esc_html( $a['title'] ); ?></h2><?php endif; ?>
		<div class="card-grid-3 gap-lg">
			<?php foreach ( explode( ',', $a['items'] ) as $row ) :
				$parts = explode( ':', $row, 2 );
				if ( count( $parts ) < 2 ) continue;
				?>
				<div class="card stat-card">
					<strong><?php echo esc_html( trim( $parts[0] ) ); ?></strong>
					<span><?php echo esc_html( trim( $parts[1] ) ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
	<?php
	return ob_get_clean();
}
add_shortcode( 'stat_row', 'ddlw_stat_row' );

/* -------------------------------------------------------------------------
   [contact_form] — visual-only estimate request form (same caveat as
   contact.astro: no backend wired yet, pick one before launch).
   ---------------------------------------------------------------------- */
function ddlw_contact_form() {
	ob_start();
	?>
	<form class="contact-form" id="ddlw-estimate-form">
		<input type="text" name="name" placeholder="Your Name" required />
		<input type="email" name="email" placeholder="Email Address" required />
		<input type="tel" name="phone" placeholder="Phone Number" />
		<select name="service">
			<option value="">What do you need done?</option>
			<?php foreach ( ddlw_services() as $service ) : ?>
				<option value="<?php echo esc_attr( $service['title'] ); ?>"><?php echo esc_html( $service['title'] ); ?></option>
			<?php endforeach; ?>
			<option value="Not Sure / Other">Not Sure / Other</option>
		</select>
		<textarea name="message" rows="4" placeholder="Tell us about the site and the job"></textarea>
		<button type="submit" class="btn btn-primary btn-lg">Send</button>
		<p id="ddlw-form-status" class="hidden" style="font-size:0.875rem;color:var(--color-brand-blue);font-weight:600;" role="status"></p>
	</form>
	<?php
	return ob_get_clean();
}
add_shortcode( 'contact_form', 'ddlw_contact_form' );

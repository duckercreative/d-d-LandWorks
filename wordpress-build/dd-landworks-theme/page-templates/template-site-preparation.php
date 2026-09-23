<?php
/**
 * Template Name: Site Preparation Page
 *
 * 1:1 port of site/src/pages/services/site-preparation.astro
 * Sections: Hero → About/Difference → Services → Problems
 *           → Process → Why Choose → Service Areas → FAQ → CTA
 */

get_header();

// ── 1. HERO ──────────────────────────────────────────────────────────────────
echo ddlw_hero( array(
	'eyebrow'         => 'Eugene, Oregon',
	'title'           => 'Site Preparation Contractor in Eugene, Oregon',
	'subtitle'        => "D&D Land Works prepares residential and commercial properties for construction. Our site preparation work can include land clearing, grading, and leveling. We serve Eugene and Lane County and adjust the work to the site's existing conditions and construction requirements.",
	'primary_label'   => 'Call ' . ddlw_phone(),
	'primary_href'    => ddlw_phone_href(),
	'secondary_label' => 'Free Estimate',
	'secondary_href'  => home_url( '/contact' ),
	'images'          => 'project-excavation-bucket.webp,project-grading-driveway.webp',
) );

?>

<!-- ── 2. SITE PREP vs EXCAVATION ────────────────────────────────────────────── -->
<section class="about-section">
	<div class="about-glow" aria-hidden="true"></div>
	<div class="container about-inner">
		<div class="about-grid">

			<!-- Text column -->
			<div class="about-text">
				<div class="about-eyebrow">
					<img src="<?php echo esc_url( ddlw_img( 'logo.png' ) ); ?>" alt="" aria-hidden="true" class="about-eyebrow__logo" />
					<p class="eyebrow">Site Preparation vs. Excavation</p>
				</div>
				<h2 class="section-title">What's the Difference Between Site Preparation and Excavation?</h2>
				<div class="about-body">
					<p>Site preparation is the broader work that gets a property ready for construction. It can include land clearing, topsoil stripping, cut and fill, grading, leveling, and compaction based on existing site conditions and planned construction.</p>
					<p>Excavation is more specific digging work. It may involve preparing areas for foundations, utilities, drainage, or other construction needs.</p>
					<p>The two can occur on the same project. Site preparation establishes suitable ground conditions, while excavation addresses specific areas that must be dug for the next construction stage. The required scope depends on the property, construction plans, elevations, access, drainage, and existing ground conditions on site.</p>
				</div>
				<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn-pill" style="margin-top:2rem;display:inline-flex;">
					Learn More About D&amp;D Land Works
					<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
				</a>
			</div>

			<!-- Image column -->
			<div class="about-img-wrap">
				<img
					src="<?php echo esc_url( ddlw_img( 'project-excavation-bucket.webp' ) ); ?>"
					alt="D&D Land Works excavation contractor working in Lane County, Oregon"
					loading="lazy"
					class="about-img"
				/>
				<div class="about-badge">
					<span class="about-badge__icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 3v5c0 5.25-3.5 10.15-8 11.5C7.5 21.15 4 16.25 4 11V6l8-3Z"/>
						</svg>
					</span>
					<div>
						<p class="about-badge__title">CCB #<?php echo esc_html( ddlw_ccb_number() ); ?></p>
						<p class="about-badge__sub">Licensed &amp; Bonded</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- ── 3. WHAT DOES SITE PREP INCLUDE (Services grid) ─────────────────────────── -->
<?php
$site_prep_items = array(
	array(
		'title' => 'Land Clearing',
		'desc'  => 'Land clearing removes brush, vegetation, debris, and other surface obstacles from the property. This creates usable space for grading and prepares the site for planned construction work.',
		'href'  => home_url( '/services/land-clearing' ),
		'icon'  => 'M12 2 8 9h2l-3 6h3v6h4v-6h3l-3-6h2L12 2Z',
	),
	array(
		'title' => 'Topsoil Stripping',
		'desc'  => 'Topsoil stripping removes the surface soil layer before grading begins. Suitable topsoil can be stockpiled for later use while the underlying ground is prepared for construction.',
		'href'  => home_url( '/services/site-preparation' ),
		'icon'  => 'M9 20 4 18V4l5 2 6-2 5 2v14l-5-2-6 2Z M9 4v14M15 6v14',
	),
	array(
		'title' => 'Cut and Fill',
		'desc'  => 'Cut and fill moves soil to change existing ground elevations. It helps shape building areas to planned grades when the property requires significant changes in elevation.',
		'href'  => home_url( '/services/grading-leveling' ),
		'icon'  => 'M3 17h4l4-9 4 5 3-4h3M17 6h3v3',
	),
	array(
		'title' => 'Grading',
		'desc'  => 'Grading adjusts existing ground elevations to meet planned site requirements. It shapes the construction area and establishes suitable grades for the building and surrounding ground.',
		'href'  => home_url( '/services/grading-leveling' ),
		'icon'  => 'M3 20 9 8l4 6 2-3 6 9H3Z',
	),
);
?>
<section id="services" class="services-intro">
	<img src="<?php echo esc_url( ddlw_img( 'project-site-excavation.webp' ) ); ?>" alt="" aria-hidden="true" class="services-intro__bg" loading="lazy" />
	<div class="services-intro__overlay"></div>
	<div class="container services-intro__inner">
		<p class="eyebrow eyebrow--light">Our Services</p>
		<h2 class="section-title section-title--white">What Does Site Preparation Include?</h2>
		<p>Site preparation includes the work needed to prepare a property for construction. The scope can vary with existing ground conditions, planned elevations, access, drainage, and the type of construction planned for the site.</p>
	</div>
</section>
<div class="container" style="margin-top:-8rem;position:relative;z-index:2;padding-bottom:1.5rem;">
	<div class="service-card-grid">
		<?php foreach ( $site_prep_items as $item ) : ?>
			<a href="<?php echo esc_url( $item['href'] ); ?>" class="service-card">
				<span class="service-card__icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
						<path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr( $item['icon'] ); ?>"/>
					</svg>
				</span>
				<h3 class="service-card__title"><?php echo esc_html( $item['title'] ); ?></h3>
				<p class="service-card__desc"><?php echo esc_html( $item['desc'] ); ?></p>
				<span class="service-card__arrow">Learn more &#8594;</span>
			</a>
		<?php endforeach; ?>
	</div>
</div>
<div style="text-align:center;padding:1rem 1.25rem 5rem;display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;">
	<a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-cta">Explore Our Services</a>
	<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline-dark">Request a Free Estimate</a>
</div>

<!-- ── 4. PROBLEMS WE HELP ADDRESS ───────────────────────────────────────────── -->
<?php
$problem_cards = array(
	array(
		'title'     => 'Raw or Undeveloped Land',
		'desc'      => 'Raw or undeveloped lots may require clearing, debris removal, topsoil work, and grading before construction can begin. Site preparation creates a workable area for the next stage of the project.',
		'icon'      => 'M3 20 9 8l4 6 2-3 6 9H3Z',
		'href'      => home_url( '/services/site-preparation' ),
		'link_label' => 'Site Preparation',
	),
	array(
		'title'     => 'Poor Grading',
		'desc'      => 'Poor grading can leave uneven ground or unsuitable elevations across a construction area. Site preparation adjusts the existing grades to create ground conditions that match the planned construction requirements.',
		'icon'      => 'M3 17h4l4-9 4 5 3-4h3M17 6h3v3',
		'href'      => home_url( '/services/grading-leveling' ),
		'link_label' => 'Grading &amp; Leveling',
	),
	array(
		'title'     => 'Drainage and Surface Water',
		'desc'      => 'Drainage problems can leave water collecting in areas of the property. Site preparation can address grading and ground conditions that affect how surface water moves across the site.',
		'icon'      => 'M12 3s6 7 6 11a6 6 0 1 1-12 0c0-4 6-11 6-11Z',
		'href'      => home_url( '/services/drainage-excavation' ),
		'link_label' => 'Drainage Excavation',
	),
	array(
		'title'     => 'Difficult Site Access',
		'desc'      => 'Limited or damaged access can make it harder to move equipment and materials onto the property. Site preparation may include work that improves access for the planned construction activities.',
		'icon'      => 'M9 3 5 21M15 3l4 18M12 8v2.5m0 4v2.5',
		'href'      => home_url( '/services/driveway-repair' ),
		'link_label' => 'Driveway Repair',
	),
);
?>
<section class="problems-section">
	<div class="container">
		<div class="section-header section-header--center">
			<p class="eyebrow">We Can Help</p>
			<h2 class="section-title">Site Preparation Problems We Help Address</h2>
			<p class="section-intro">Site preparation helps address property conditions that can prevent construction from starting properly. Raw land, uneven grades, drainage problems, and difficult site access can all affect the work required before construction. The preparation scope depends on the property's existing conditions and planned use.</p>
		</div>
		<div class="problem-cards-grid">
			<?php foreach ( $problem_cards as $card ) : ?>
				<div class="problem-card">
					<span class="problem-card__icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;">
							<path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr( $card['icon'] ); ?>"/>
						</svg>
					</span>
					<div>
						<h3 class="problem-card__title"><?php echo esc_html( $card['title'] ); ?></h3>
						<p class="problem-card__desc"><?php echo esc_html( $card['desc'] ); ?></p>
						<a href="<?php echo esc_url( $card['href'] ); ?>" class="problem-card__link">
							<?php echo wp_kses_post( $card['link_label'] ); ?>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:0.875rem;width:0.875rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg>
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div style="text-align:center;margin-top:3rem;">
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-pill" style="display:inline-flex;">
				Discuss Your Excavation Project
				<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
			</a>
		</div>
	</div>
</section>

<!-- ── 5. PROCESS / HOW IT WORKS ─────────────────────────────────────────────── -->
<?php
$process_steps = array(
	array(
		'step'  => '1',
		'title' => 'Project Assessment',
		'desc'  => 'The property and planned construction are reviewed before work begins. Existing grades, soil, access, drainage, and other site conditions help determine the preparation work required.',
	),
	array(
		'step'  => '2',
		'title' => 'Site Clearing',
		'desc'  => 'The work area is cleared of vegetation, brush, debris, and other obstacles that could interfere with site preparation. This creates a workable area for the planned construction.',
	),
	array(
		'step'  => '3',
		'title' => 'Site Grading',
		'desc'  => 'The prepared ground is shaped to meet planned elevations and site requirements. Cut, fill, grading, and leveling may be used where changes to existing ground levels are needed.',
	),
	array(
		'step'  => '4',
		'title' => 'Ground Compaction',
		'desc'  => "Prepared ground is compacted after earthwork to create a suitable subgrade for the next construction stage. The required compaction work depends on the site's existing ground conditions.",
	),
);
?>
<section class="process-section">
	<div class="process-glow" aria-hidden="true"></div>
	<div class="container">
		<div class="section-header section-header--center section-header--white">
			<p class="eyebrow eyebrow--light">How It Works</p>
			<h2 class="section-title section-title--white">How the Site Preparation Process Works</h2>
			<p style="color:var(--color-slate-300);max-width:40rem;margin-inline:auto;">Site preparation follows a planned sequence based on the property, construction requirements, and existing site conditions. The process begins with assessing the work area, then moves through clearing, grading, and compaction to prepare the ground for construction.</p>
		</div>
		<div class="process-cards-grid">
			<?php foreach ( $process_steps as $step ) : ?>
				<div class="process-card">
					<span class="process-card__num"><?php echo esc_html( $step['step'] ); ?></span>
					<h3 class="process-card__title"><?php echo esc_html( $step['title'] ); ?></h3>
					<p class="process-card__desc"><?php echo esc_html( $step['desc'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
		<div style="text-align:center;margin-top:3rem;">
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-cta">Discuss Your Project</a>
		</div>
	</div>
</section>

<!-- ── 6. WHY CHOOSE D&D LAND WORKS ──────────────────────────────────────────── -->
<?php
$why_items = array(
	array(
		'title' => 'Licensed and Bonded',
		'desc'  => 'D&D Land Works is licensed and bonded in Oregon under CCB #' . ddlw_ccb_number() . '. This provides a clear contractor credential for residential and commercial site preparation work.',
		'icon'  => 'M12 3l8 3v5c0 5.25-3.5 10.15-8 11.5C7.5 21.15 4 16.25 4 11V6l8-3Z',
		'link'  => array( 'label' => 'Verify CCB License &rarr;', 'href' => 'https://search.ccb.state.or.us/search/' ),
	),
	array(
		'title' => 'Free Estimates',
		'desc'  => 'Free estimates allow the property, access, existing conditions, and planned work to be discussed before the site preparation scope is established.',
		'icon'  => 'M9 3h6a1 1 0 0 1 1 1v1H8V4a1 1 0 0 1 1-1Z M7 6h10v14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V6Z M9 12.5l2 2 4-4.5',
	),
	array(
		'title' => 'Residential Projects',
		'desc'  => 'D&D Land Works provides site preparation for residential construction, including properties in Eugene, Springfield, and surrounding Lane County communities.',
		'icon'  => 'M5 21V7l7-4 7 4v14M3 21h18M9 21v-4h6v4',
	),
	array(
		'title' => 'Commercial Projects',
		'desc'  => "Commercial site preparation is scoped around the property's conditions, access, planned construction, and earthwork requirements for the project.",
		'icon'  => 'M3 21V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v16M9 21v-6h6v6M3 21h18',
	),
	array(
		'title' => 'DEQ Certified for Septic Work',
		'desc'  => 'D&D Land Works is DEQ certified for relevant septic installation and repair work, including excavation associated with applicable septic projects.',
		'icon'  => 'M6 7c0-1.7 2.7-3 6-3s6 1.3 6 3v10c0 1.7-2.7 3-6 3s-6-1.3-6-3V7Z M6 7c0 1.7 2.7 3 6 3s6-1.3 6-3',
	),
);
?>
<section class="why-site-prep-section">
	<div class="container">
		<div class="why-split-grid">
			<div>
				<h2 class="section-title">Why Choose <span style="color:var(--color-brand-blue);">D&amp;D Land Works</span> for Site Preparation?</h2>
				<p class="lede" style="margin-top:1.25rem;">Site preparation depends on the property, planned construction, and existing site conditions. D&amp;D Land Works provides residential and commercial site preparation in Eugene and Lane County, with work scoped around the property and project requirements.</p>
				<ul class="why-list">
					<?php foreach ( $why_items as $item ) : ?>
						<li class="why-list__item">
							<span class="why-list__icon">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;">
									<path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr( $item['icon'] ); ?>"/>
								</svg>
							</span>
							<div>
								<strong style="font-family:var(--font-display);font-weight:700;font-size:0.9rem;color:var(--color-ink);display:block;"><?php echo esc_html( $item['title'] ); ?></strong>
								<p style="margin-top:0.25rem;font-size:0.825rem;color:var(--color-slate-600);line-height:1.65;"><?php echo esc_html( $item['desc'] ); ?></p>
								<?php if ( ! empty( $item['link'] ) ) : ?>
									<a href="<?php echo esc_url( $item['link']['href'] ); ?>" target="_blank" rel="noopener noreferrer" style="font-size:0.8rem;font-family:var(--font-display);font-weight:700;color:var(--color-brand-blue);">
										<?php echo wp_kses_post( $item['link']['label'] ); ?>
									</a>
								<?php endif; ?>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-pill" style="margin-top:2.5rem;display:inline-flex;">
					Request a Free Estimate
					<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
				</a>
			</div>
			<div>
				<img
					src="<?php echo esc_url( ddlw_img( 'project-grading-driveway.webp' ) ); ?>"
					alt="D&D Land Works site preparation work in Lane County, Oregon"
					loading="lazy"
					style="width:100%;border-radius:var(--radius-brand-card);object-fit:cover;aspect-ratio:3/4;box-shadow:0 20px 40px rgba(0,0,0,.15);"
				/>
			</div>
		</div>
	</div>
</section>

<!-- ── 7. SERVICE AREAS ───────────────────────────────────────────────────────── -->
<?php
$service_areas = array(
	array( 'label' => 'Springfield',    'href' => home_url( '/locations/springfield' ) ),
	array( 'label' => 'Cottage Grove',  'href' => home_url( '/locations/cottage-grove' ) ),
	array( 'label' => 'Junction City',  'href' => home_url( '/locations/junction-city' ) ),
	array( 'label' => 'Creswell',       'href' => home_url( '/locations/creswell' ) ),
	array( 'label' => 'Veneta',         'href' => home_url( '/locations/veneta' ) ),
	array( 'label' => 'Florence',       'href' => home_url( '/locations/florence' ) ),
	array( 'label' => 'Oakridge',       'href' => home_url( '/locations/oakridge' ) ),
	array( 'label' => 'Coburg',         'href' => home_url( '/locations/coburg' ) ),
	array( 'label' => 'Lowell',         'href' => home_url( '/locations/lowell' ) ),
);
$pin_icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1rem;width:1rem;flex-shrink:0;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z"/><circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none"/></svg>';
?>
<section class="service-areas-section">
	<div class="container">
		<div class="section-header section-header--center">
			<p class="eyebrow">Our Service Area</p>
			<h2 class="section-title">Site Preparation Services in Eugene and Lane County</h2>
			<p class="section-intro">D&amp;D Land Works provides site preparation for residential and commercial properties in Eugene and surrounding Lane County communities. Service areas include Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, and Lowell, depending on the project scope and location.</p>
		</div>
		<div class="areas-grid">
			<div class="areas-list">
				<a href="<?php echo esc_url( home_url( '/locations/eugene' ) ); ?>" class="areas-list__primary">
					<?php echo wp_kses_post( $pin_icon ); ?>
					<span>Eugene, OR</span>
				</a>
				<?php foreach ( $service_areas as $area ) : ?>
					<a href="<?php echo esc_url( $area['href'] ); ?>" class="areas-list__item">
						<?php echo wp_kses_post( $pin_icon ); ?>
						<span><?php echo esc_html( $area['label'] ); ?>, OR</span>
					</a>
				<?php endforeach; ?>
			</div>
			<div class="areas-map">
				<iframe
					title="D&D Land Works service area map, Lane County, Oregon"
					src="https://maps.google.com/maps?q=Lane+County,+Oregon&z=9&output=embed"
					loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"
					style="border:0;display:block;width:100%;height:100%;min-height:400px;"
				></iframe>
			</div>
		</div>
	</div>
</section>

<!-- ── 8. FAQ ─────────────────────────────────────────────────────────────────── -->
<?php
$faqs = array(
	array(
		'q' => 'Do I Need Site Preparation Before Building?',
		'a' => 'Most construction sites need some level of site preparation before building. The required work depends on existing ground conditions, vegetation, elevations, access, drainage, and the planned construction. A cleared, level property may require less preparation than a raw lot.',
	),
	array(
		'q' => 'What Does Site Preparation Include?',
		'a' => "Site preparation can include land clearing, topsoil stripping, cut and fill, grading, leveling, and subgrade compaction. The exact scope depends on the property's existing conditions and construction requirements, including planned elevations, access, drainage, and the type of project.",
	),
	array(
		'q' => 'Does Site Preparation Require a Permit?',
		'a' => 'Permit requirements depend on the project, location, and type of site work involved. Lane County requirements may apply to grading, fill, erosion prevention, or access work, while larger disturbances may also involve Oregon DEQ stormwater requirements.',
	),
	array(
		'q' => 'How Do Soil Conditions Affect Site Preparation Cost?',
		'a' => 'Soil conditions can change the amount and type of site preparation required. Rock, heavy clay, poor ground, or buried materials may require additional excavation, equipment, hauling, or preparation. These conditions can increase project complexity and affect the overall cost.',
	),
	array(
		'q' => 'Does Rain Affect Site Preparation Work?',
		'a' => 'Rain can affect site preparation when ground becomes wet or difficult to work. Wet soil may influence grading, compaction, access, and drainage work. Project timing can therefore depend on weather, existing soil conditions, site access, and the amount of earthwork required.',
	),
	array(
		'q' => 'What Happens After Site Preparation?',
		'a' => 'After site preparation, construction can move into related work such as foundation excavation, utility excavation, trenching, drainage work, or other site-specific construction activities. The next stage depends on the project plans and what the prepared property requires.',
	),
);

echo ddlw_faq( array( 'heading' => 'Common Questions About Site Preparation' ), implode( '', array_map( function( $item ) {
	return '[faq_item q="' . esc_attr( $item['q'] ) . '"]' . esc_html( $item['a'] ) . '[/faq_item]';
}, $faqs ) ) );
?>

<!-- ── 9. RELATED SERVICES ────────────────────────────────────────────────────── -->
<?php
$related_services = array(
	array(
		'title' => 'Land Clearing',
		'desc'  => 'Removing brush, trees, and debris to open up usable land before site work begins.',
		'href'  => home_url( '/services/land-clearing' ),
	),
	array(
		'title' => 'Grading &amp; Leveling',
		'desc'  => 'Shaping land to the right slope for drainage and building.',
		'href'  => home_url( '/services/grading-leveling' ),
	),
	array(
		'title' => 'Foundation Excavation',
		'desc'  => 'Digging and leveling for footings and foundations.',
		'href'  => home_url( '/services/foundation-excavation' ),
	),
	array(
		'title' => 'Drainage Excavation',
		'desc'  => 'Excavation and grading to correct standing water and poor drainage.',
		'href'  => home_url( '/services/drainage-excavation' ),
	),
);
?>
<section style="background:#fff;border-top:1px solid var(--color-slate-100);padding-block:5rem;">
	<div class="container">
		<h2 class="section-title" style="text-align:center;margin-bottom:3rem;">Related Services</h2>
		<div class="service-card-grid">
			<?php foreach ( $related_services as $item ) : ?>
				<a href="<?php echo esc_url( $item['href'] ); ?>" class="service-card service-card--no-icon">
					<h3 class="service-card__title"><?php echo wp_kses_post( $item['title'] ); ?></h3>
					<p class="service-card__desc"><?php echo esc_html( $item['desc'] ); ?></p>
					<span class="service-card__arrow">Learn More &#8594;</span>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ── 10. CTA BLOCK ──────────────────────────────────────────────────────────── -->
<?php
echo ddlw_cta_block( array(
	'title'    => 'Get a Free Site Preparation Estimate',
	'subtitle' => 'Planning site preparation starts with understanding the property and construction requirements. D&D Land Works provides free estimates for residential and commercial projects, with the scope based on existing site conditions, earthwork, access, drainage, and the work needed before construction begins.',
) );

get_footer();

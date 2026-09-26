<?php
/**
 * Homepage — 1:1 port of site/src/pages/index.astro
 * Updated 2026-09-23 to match current section order and content.
 * Sections: Hero → About → Services → Problem Cards → Process Steps
 *           → Why Choose Us → Service Areas → FAQ → CTA Block
 */
get_header();

// ── 1. HERO ──────────────────────────────────────────────────────────────────
echo ddlw_hero( array(
	'eyebrow'         => 'Lane County, OR',
	'title'           => 'Licensed Excavation Contractor in Lane County, Oregon',
	'subtitle'        => 'D&D Land Works is a licensed excavation contractor serving Eugene and Lane County, Oregon. We handle site preparation, grading, land clearing, foundation excavation, drainage, utility excavation, trenching, septic work, driveway repair, and slope stabilization for residential and commercial properties.',
	'primary_href'    => home_url( '/contact' ),
	'primary_label'   => 'Request a Free Estimate',
	'secondary_label' => 'Our Services',
	'secondary_href'  => '#services',
	'images'          => 'project-excavation-bucket.webp,project-grading-driveway.webp,project-finished-grading.webp',
) );

?>

<!-- ── 2. ABOUT ─────────────────────────────────────────────────────────────── -->
<section class="about-section">
	<div class="about-glow" aria-hidden="true"></div>
	<div class="container about-inner">
		<div class="about-grid">

			<!-- Text column -->
			<div class="about-text">
				<div class="about-eyebrow">
					<img src="<?php echo esc_url( ddlw_img( 'logo.png' ) ); ?>" alt="" aria-hidden="true" class="about-eyebrow__logo" />
					<p class="eyebrow">About D&amp;D Land Works</p>
				</div>
				<h2 class="section-title">Owner-Operated Excavation Contractor Serving Lane County, Oregon</h2>
				<div class="about-body">
					<p>D&amp;D Land Works works with homeowners, property owners, builders, and commercial customers throughout Lane County. We handle the excavation and site work needed to prepare, improve, or repair a property.</p>
					<p>Our work includes site preparation, land and brush clearing, grading, foundation excavation, drainage excavation, utility excavation, trenching, septic installation and repair, driveway repair, and slope stabilization. The right scope depends on the property, existing conditions, access, and the work you need completed.</p>
					<p>Our service area includes Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, Lowell, and surrounding Lane County communities.</p>
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
					alt="D&amp;D Land Works excavation contractor working in Lane County, Oregon"
					class="about-img"
					loading="lazy"
				/>
				<div class="about-badge">
					<span class="about-badge__icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 3v5c0 5.25-3.5 10.15-8 11.5C7.5 21.15 4 16.25 4 11V6l8-3Z"/></svg>
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

<!-- ── 3. SERVICES ──────────────────────────────────────────────────────────── -->
<?php echo ddlw_service_grid( array(
	'eyebrow'  => 'Our Services',
	'title'    => 'Complete Excavation &amp; Site Preparation Services',
	'subtitle' => 'D&amp;D Land Works handles excavation and site preparation for construction, property improvements, drainage, utilities, access, septic work, and other projects across Eugene and Lane County.',
) ); ?>

<!-- ── 4. COMMON PROPERTY PROBLEMS ─────────────────────────────────────────── -->
<section class="section--tint" id="problems">
	<div class="container">
		<div class="section-head section-head--center">
			<p class="eyebrow">Common Projects</p>
			<h2 class="section-title">Excavation Services for Common Property Problems</h2>
		</div>

		<div class="prob-grid">

			<div class="card prob-card">
				<span class="icon-circle icon-circle--blue">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M3 20 9 8l4 6 2-3 6 9H3Z"/></svg>
				</span>
				<div>
					<h3 class="prob-card__title">Preparing Raw or Undeveloped Land</h3>
					<p class="prob-card__desc">Undeveloped land requires clearing, excavation, and grading before construction or planned improvements can begin. We handle site preparation and land clearing to prepare raw property for the next stage of the project.</p>
					<a href="<?php echo esc_url( home_url( '/site-preparation-contractor-eugene-oregon' ) ); ?>" class="prob-card__link">
						Site Preparation
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:0.875rem;width:0.875rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg>
					</a>
				</div>
			</div>

			<div class="card prob-card">
				<span class="icon-circle icon-circle--blue">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3s6 7 6 11a6 6 0 1 1-12 0c0-4 6-11 6-11Z"/></svg>
				</span>
				<div>
					<h3 class="prob-card__title">Poor Grading and Standing Water</h3>
					<p class="prob-card__desc">Standing water around structures, driveways, and yard areas often traces back to poor grading. We correct grades, address drainage paths, and reshape affected areas so water moves away from the property rather than collecting on it.</p>
					<a href="<?php echo esc_url( home_url( '/services/grading-leveling' ) ); ?>" class="prob-card__link">
						Grading &amp; Leveling
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:0.875rem;width:0.875rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg>
					</a>
				</div>
			</div>

			<div class="card prob-card">
				<span class="icon-circle icon-circle--blue">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M3 17h4l4-9 4 5 3-4h3M17 6h3v3"/></svg>
				</span>
				<div>
					<h3 class="prob-card__title">Drainage, Erosion &amp; Slope Conditions</h3>
					<p class="prob-card__desc">Erosion, unstable slopes, and drainage problems can worsen without correction. We excavate, regrade, and reshape affected areas, addressing the ground conditions that allow erosion or water movement to damage the site.</p>
					<a href="<?php echo esc_url( home_url( '/services/drainage-excavation' ) ); ?>" class="prob-card__link">
						Drainage Excavation
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:0.875rem;width:0.875rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg>
					</a>
				</div>
			</div>

			<div class="card prob-card">
				<span class="icon-circle icon-circle--blue">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3 5 21M15 3l4 18M12 8v2.5m0 4v2.5"/></svg>
				</span>
				<div>
					<h3 class="prob-card__title">Damaged Driveways, Utilities &amp; Site Access</h3>
					<p class="prob-card__desc">A rutted driveway, failed utility trench, or inaccessible site entry often requires excavation before it can be corrected. We regrade driveways, open utility trenches, and restore site access based on existing conditions.</p>
					<a href="<?php echo esc_url( home_url( '/services/driveway-repair' ) ); ?>" class="prob-card__link">
						Driveway Repair
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:0.875rem;width:0.875rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg>
					</a>
				</div>
			</div>

		</div>

		<div class="section-cta">
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-pill">
				Discuss Your Excavation Project
				<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
			</a>
		</div>
	</div>
</section>

<!-- ── 5. PROCESS STEPS ─────────────────────────────────────────────────────── -->
<?php echo ddlw_process_steps( array(
	'eyebrow'  => 'How It Works',
	'title'    => 'How an Excavation Project Works',
	'subtitle' => 'Every project starts with the property, planned work, and site conditions. The scope is established before work begins so the excavation, grading, or site preparation can be completed according to the project requirements.',
) ); ?>

<!-- ── 6. WHY CHOOSE D&D LAND WORKS ────────────────────────────────────────── -->
<section class="section--white section--border-b">
	<div class="container">
		<div class="why-grid">

			<!-- Left: text + feature list -->
			<div>
				<h2 class="section-title">Why Choose <span style="color:var(--color-brand-blue);">D&amp;D Land Works?</span></h2>
				<p class="lede" style="margin-top:1.25rem;">
					Every excavation project has different site conditions, access requirements, and work involved. D&amp;D Land Works keeps the scope clear and brings relevant excavation, grading, and site preparation services together for residential and commercial projects.
				</p>

				<ul class="why-list">

					<li class="why-list__item">
						<span class="icon-circle icon-circle--blue why-list__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 3v5c0 5.25-3.5 10.15-8 11.5C7.5 21.15 4 16.25 4 11V6l8-3Z"/></svg>
						</span>
						<div>
							<p class="why-list__title">Licensed &amp; Bonded</p>
							<p class="why-list__desc">D&amp;D Land Works is licensed and bonded in Oregon under CCB #<?php echo esc_html( ddlw_ccb_number() ); ?>. Customers can verify the license through the official Oregon Construction Contractors Board lookup.</p>
							<a href="https://search.ccb.state.or.us/search/" target="_blank" rel="noopener noreferrer" class="why-list__link">Verify CCB License &rarr;</a>
						</div>
					</li>

					<li class="why-list__item">
						<span class="icon-circle icon-circle--blue why-list__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6a1 1 0 0 1 1 1v1H8V4a1 1 0 0 1 1-1Z M7 6h10v14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V6Z M9 12.5l2 2 4-4.5"/></svg>
						</span>
						<div>
							<p class="why-list__title">Free Estimates</p>
							<p class="why-list__desc">We provide free estimates for excavation and site preparation projects. The scope can be discussed around the property, access, existing conditions, and work you need completed.</p>
						</div>
					</li>

					<li class="why-list__item">
						<span class="icon-circle icon-circle--blue why-list__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M5 21V7l7-4 7 4v14M3 21h18M9 21v-4h6v4"/></svg>
						</span>
						<div>
							<p class="why-list__title">Residential Excavation</p>
							<p class="why-list__desc">We handle excavation and site preparation for homeowners and property owners throughout Eugene, Springfield, and surrounding Lane County communities.</p>
						</div>
					</li>

					<li class="why-list__item">
						<span class="icon-circle icon-circle--blue why-list__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M3 21V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v16M9 21v-6h6v6M3 21h18"/></svg>
						</span>
						<div>
							<p class="why-list__title">Commercial Excavation</p>
							<p class="why-list__desc">We also handle excavation and site preparation for commercial customers, builders, and other property projects based on the required scope and site conditions.</p>
						</div>
					</li>

					<li class="why-list__item">
						<span class="icon-circle icon-circle--blue why-list__icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M6 7c0-1.7 2.7-3 6-3s6 1.3 6 3v10c0 1.7-2.7 3-6 3s-6-1.3-6-3V7Z M6 7c0 1.7 2.7 3 6 3s6-1.3 6-3"/></svg>
						</span>
						<div>
							<p class="why-list__title">DEQ Certified for Septic Work</p>
							<p class="why-list__desc">D&amp;D Land Works is DEQ certified for relevant septic installation and repair work, including excavation associated with applicable septic projects.</p>
						</div>
					</li>

				</ul>

				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-pill" style="margin-top:2.5rem;display:inline-flex;">
					Request a Free Estimate
					<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
				</a>
			</div>

			<!-- Right: image -->
			<div class="why-img-wrap">
				<img
					src="<?php echo esc_url( ddlw_img( 'project-grading-driveway.webp' ) ); ?>"
					alt="D&amp;D Land Works excavation and site work in Lane County, Oregon"
					class="why-img"
					loading="lazy"
				/>
			</div>

		</div>
	</div>
</section>

<!-- ── 7. LOCAL SERVICE AREAS ───────────────────────────────────────────────── -->
<section class="section--tint">
	<div class="container">
		<div class="section-head section-head--center">
			<p class="eyebrow">Our Service Area</p>
			<h2 class="section-title">Excavation Services Throughout Lane County, Oregon</h2>
			<p class="lede" style="max-width:40rem;margin:1.25rem auto 0;">
				D&amp;D Land Works provides excavation, grading, and site preparation for residential and commercial properties across Lane County, including Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, and Lowell.
			</p>
		</div>

		<div class="areas-grid">

			<!-- Dark location list -->
			<div class="areas-list">
				<a href="<?php echo esc_url( home_url( '/locations/eugene' ) ); ?>" class="areas-list__primary">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1rem;width:1rem;flex-shrink:0;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z"/><circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none"/></svg>
					<span>Eugene, OR</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/locations/springfield' ) ); ?>" class="areas-list__item">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1rem;width:1rem;flex-shrink:0;opacity:.4;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z"/><circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none"/></svg>
					<span>Springfield, OR</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/locations/cottage-grove' ) ); ?>" class="areas-list__item">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1rem;width:1rem;flex-shrink:0;opacity:.4;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z"/><circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none"/></svg>
					<span>Cottage Grove, OR</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/locations/junction-city' ) ); ?>" class="areas-list__item">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1rem;width:1rem;flex-shrink:0;opacity:.4;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z"/><circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none"/></svg>
					<span>Junction City, OR</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/locations/creswell' ) ); ?>" class="areas-list__item">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1rem;width:1rem;flex-shrink:0;opacity:.4;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z"/><circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none"/></svg>
					<span>Creswell, OR</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/locations/veneta' ) ); ?>" class="areas-list__item">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1rem;width:1rem;flex-shrink:0;opacity:.4;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z"/><circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none"/></svg>
					<span>Veneta, OR</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/locations/florence' ) ); ?>" class="areas-list__item">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1rem;width:1rem;flex-shrink:0;opacity:.4;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z"/><circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none"/></svg>
					<span>Florence, OR</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/locations/oakridge' ) ); ?>" class="areas-list__item">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1rem;width:1rem;flex-shrink:0;opacity:.4;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z"/><circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none"/></svg>
					<span>Oakridge, OR</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/locations/coburg' ) ); ?>" class="areas-list__item">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1rem;width:1rem;flex-shrink:0;opacity:.4;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z"/><circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none"/></svg>
					<span>Coburg, OR</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/locations/lowell' ) ); ?>" class="areas-list__item">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1rem;width:1rem;flex-shrink:0;opacity:.4;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z"/><circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none"/></svg>
					<span>Lowell, OR</span>
				</a>
			</div>

			<!-- Google Map -->
			<div class="areas-map">
				<iframe
					title="D&amp;D Land Works service area map, Lane County, Oregon"
					src="https://maps.google.com/maps?q=Lane+County,+Oregon&z=9&output=embed"
					width="100%"
					height="100%"
					style="border:0;display:block;"
					loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"
				></iframe>
			</div>

		</div>
	</div>
</section>

<!-- ── 8. FAQ ────────────────────────────────────────────────────────────────── -->
<?php echo ddlw_faq(
	array( 'title' => 'Common Questions About Excavation Services' ),
	'[faq_item question="What Does an Excavation Contractor Do?"]An excavation contractor prepares and changes ground for construction, drainage, utilities, foundations, access, septic work, and other property projects. D&D Land Works handles excavation, clearing, grading, trenching, driveway repair, septic work, and related site preparation throughout Lane County.[/faq_item]
	[faq_item question="Does D&D Land Works Handle Septic Excavation?"]Yes. D&D Land Works handles septic installation and repair and is DEQ certified for applicable septic work. Excavation is part of most septic projects, including system installation, repair, and access work. The scope depends on the property, existing system conditions, site access, and applicable DEQ requirements.[/faq_item]
	[faq_item question="What Should I Have Ready Before Requesting an Excavation Estimate?"]It helps to know the property location, the type of work you need — site preparation, grading, foundation excavation, drainage, utility trenching, driveway repair, septic, or slope work — existing access conditions, and any project timing you\'re working around. If you have plans or project documents, those can help clarify the scope, but you can start by telling us about the property and the work you need.[/faq_item]
	[faq_item question="Is D&D Land Works Licensed and Bonded?"]Yes. D&D Land Works is licensed and bonded in Oregon under Construction Contractors Board license #261742. Customers can verify Oregon contractor licensing through the Oregon CCB\'s official license lookup before hiring an excavation contractor for their project.[/faq_item]
	[faq_item question="Does D&D Land Works Provide Free Estimates?"]Yes. D&D Land Works provides free estimates for excavation and site preparation projects. The estimate can be based on the property\'s existing conditions, access, planned work, excavation requirements, drainage, utilities, and other factors affecting the project scope.[/faq_item]'
); ?>

<!-- ── 9. CTA BLOCK ─────────────────────────────────────────────────────────── -->
<?php echo ddlw_cta_block( array(
	'title'    => 'Get a Free Estimate From D&amp;D Land Works',
	'subtitle' => 'Planning excavation, site preparation, grading, land clearing, drainage, trenching, foundation excavation, driveway repair, or septic work in Lane County? Contact D&amp;D Land Works to discuss your property and project scope. Call ' . ddlw_phone() . ' or email ' . ddlw_email() . '.',
	'cta_label' => 'Request Your Free Estimate',
	'cta_href'  => home_url( '/contact' ),
) ); ?>

<script type="application/ld+json"><?php echo wp_json_encode( array(
	'@context'       => 'https://schema.org',
	'@type'          => 'GeneralContractor',
	'additionalType' => 'https://schema.org/HomeAndConstructionBusiness',
	'@id'            => home_url( '/#business' ),
	'name'           => 'D&D Land Works',
	'url'            => home_url( '/' ),
	'telephone'      => '+1-' . ddlw_phone(),
	'email'          => ddlw_email(),
	'founder'        => array( '@type' => 'Person', 'name' => 'David Deggelman' ),
	'identifier'     => array( '@type' => 'PropertyValue', 'propertyID' => 'Oregon CCB License', 'value' => ddlw_ccb_number() ),
	'hasCredential'  => array(
		'@type'              => 'EducationalOccupationalCredential',
		'credentialCategory' => 'certification',
		'name'               => 'DEQ Certified',
		'recognizedBy'       => array( '@type' => 'GovernmentOrganization', 'name' => 'Oregon Department of Environmental Quality' ),
	),
	'address'        => array( '@type' => 'PostalAddress', 'addressRegion' => 'OR', 'addressCountry' => 'US' ),
	'areaServed'     => array( 'Lane County, Oregon', 'Eugene, Oregon', 'Springfield, Oregon', 'Cottage Grove, Oregon', 'Junction City, Oregon', 'Creswell, Oregon', 'Veneta, Oregon', 'Florence, Oregon', 'Oakridge, Oregon', 'Coburg, Oregon', 'Lowell, Oregon' ),
) ); ?></script>

<?php get_footer(); ?>

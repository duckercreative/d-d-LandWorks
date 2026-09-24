<?php
/**
 * Template Name: Excavation Contractor Eugene Page
 *
 * 1:1 port of site/src/pages/excavation-contractor-eugene-oregon.astro
 * All section text is editable from WP Admin via the
 * "Excavation Contractor — Page Content" meta box (inc/meta-excavation-contractor.php).
 */

get_header();

$pid = get_the_ID();

// ── 1. HERO ──────────────────────────────────────────────────────────────────
echo ddlw_hero( array(
	'eyebrow'         => ec_get( $pid, 'ec_hero_eyebrow' ),
	'title'           => ec_get( $pid, 'ec_hero_title' ),
	'subtitle'        => ec_get( $pid, 'ec_hero_subtitle' ),
	'primary_label'   => 'Call ' . ddlw_phone(),
	'primary_href'    => ddlw_phone_href(),
	'secondary_label' => 'Free Estimate',
	'secondary_href'  => home_url( '/contact' ),
	'images'          => 'project-excavation-bucket.webp,project-site-excavation.webp',
) );

// ── Paragraph helper ──────────────────────────────────────────────────────────
function ec_paras( $text ) {
	$paras = array_filter( array_map( 'trim', explode( "\n\n", $text ) ) );
	return implode( '', array_map( function( $p ) {
		return '<p>' . esc_html( $p ) . '</p>';
	}, $paras ) );
}

?>

<!-- ── 2. WHO WE EXCAVATE FOR ─────────────────────────────────────────────── -->
<section class="about-section">
	<div class="about-glow" aria-hidden="true"></div>
	<div class="container about-inner">
		<div class="about-grid">
			<div class="about-text">
				<div class="about-eyebrow">
					<img src="<?php echo esc_url( ddlw_img( 'logo.png' ) ); ?>" alt="" aria-hidden="true" class="about-eyebrow__logo" />
					<p class="eyebrow"><?php echo esc_html( ec_get( $pid, 'ec_about_eyebrow' ) ); ?></p>
				</div>
				<h2 class="section-title"><?php echo esc_html( ec_get( $pid, 'ec_about_heading' ) ); ?></h2>
				<div class="about-body">
					<?php echo ec_paras( ec_get( $pid, 'ec_about_body' ) ); ?>
				</div>
				<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn-pill" style="margin-top:2rem;display:inline-flex;">
					Learn More About D&amp;D Land Works
					<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
				</a>
			</div>
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

<!-- ── 3. WHAT DOES EXCAVATION INCLUDE (service cards) ─────────────────────── -->
<?php
$excavation_services = array(
	array(
		'title' => ec_get( $pid, 'ec_svc_1_title' ),
		'desc'  => ec_get( $pid, 'ec_svc_1_desc' ),
		'href'  => home_url( '/services/foundation-excavation' ),
		'icon'  => 'M5 21V7l7-4 7 4v14M3 21h18M9 21v-4h6v4',
	),
	array(
		'title' => ec_get( $pid, 'ec_svc_2_title' ),
		'desc'  => ec_get( $pid, 'ec_svc_2_desc' ),
		'href'  => home_url( '/services/trenching-backfill' ),
		'icon'  => 'M9 3 5 21M15 3l4 18M12 8v2.5m0 4v2.5',
	),
	array(
		'title' => ec_get( $pid, 'ec_svc_3_title' ),
		'desc'  => ec_get( $pid, 'ec_svc_3_desc' ),
		'href'  => home_url( '/services/utility-excavation' ),
		'icon'  => 'M6 7c0-1.7 2.7-3 6-3s6 1.3 6 3v10c0 1.7-2.7 3-6 3s-6-1.3-6-3V7Z M6 7c0 1.7 2.7 3 6 3s6-1.3 6-3',
	),
	array(
		'title' => ec_get( $pid, 'ec_svc_4_title' ),
		'desc'  => ec_get( $pid, 'ec_svc_4_desc' ),
		'href'  => home_url( '/services/site-preparation' ),
		'icon'  => 'M3 20 9 8l4 6 2-3 6 9H3Z',
	),
	array(
		'title' => ec_get( $pid, 'ec_svc_5_title' ),
		'desc'  => ec_get( $pid, 'ec_svc_5_desc' ),
		'href'  => home_url( '/services/drainage-excavation' ),
		'icon'  => 'M12 3s6 7 6 11a6 6 0 1 1-12 0c0-4 6-11 6-11Z',
	),
	array(
		'title' => ec_get( $pid, 'ec_svc_6_title' ),
		'desc'  => ec_get( $pid, 'ec_svc_6_desc' ),
		'href'  => home_url( '/septic-installation-lane-county-oregon' ),
		'icon'  => 'M3 21V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v16M9 21v-6h6v6M3 21h18',
	),
);
?>
<section id="services" class="services-intro">
	<img src="<?php echo esc_url( ddlw_img( 'project-site-excavation.webp' ) ); ?>" alt="" aria-hidden="true" class="services-intro__bg" loading="lazy" />
	<div class="services-intro__overlay"></div>
	<div class="container services-intro__inner">
		<p class="eyebrow eyebrow--light"><?php echo esc_html( ec_get( $pid, 'ec_svc_eyebrow' ) ); ?></p>
		<h2 class="section-title section-title--white"><?php echo esc_html( ec_get( $pid, 'ec_svc_heading' ) ); ?></h2>
		<p><?php echo esc_html( ec_get( $pid, 'ec_svc_intro' ) ); ?></p>
	</div>
</section>
<div class="container" style="margin-top:-8rem;position:relative;z-index:2;padding-bottom:1.5rem;">
	<div class="service-card-grid service-card-grid--3">
		<?php foreach ( $excavation_services as $item ) : ?>
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
	<a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-cta">Explore All Services</a>
	<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline-dark">Request a Free Estimate</a>
</div>

<!-- ── 4. PROJECT TYPES ───────────────────────────────────────────────────── -->
<?php
$project_types = array(
	array( 'title' => ec_get( $pid, 'ec_proj_1_title' ), 'desc' => ec_get( $pid, 'ec_proj_1_desc' ) ),
	array( 'title' => ec_get( $pid, 'ec_proj_2_title' ), 'desc' => ec_get( $pid, 'ec_proj_2_desc' ) ),
	array( 'title' => ec_get( $pid, 'ec_proj_3_title' ), 'desc' => ec_get( $pid, 'ec_proj_3_desc' ) ),
	array( 'title' => ec_get( $pid, 'ec_proj_4_title' ), 'desc' => ec_get( $pid, 'ec_proj_4_desc' ) ),
	array( 'title' => ec_get( $pid, 'ec_proj_5_title' ), 'desc' => ec_get( $pid, 'ec_proj_5_desc' ) ),
	array( 'title' => ec_get( $pid, 'ec_proj_6_title' ), 'desc' => ec_get( $pid, 'ec_proj_6_desc' ) ),
);
?>
<section class="problems-section">
	<div class="container">
		<div class="section-header section-header--center">
			<p class="eyebrow"><?php echo esc_html( ec_get( $pid, 'ec_proj_eyebrow' ) ); ?></p>
			<h2 class="section-title"><?php echo esc_html( ec_get( $pid, 'ec_proj_heading' ) ); ?></h2>
			<p class="section-intro"><?php echo esc_html( ec_get( $pid, 'ec_proj_intro' ) ); ?></p>
		</div>
		<div class="problem-cards-grid problem-cards-grid--3">
			<?php foreach ( $project_types as $card ) : ?>
				<div class="problem-card">
					<div>
						<h3 class="problem-card__title"><?php echo esc_html( $card['title'] ); ?></h3>
						<p class="problem-card__desc"><?php echo esc_html( $card['desc'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div style="text-align:center;margin-top:3rem;">
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-pill" style="display:inline-flex;">
				Talk About Your Project
				<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
			</a>
		</div>
	</div>
</section>

<!-- ── 5. PROCESS STEPS ───────────────────────────────────────────────────── -->
<?php
$process_steps = array(
	array( 'step' => '1', 'title' => ec_get( $pid, 'ec_proc_1_title' ), 'desc' => ec_get( $pid, 'ec_proc_1_desc' ) ),
	array( 'step' => '2', 'title' => ec_get( $pid, 'ec_proc_2_title' ), 'desc' => ec_get( $pid, 'ec_proc_2_desc' ) ),
	array( 'step' => '3', 'title' => ec_get( $pid, 'ec_proc_3_title' ), 'desc' => ec_get( $pid, 'ec_proc_3_desc' ) ),
	array( 'step' => '4', 'title' => ec_get( $pid, 'ec_proc_4_title' ), 'desc' => ec_get( $pid, 'ec_proc_4_desc' ) ),
	array( 'step' => '5', 'title' => ec_get( $pid, 'ec_proc_5_title' ), 'desc' => ec_get( $pid, 'ec_proc_5_desc' ) ),
	array( 'step' => '6', 'title' => ec_get( $pid, 'ec_proc_6_title' ), 'desc' => ec_get( $pid, 'ec_proc_6_desc' ) ),
);
?>
<section class="process-section">
	<div class="process-glow" aria-hidden="true"></div>
	<div class="container">
		<div class="section-header section-header--center section-header--white">
			<p class="eyebrow eyebrow--light"><?php echo esc_html( ec_get( $pid, 'ec_proc_eyebrow' ) ); ?></p>
			<h2 class="section-title section-title--white"><?php echo esc_html( ec_get( $pid, 'ec_proc_heading' ) ); ?></h2>
			<p style="color:var(--color-slate-300);max-width:40rem;margin-inline:auto;"><?php echo esc_html( ec_get( $pid, 'ec_proc_intro' ) ); ?></p>
		</div>
		<div class="process-cards-grid process-cards-grid--3">
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

<!-- ── 6. WHY CHOOSE D&D ──────────────────────────────────────────────────── -->
<?php
$why_items = array(
	array(
		'title' => ec_get( $pid, 'ec_why_1_title' ),
		'desc'  => ec_get( $pid, 'ec_why_1_desc' ),
		'icon'  => 'M12 3l8 3v5c0 5.25-3.5 10.15-8 11.5C7.5 21.15 4 16.25 4 11V6l8-3Z',
		'link'  => array( 'label' => 'Verify CCB License &rarr;', 'href' => 'https://search.ccb.state.or.us/search/' ),
	),
	array(
		'title' => ec_get( $pid, 'ec_why_2_title' ),
		'desc'  => ec_get( $pid, 'ec_why_2_desc' ),
		'icon'  => 'M9 3h6a1 1 0 0 1 1 1v1H8V4a1 1 0 0 1 1-1Z M7 6h10v14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V6Z M9 12.5l2 2 4-4.5',
	),
	array(
		'title' => ec_get( $pid, 'ec_why_3_title' ),
		'desc'  => ec_get( $pid, 'ec_why_3_desc' ),
		'icon'  => 'M5 21V7l7-4 7 4v14M3 21h18M9 21v-4h6v4',
	),
	array(
		'title' => ec_get( $pid, 'ec_why_4_title' ),
		'desc'  => ec_get( $pid, 'ec_why_4_desc' ),
		'icon'  => 'M6 7c0-1.7 2.7-3 6-3s6 1.3 6 3v10c0 1.7-2.7 3-6 3s-6-1.3-6-3V7Z M6 7c0 1.7 2.7 3 6 3s6-1.3 6-3',
	),
	array(
		'title' => ec_get( $pid, 'ec_why_5_title' ),
		'desc'  => ec_get( $pid, 'ec_why_5_desc' ),
		'icon'  => 'M3 21V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v16M9 21v-6h6v6M3 21h18',
	),
);
?>
<section class="why-site-prep-section">
	<div class="container">
		<div class="why-split-grid">
			<div>
				<h2 class="section-title"><?php echo esc_html( ec_get( $pid, 'ec_why_heading' ) ); ?></h2>
				<p class="lede" style="margin-top:1.25rem;"><?php echo esc_html( ec_get( $pid, 'ec_why_intro' ) ); ?></p>
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
					alt="D&D Land Works excavation work in Lane County, Oregon"
					loading="lazy"
					style="width:100%;border-radius:var(--radius-brand-card);object-fit:cover;aspect-ratio:3/4;box-shadow:0 20px 40px rgba(0,0,0,.15);"
				/>
			</div>
		</div>
	</div>
</section>

<!-- ── 7. SERVICE AREAS ───────────────────────────────────────────────────── -->
<?php
$service_areas = array(
	array( 'label' => 'Springfield',   'href' => home_url( '/locations/springfield' ) ),
	array( 'label' => 'Cottage Grove', 'href' => home_url( '/locations/cottage-grove' ) ),
	array( 'label' => 'Junction City', 'href' => home_url( '/locations/junction-city' ) ),
	array( 'label' => 'Creswell',      'href' => home_url( '/locations/creswell' ) ),
	array( 'label' => 'Veneta',        'href' => home_url( '/locations/veneta' ) ),
	array( 'label' => 'Florence',      'href' => home_url( '/locations/florence' ) ),
	array( 'label' => 'Oakridge',      'href' => home_url( '/locations/oakridge' ) ),
	array( 'label' => 'Coburg',        'href' => home_url( '/locations/coburg' ) ),
	array( 'label' => 'Lowell',        'href' => home_url( '/locations/lowell' ) ),
);
$pin_icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1rem;width:1rem;flex-shrink:0;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z"/><circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none"/></svg>';
?>
<section class="service-areas-section">
	<div class="container">
		<div class="section-header section-header--center">
			<p class="eyebrow"><?php echo esc_html( ec_get( $pid, 'ec_areas_eyebrow' ) ); ?></p>
			<h2 class="section-title"><?php echo esc_html( ec_get( $pid, 'ec_areas_heading' ) ); ?></h2>
			<p class="section-intro"><?php echo esc_html( ec_get( $pid, 'ec_areas_intro' ) ); ?></p>
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

<!-- ── 8. FAQ ─────────────────────────────────────────────────────────────── -->
<?php
$faqs = array(
	array(
		'q' => 'What does an excavation contractor do in Eugene?',
		'a' => 'An excavation contractor handles the digging, trenching, and earth-moving work that happens before a structure gets built or a utility gets installed. In Eugene, that includes foundation excavation for new homes and ADUs, trenching for water, sewer, and conduit, drainage work, and septic excavation on rural Lane County lots. D&D Land Works is licensed and bonded under Oregon CCB #261742 and DEQ certified for septic work.',
	),
	array(
		'q' => 'How much does excavation cost in Eugene, Oregon?',
		'a' => 'Foundation excavation runs $3,000–$12,000 for a typical residential footprint. Trenching runs $20–$60 per linear foot. Septic excavation runs $2,000–$8,000. Drainage work runs $1,500–$10,000 or more. Full site preparation with clearing and grading runs $15,000–$50,000 depending on lot conditions. Malpass clay in west Eugene adds 25–50% to baseline cost on affected sites. A free on-site estimate is the accurate number for a specific project.',
	),
	array(
		'q' => 'Do I need a permit for excavation in Eugene or Lane County?',
		'a' => 'Foundation excavation under an active building permit is generally exempt from a separate grading permit. Trenching for utility connections may need right-of-way permits. Grading or fill work moving more than roughly 50 cubic yards triggers a Lane County Grading and Fill Permit. Projects disturbing 1 or more acres require an Oregon DEQ 1200-C Construction Stormwater Permit. Confirm with Lane County LMD at 541-682-4651 before work starts.',
	),
	array(
		'q' => 'How long does excavation take?',
		'a' => 'A standard residential foundation excavation runs one to three days. Utility trenching depends on run length and soil conditions. Site preparation projects run three days to several weeks depending on scope. Eugene\'s clay soils and the wet season (October through May) can extend timelines when ground is saturated.',
	),
	array(
		'q' => 'What is the 811 utility locate requirement in Oregon?',
		'a' => 'Oregon law requires calling 811 and waiting for all underground utilities to be marked before any digging begins. Allow two to three business days for locators to respond. D&D Land Works coordinates utility locates as a standard part of every job.',
	),
	array(
		'q' => 'Does excavation work depend on the season in Eugene?',
		'a' => 'Yes. Lane County\'s rainy season (October through May) saturates Willamette Valley clay quickly, making excavation slower and more expensive. Dry-season work (May through October) is generally faster and costs less. Wet-season jobs are possible but require tighter erosion controls and more schedule buffer.',
	),
	array(
		'q' => 'Can D&D Land Works handle both excavation and site preparation on the same lot?',
		'a' => 'Yes. Clearing, grading, foundation excavation, utility trenching, and drainage work often run in sequence on the same lot. One licensed crew handling the full scope avoids coordination gaps between contractors and ensures grades established during site prep carry through to the excavation elevations.',
	),
	array(
		'q' => 'Does D&D Land Works serve Springfield and Lane County?',
		'a' => 'Yes. D&D Land Works serves Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, and Lowell across Lane County. Call 541-401-8726 to confirm coverage for a specific address.',
	),
);

echo ddlw_faq( array( 'heading' => ec_get( $pid, 'ec_faq_heading' ) ), implode( '', array_map( function( $item ) {
	return '[faq_item q="' . esc_attr( $item['q'] ) . '"]' . esc_html( $item['a'] ) . '[/faq_item]';
}, $faqs ) ) );
?>

<!-- ── 9. RELATED SERVICES ──────────────────────────────────────────────── -->
<?php
$related_services = array(
	array( 'title' => 'Site Preparation',      'desc' => 'Clearing, grading, and compaction that gets a raw lot ready before excavation starts.',              'href' => home_url( '/services/site-preparation' ) ),
	array( 'title' => 'Grading &amp; Leveling', 'desc' => 'Shaping land to the right slope for drainage and a level build pad.',                               'href' => home_url( '/services/grading-leveling' ) ),
	array( 'title' => 'Foundation Excavation', 'desc' => 'Digging the footprint for foundations, footings, crawl spaces, and basements.',                      'href' => home_url( '/services/foundation-excavation' ) ),
	array( 'title' => 'Drainage Excavation',   'desc' => 'French drains, swales, and catch basins to correct standing water on Lane County properties.',        'href' => home_url( '/services/drainage-excavation' ) ),
);
?>
<section style="background:#fff;border-top:1px solid var(--color-slate-100);padding-block:5rem;">
	<div class="container">
		<h2 class="section-title" style="text-align:center;margin-bottom:3rem;"><?php echo esc_html( ec_get( $pid, 'ec_related_heading' ) ); ?></h2>
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

<!-- ── 10. CTA ──────────────────────────────────────────────────────────── -->
<?php
echo ddlw_cta_block( array(
	'title'    => ec_get( $pid, 'ec_cta_title' ),
	'subtitle' => ec_get( $pid, 'ec_cta_subtitle' ),
) );

get_footer();

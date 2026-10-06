<?php
/**
 * Custom Gutenberg blocks for the D&D Land Works homepage.
 *
 * Dependency-free: no build step, no JSX, no webpack. PHP render callbacks
 * produce the same HTML front-page.php used to output. Editor JS lives in
 * assets/js/blocks/homepage.js and is enqueued via ddlw_block_editor_assets()
 * in functions.php.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ─────────────────────────────────────────────────────────────────────────────
   BLOCK REGISTRATION
───────────────────────────────────────────────────────────────────────────── */

function ddlw_register_blocks() {

	// ── 1. Hero ───────────────────────────────────────────────────────────────
	register_block_type( 'ddlw/hero', array(
		'attributes'      => array(
			'eyebrow'  => array( 'type' => 'string', 'default' => 'Lane County, Oregon' ),
			'title'    => array( 'type' => 'string', 'default' => 'Excavation & Site Work for Lane County OR.' ),
			'subtitle' => array( 'type' => 'string', 'default' => 'Licensed contractor for site prep, grading, land clearing, drainage, septic, and utility work. Owner-operated. Free on-site estimates.' ),
		),
		'render_callback' => 'ddlw_block_hero',
	) );

	// ── 2. About / Owner-Operated ─────────────────────────────────────────────
	register_block_type( 'ddlw/about', array(
		'attributes'      => array(
			'eyebrow_label' => array( 'type' => 'string', 'default' => 'About D&D Land Works' ),
			'heading'       => array( 'type' => 'string', 'default' => 'Owner-Operated Excavation Contractor Serving Lane County, Oregon' ),
			'para1'         => array( 'type' => 'string', 'default' => 'David Deggelman works directly with property owners to understand what needs to be done. Every property is different. The ground, access, drainage, slope, and existing work can all change the job. We look at those conditions before deciding what work is needed.' ),
			'para2'         => array( 'type' => 'string', 'default' => 'D&D Land Works helps with excavation and site work across Lane County. This includes site preparation, brush clearing, grading, foundation excavation, drainage excavation, utility excavation, trenching, septic work, driveway repair, and slope stabilization.' ),
			'para3'         => array( 'type' => 'string', 'default' => 'We work with homeowners, property owners, builders, and commercial customers in Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, Lowell, and nearby Lane County communities. If you are not sure what your property needs, we can look at the site and talk through the work with you.' ),
		),
		'render_callback' => 'ddlw_block_about',
	) );

	// ── 3. Services Intro + Grid ──────────────────────────────────────────────
	register_block_type( 'ddlw/services-intro', array(
		'attributes'      => array(
			'eyebrow' => array( 'type' => 'string', 'default' => 'Our Services' ),
			'heading' => array( 'type' => 'string', 'default' => 'Complete Excavation & Site Preparation Services' ),
			'intro'   => array( 'type' => 'string', 'default' => 'Every property has different ground, access, drainage, and site needs. We help with the digging, clearing, grading, and other site work needed to move a project forward.' ),
		),
		'render_callback' => 'ddlw_block_services_intro',
	) );

	// ── 4. Common Property Problems (project types) ───────────────────────────
	register_block_type( 'ddlw/project-types', array(
		'attributes'      => array(
			'eyebrow'    => array( 'type' => 'string', 'default' => 'Common Property Problems' ),
			'heading'    => array( 'type' => 'string', 'default' => 'Problems We Help Property Owners Solve' ),
			'intro'      => array( 'type' => 'string', 'default' => 'Every property has its own challenges. You may need to clear land, fix standing water, repair a driveway, or prepare an area for construction. We look at the ground and the work needed before deciding what should be done.' ),
			'card1_title' => array( 'type' => 'string', 'default' => 'Land That Needs Clearing or Preparation' ),
			'card1_desc'  => array( 'type' => 'string', 'default' => 'If your property is covered with brush or has uneven ground, it may need some work before you can build or improve it. We can clear the area, excavate where needed, and prepare the ground for the next step.' ),
			'card2_title' => array( 'type' => 'string', 'default' => 'Standing Water and Poor Grading' ),
			'card2_desc'  => array( 'type' => 'string', 'default' => 'Water that collects around your home, driveway, or yard can make the ground muddy and hard to use. We can reshape the ground and improve the way water moves across the property.' ),
			'card3_title' => array( 'type' => 'string', 'default' => 'Drainage, Erosion, and Slopes' ),
			'card3_desc'  => array( 'type' => 'string', 'default' => 'Rain and runoff can move soil, damage slopes, and create wet areas. We can excavate, reshape, and regrade problem areas based on the ground and water conditions on your property.' ),
			'card4_title' => array( 'type' => 'string', 'default' => 'Damaged Driveways and Site Access' ),
			'card4_desc'  => array( 'type' => 'string', 'default' => 'Ruts, washouts, uneven ground, or poor access can make it hard to use your property. We can repair gravel driveways, reshape access areas, and do the excavation needed to improve the site.' ),
		),
		'render_callback' => 'ddlw_block_project_types',
	) );

	// ── 5. Process Steps ──────────────────────────────────────────────────────
	register_block_type( 'ddlw/process-steps', array(
		'attributes'      => array(
			'eyebrow'     => array( 'type' => 'string', 'default' => 'How It Works' ),
			'heading'     => array( 'type' => 'string', 'default' => 'How Your Excavation Project Gets Started' ),
			'intro'       => array( 'type' => 'string', 'default' => 'Every property is different. We start by talking with you, looking at the site, and understanding what needs to be done. Then we plan the work around the ground, access, drainage, and other site conditions.' ),
			'step1_title' => array( 'type' => 'string', 'default' => 'Talk About the Project' ),
			'step1_desc'  => array( 'type' => 'string', 'default' => "We start by talking with you about your property and what you need done. We'll discuss the area, access, and the type of excavation or site work you have in mind." ),
			'step2_title' => array( 'type' => 'string', 'default' => 'Look at the Property' ),
			'step2_desc'  => array( 'type' => 'string', 'default' => 'We look at the ground, slope, drainage, soil, access, and nearby structures or utilities. These conditions can change how the work needs to be done.' ),
			'step3_title' => array( 'type' => 'string', 'default' => 'Do the Site Work' ),
			'step3_desc'  => array( 'type' => 'string', 'default' => 'Once we know what the property needs, we complete the planned clearing, excavation, grading, trenching, drainage, or related work.' ),
			'step4_title' => array( 'type' => 'string', 'default' => 'Check the Finished Work' ),
			'step4_desc'  => array( 'type' => 'string', 'default' => 'When the work is done, we look over the area with the planned work in mind. We make sure the completed work matches what was discussed for the project.' ),
		),
		'render_callback' => 'ddlw_block_process_steps',
	) );

	// ── 6. Why Choose D&D Land Works ─────────────────────────────────────────
	register_block_type( 'ddlw/why-choose', array(
		'attributes'      => array(
			'heading'     => array( 'type' => 'string', 'default' => 'Why Choose D&D Land Works?' ),
			'intro'       => array( 'type' => 'string', 'default' => 'Every excavation project has different site conditions, access requirements, and work involved. D&D Land Works keeps the scope clear and brings relevant excavation, grading, and site preparation services together for residential and commercial projects.' ),
			'item1_title' => array( 'type' => 'string', 'default' => 'Licensed & Bonded' ),
			'item1_desc'  => array( 'type' => 'string', 'default' => 'D&D Land Works is licensed and bonded in Oregon under CCB #261742. Customers can verify the license through the official Oregon Construction Contractors Board lookup.' ),
			'item2_title' => array( 'type' => 'string', 'default' => 'Free Estimates' ),
			'item2_desc'  => array( 'type' => 'string', 'default' => 'We provide free estimates for excavation and site preparation projects. The scope can be discussed around the property, access, existing conditions, and work you need completed.' ),
			'item3_title' => array( 'type' => 'string', 'default' => 'Residential Excavation' ),
			'item3_desc'  => array( 'type' => 'string', 'default' => 'We handle excavation and site preparation for homeowners and property owners throughout Eugene, Springfield, and surrounding Lane County communities.' ),
			'item4_title' => array( 'type' => 'string', 'default' => 'Commercial Excavation' ),
			'item4_desc'  => array( 'type' => 'string', 'default' => 'We also handle excavation and site preparation for commercial customers, builders, and other property projects based on the required scope and site conditions.' ),
			'item5_title' => array( 'type' => 'string', 'default' => 'DEQ Certified for Septic Work' ),
			'item5_desc'  => array( 'type' => 'string', 'default' => 'D&D Land Works is DEQ certified for relevant septic installation and repair work, including excavation associated with applicable septic projects.' ),
		),
		'render_callback' => 'ddlw_block_why_choose',
	) );

	// ── 7. FAQ / Reviews (hardcoded Q&A, expose heading) ─────────────────────
	register_block_type( 'ddlw/reviews', array(
		'attributes'      => array(
			'heading' => array( 'type' => 'string', 'default' => 'Common Questions About Excavation Services' ),
		),
		'render_callback' => 'ddlw_block_reviews',
	) );

	// ── 8. Service Areas Section ──────────────────────────────────────────────
	register_block_type( 'ddlw/service-areas-section', array(
		'attributes'      => array(
			'eyebrow' => array( 'type' => 'string', 'default' => 'Our Service Area' ),
			'heading' => array( 'type' => 'string', 'default' => 'Excavation Services Throughout Lane County, Oregon' ),
			'intro'   => array( 'type' => 'string', 'default' => 'D&D Land Works provides excavation, grading, and site preparation for residential and commercial properties across Lane County, including Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, and Lowell.' ),
		),
		'render_callback' => 'ddlw_block_service_areas',
	) );

	// ── 9. Final CTA Block ────────────────────────────────────────────────────
	register_block_type( 'ddlw/cta-section', array(
		'attributes'      => array(
			'title'    => array( 'type' => 'string', 'default' => 'Get a Free Estimate From D&D Land Works' ),
			'subtitle' => array( 'type' => 'string', 'default' => 'Planning excavation, site preparation, grading, land clearing, drainage, trenching, foundation excavation, driveway repair, or septic work in Lane County? Contact D&D Land Works to discuss your property and project scope.' ),
		),
		'render_callback' => 'ddlw_block_cta_section',
	) );
}
add_action( 'init', 'ddlw_register_blocks' );


/* ─────────────────────────────────────────────────────────────────────────────
   RENDER CALLBACKS
   Each function uses ob_start / ob_get_clean and returns a string.
   Markup is a 1:1 copy of the original front-page.php sections.
───────────────────────────────────────────────────────────────────────────── */

/* ── 1. Hero ─────────────────────────────────────────────────────────────── */
function ddlw_block_hero( $attrs ) {
	$eyebrow  = isset( $attrs['eyebrow'] )  ? esc_html( $attrs['eyebrow'] )  : 'Lane County, OR';
	$title    = isset( $attrs['title'] )    ? esc_html( $attrs['title'] )    : 'Licensed Excavation Contractor in Lane County, Oregon';
	$subtitle = isset( $attrs['subtitle'] ) ? esc_html( $attrs['subtitle'] ) : '';

	ob_start();
	?>
<section class="hero">
	<div class="hero__bg-slideshow">
		<img src="<?php echo esc_url( ddlw_img( 'project-excavation-bucket.webp' ) ); ?>" alt="" aria-hidden="true" class="hero__bg-slide is-active" loading="eager" />
		<img src="<?php echo esc_url( ddlw_img( 'project-grading-driveway.webp' ) ); ?>" alt="" aria-hidden="true" class="hero__bg-slide" loading="lazy" />
		<img src="<?php echo esc_url( ddlw_img( 'project-finished-grading.webp' ) ); ?>" alt="" aria-hidden="true" class="hero__bg-slide" loading="lazy" />
	</div>
	<div class="hero__overlay"></div>
	<div class="container hero__inner">
		<p class="hero__eyebrow"><?php echo $eyebrow; ?></p>
		<h1 class="hero__title"><?php echo $title; ?></h1>
		<p class="hero__subtitle"><?php echo $subtitle; ?></p>
		<div class="hero__ctas">
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-cta">Request a Free Estimate</a>
			<a href="#services" class="btn-pill">
				Our Services
				<span class="btn-pill-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;">
						<path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/>
					</svg>
				</span>
			</a>
		</div>
	</div>
</section>
	<?php
	return ob_get_clean();
}

/* ── 2. About / Owner-Operated ───────────────────────────────────────────── */
function ddlw_block_about( $attrs ) {
	$eyebrow_label = isset( $attrs['eyebrow_label'] ) ? esc_html( $attrs['eyebrow_label'] ) : 'About D&amp;D Land Works';
	$heading       = isset( $attrs['heading'] )       ? esc_html( $attrs['heading'] )       : 'Owner-Operated Excavation Contractor Serving Lane County, Oregon';
	$para1         = isset( $attrs['para1'] )         ? esc_html( $attrs['para1'] )         : '';
	$para2         = isset( $attrs['para2'] )         ? esc_html( $attrs['para2'] )         : '';
	$para3         = isset( $attrs['para3'] )         ? esc_html( $attrs['para3'] )         : '';

	ob_start();
	?>
<section style="position:relative;background:#fff;overflow:hidden;padding:5rem 0 8rem;">

	<!-- Decorative blur blob -->
	<div aria-hidden="true" style="pointer-events:none;position:absolute;right:-8rem;top:-4rem;height:24rem;width:24rem;border-radius:9999px;background:rgba(59,130,246,.15);filter:blur(64px);"></div>

	<div class="container">
		<div style="display:grid;gap:3rem;align-items:center;grid-template-columns:1fr 1fr;">

			<!-- Text column -->
			<div>
				<div style="margin-bottom:1rem;display:flex;align-items:center;gap:0.5rem;">
					<img src="<?php echo esc_url( ddlw_img( 'logo.png' ) ); ?>" alt="" style="height:1.5rem;width:auto;" aria-hidden="true" />
					<p style="font-family:var(--font-display);font-weight:600;text-transform:uppercase;letter-spacing:0.1em;font-size:0.875rem;color:var(--color-brand-blue);">
						<?php echo $eyebrow_label; ?>
					</p>
				</div>
				<h2 style="font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(1.75rem,3vw,2.25rem);color:var(--color-ink);line-height:1.1;">
					<?php echo $heading; ?>
				</h2>
				<div style="margin-top:1.25rem;display:flex;flex-direction:column;gap:1rem;color:var(--color-slate-600);line-height:1.7;">
					<?php if ( $para1 ) : ?><p><?php echo $para1; ?></p><?php endif; ?>
					<?php if ( $para2 ) : ?><p><?php echo $para2; ?></p><?php endif; ?>
					<?php if ( $para3 ) : ?><p><?php echo $para3; ?></p><?php endif; ?>
				</div>
				<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn-pill" style="margin-top:2rem;display:inline-flex;">
					Learn More About D&amp;D Land Works
					<span class="btn-pill-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;">
							<path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/>
						</svg>
					</span>
				</a>
			</div>

			<!-- Image column -->
			<div style="position:relative;padding-bottom:1.5rem;">
				<img
					src="<?php echo esc_url( ddlw_img( 'project-excavation-bucket.webp' ) ); ?>"
					alt="D&amp;D Land Works excavation contractor working in Lane County, Oregon"
					style="width:100%;border-radius:1rem;object-fit:cover;aspect-ratio:4/3;box-shadow:0 20px 50px rgba(0,0,0,.18);"
					loading="lazy"
				/>
				<!-- CCB badge -->
				<div style="position:absolute;bottom:2.5rem;left:1.5rem;display:flex;align-items:center;gap:0.75rem;border-radius:0.75rem;background:var(--color-brand-blue);padding:0.75rem 1rem;color:#fff;box-shadow:0 8px 24px rgba(0,0,0,.18);">
					<span style="display:flex;height:2.25rem;width:2.25rem;flex-shrink:0;align-items:center;justify-content:center;border-radius:9999px;background:rgba(255,255,255,.15);">
						<svg xmlns="http://www.w3.org/2000/svg" style="height:1.25rem;width:1.25rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 3v5c0 5.25-3.5 10.15-8 11.5C7.5 21.15 4 16.25 4 11V6l8-3Z" />
						</svg>
					</span>
					<div style="line-height:1.2;">
						<p style="font-family:var(--font-display);font-weight:700;font-size:0.875rem;">CCB #<?php echo esc_html( ddlw_ccb_number() ); ?></p>
						<p style="font-size:0.75rem;color:rgba(255,255,255,.8);">Licensed &amp; Bonded</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
	<?php
	return ob_get_clean();
}

/* ── 3. Services Grid ────────────────────────────────────────────────────── */
function ddlw_block_services_intro( $attrs ) {
	$eyebrow = isset( $attrs['eyebrow'] ) ? esc_html( $attrs['eyebrow'] ) : 'Our Services';
	$heading = isset( $attrs['heading'] ) ? esc_html( $attrs['heading'] ) : 'Complete Excavation &amp; Site Preparation Services';
	$intro   = isset( $attrs['intro'] )   ? esc_html( $attrs['intro'] )   : '';

	$services = array(
		array(
			'title'       => 'Site Preparation',
			'description' => 'Before construction starts, the property may need clearing, digging, grading, or other ground work. We prepare the area based on what your project and property require.',
			'href'        => '/site-preparation-contractor-eugene-or',
			'icon'        => 'M9 20 4 18V4l5 2 6-2 5 2v14l-5-2-6 2Z M9 4v14M15 6v14',
		),
		array(
			'title'       => 'Land &amp; Brush Clearing',
			'description' => 'Brush, overgrowth, and unwanted vegetation can make it hard to use or work on a property. We clear areas so there is open ground for excavation, grading, or construction.',
			'href'        => '/land-clearing-services-eugene-or',
			'icon'        => 'M12 2 8 9h2l-3 6h3v6h4v-6h3l-3-6h2L12 2Z',
		),
		array(
			'title'       => 'Grading &amp; Leveling',
			'description' => 'Uneven ground can cause water to collect or make an area hard to use. We shape the ground to improve the surface and help water move where it should.',
			'href'        => '/land-grading-services-eugene-or',
			'icon'        => 'M3 17h4l4-9 4 5 3-4h3M17 6h3v3',
		),
		array(
			'title'       => 'Foundation Excavation',
			'description' => 'A building project may need an area dug out before the foundation work begins. We excavate the foundation area based on the plans and site conditions.',
			'href'        => '/foundation-excavation-eugene-or',
			'icon'        => 'M9 3h6a1 1 0 0 1 1 1v1H8V4a1 1 0 0 1 1-1Z M7 6h10v14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V6Z',
		),
		array(
			'title'       => 'Drainage Excavation',
			'description' => 'Water can cause problems around buildings, driveways, and other parts of a property. We dig channels and trenches where needed to help move water away from problem areas.',
			'href'        => '/drainage-installation-eugene-or',
			'icon'        => 'M12 3s6 7 6 11a6 6 0 1 1-12 0c0-4 6-11 6-11Z',
		),
		array(
			'title'       => 'Utility Excavation',
			'description' => 'Water, sewer, electrical, and other underground lines may need a trench before installation. We excavate the path needed for the utility work.',
			'href'        => '/utility-trenching-eugene-or',
			'icon'        => 'M14.7 6.3a4 4 0 0 1-5.6 5.6L4 17l3 3 5.1-5.1a4 4 0 0 1 5.6-5.6L21 6l-3-3-3.3 3.3Z',
		),
		array(
			'title'       => 'Trenching &amp; Backfill',
			'description' => 'A trench gives underground lines and other systems a place to go. We dig the trench and can backfill the area after the work is completed, based on the project scope.',
			'href'        => '/trenching-services-eugene-or',
			'icon'        => 'M9 3 5 21M15 3l4 18M12 8v2.5m0 4v2.5',
		),
		array(
			'title'       => 'Septic Installation &amp; Repair',
			'description' => 'Septic work can require excavation around the existing system or new system area. The work depends on the property, existing system, site conditions, and applicable requirements.',
			'href'        => '/septic-installation-lane-county-or',
			'icon'        => 'M6 7c0-1.7 2.7-3 6-3s6 1.3 6 3v10c0 1.7-2.7 3-6 3s-6-1.3-6-3V7Z M6 7c0 1.7 2.7 3 6 3s6-1.3 6-3',
		),
		array(
			'title'       => 'Driveway Repair',
			'description' => 'Gravel driveways can develop potholes, ruts, washouts, and uneven areas. We can regrade and repair problem areas based on the condition of the driveway and ground.',
			'href'        => '/driveway-excavation-grading-eugene-or',
			'icon'        => 'M4 21V10l8-6 8 6v11M4 21h16M9 21v-6h6v6',
		),
		array(
			'title'       => 'Slope Stabilization',
			'description' => 'Slopes can change when soil moves or water causes erosion. We can excavate, reshape, and regrade areas where ground movement needs to be addressed.',
			'href'        => '/slope-stabilization-eugene-or',
			'icon'        => 'M3 20 9 8l4 6 2-3 6 9H3Z',
		),
	);

	ob_start();
	?>
<section id="services" style="position:relative;">

	<!-- Dark header band with background image -->
	<div style="position:relative;background:var(--color-ink);overflow:hidden;">
		<img src="<?php echo esc_url( ddlw_img( 'project-site-excavation.webp' ) ); ?>" alt="" aria-hidden="true" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:.45;" loading="lazy" />
		<div style="position:absolute;inset:0;background:linear-gradient(to bottom,rgba(15,20,30,.8),rgba(15,20,30,.7),rgba(15,20,30,1));"></div>
		<div style="position:relative;max-width:48rem;margin-inline:auto;padding:5rem 1rem 10rem;text-align:center;">
			<p style="font-family:var(--font-display);font-weight:600;text-transform:uppercase;letter-spacing:0.1em;font-size:0.875rem;color:var(--color-brand-blue-light);"><?php echo $eyebrow; ?></p>
			<h2 style="margin-top:0.5rem;font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(1.75rem,4vw,3rem);color:#fff;line-height:1.1;">
				<?php echo $heading; ?>
			</h2>
			<p style="margin-top:1.25rem;color:var(--color-slate-300);line-height:1.7;">
				<?php echo $intro; ?>
			</p>
		</div>
	</div>

	<!-- Service cards grid — negative margin pulls up over the dark band -->
	<div class="container" style="position:relative;margin-top:-8rem;padding-bottom:1.5rem;">
		<div style="display:grid;gap:1.25rem;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));">

			<?php foreach ( $services as $service ) : ?>
				<a href="<?php echo esc_url( home_url( $service['href'] ) ); ?>" class="card" style="display:flex;flex-direction:column;gap:0.75rem;text-decoration:none;color:inherit;transition:box-shadow .15s;">
					<span style="display:flex;height:2.75rem;width:2.75rem;flex-shrink:0;align-items:center;justify-content:center;border-radius:9999px;background:var(--color-brand-blue-light);color:var(--color-brand-blue);">
						<svg xmlns="http://www.w3.org/2000/svg" style="height:1.25rem;width:1.25rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
							<path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr( $service['icon'] ); ?>" />
						</svg>
					</span>
					<h3 style="font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.03em;font-size:0.9375rem;color:var(--color-ink);"><?php echo wp_kses_post( $service['title'] ); ?></h3>
					<p style="font-size:0.875rem;color:var(--color-slate-600);line-height:1.65;flex:1;"><?php echo esc_html( $service['description'] ); ?></p>
					<span style="margin-top:auto;font-size:0.8125rem;font-weight:600;color:var(--color-brand-blue);">Learn more &rarr;</span>
				</a>
			<?php endforeach; ?>

		</div>
	</div>

	<!-- Services section CTA row -->
	<div style="max-width:48rem;margin-inline:auto;padding:1rem 1rem 5rem;text-align:center;display:flex;flex-wrap:wrap;justify-content:center;gap:1rem;">
		<a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-cta">Explore Our Services</a>
		<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline-dark">Request a Free Estimate</a>
	</div>

</section>
	<?php
	return ob_get_clean();
}

/* ── 4. Common Property Problems ─────────────────────────────────────────── */
function ddlw_block_project_types( $attrs ) {
	$eyebrow    = isset( $attrs['eyebrow'] )    ? esc_html( $attrs['eyebrow'] )    : 'Common Property Problems';
	$heading    = isset( $attrs['heading'] )    ? esc_html( $attrs['heading'] )    : 'Problems We Help Property Owners Solve';
	$intro      = isset( $attrs['intro'] )      ? esc_html( $attrs['intro'] )      : '';
	$card1_title = isset( $attrs['card1_title'] ) ? esc_html( $attrs['card1_title'] ) : '';
	$card1_desc  = isset( $attrs['card1_desc'] )  ? esc_html( $attrs['card1_desc'] )  : '';
	$card2_title = isset( $attrs['card2_title'] ) ? esc_html( $attrs['card2_title'] ) : '';
	$card2_desc  = isset( $attrs['card2_desc'] )  ? esc_html( $attrs['card2_desc'] )  : '';
	$card3_title = isset( $attrs['card3_title'] ) ? esc_html( $attrs['card3_title'] ) : '';
	$card3_desc  = isset( $attrs['card3_desc'] )  ? esc_html( $attrs['card3_desc'] )  : '';
	$card4_title = isset( $attrs['card4_title'] ) ? esc_html( $attrs['card4_title'] ) : '';
	$card4_desc  = isset( $attrs['card4_desc'] )  ? esc_html( $attrs['card4_desc'] )  : '';

	$problem_cards = array(
		array(
			'title'       => $card1_title,
			'description' => $card1_desc,
			'icon'        => 'M3 20 9 8l4 6 2-3 6 9H3Z',
			'href'        => '/site-preparation-contractor-eugene-or',
			'link_label'  => 'Site Preparation',
		),
		array(
			'title'       => $card2_title,
			'description' => $card2_desc,
			'icon'        => 'M12 3s6 7 6 11a6 6 0 1 1-12 0c0-4 6-11 6-11Z',
			'href'        => '/land-grading-services-eugene-or',
			'link_label'  => 'Grading &amp; Leveling',
		),
		array(
			'title'       => $card3_title,
			'description' => $card3_desc,
			'icon'        => 'M3 17h4l4-9 4 5 3-4h3M17 6h3v3',
			'href'        => '/drainage-installation-eugene-or',
			'link_label'  => 'Drainage Excavation',
		),
		array(
			'title'       => $card4_title,
			'description' => $card4_desc,
			'icon'        => 'M9 3 5 21M15 3l4 18M12 8v2.5m0 4v2.5',
			'href'        => '/driveway-excavation-grading-eugene-or',
			'link_label'  => 'Driveway Repair',
		),
	);

	ob_start();
	?>
<section style="background:var(--color-slate-50);border-top:1px solid var(--color-slate-200);border-bottom:1px solid var(--color-slate-200);padding:5rem 0 7rem;">
	<div class="container">

		<div style="margin-bottom:3.5rem;text-align:center;">
			<p style="font-family:var(--font-display);font-weight:600;text-transform:uppercase;letter-spacing:0.1em;font-size:0.875rem;color:var(--color-brand-blue);"><?php echo $eyebrow; ?></p>
			<h2 style="margin-top:0.5rem;font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(1.75rem,3vw,2.25rem);color:var(--color-ink);">
				<?php echo $heading; ?>
			</h2>
			<p style="margin-top:1rem;color:var(--color-slate-600);max-width:40rem;margin-inline:auto;line-height:1.7;"><?php echo $intro; ?></p>
		</div>

		<div style="display:grid;gap:1.5rem;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));">

			<?php foreach ( $problem_cards as $card ) : ?>
				<div class="card" style="display:flex;gap:1.25rem;align-items:flex-start;">
					<span style="display:flex;height:3rem;width:3rem;flex-shrink:0;align-items:center;justify-content:center;border-radius:9999px;background:var(--color-brand-blue-light);color:var(--color-brand-blue);">
						<svg xmlns="http://www.w3.org/2000/svg" style="height:1.25rem;width:1.25rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
							<path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr( $card['icon'] ); ?>" />
						</svg>
					</span>
					<div>
						<h3 style="font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.04em;font-size:0.9375rem;color:var(--color-ink);"><?php echo $card['title']; ?></h3>
						<p style="margin-top:0.5rem;font-size:0.875rem;color:var(--color-slate-600);line-height:1.65;"><?php echo $card['description']; ?></p>
						<a href="<?php echo esc_url( home_url( $card['href'] ) ); ?>" style="margin-top:0.75rem;display:inline-flex;align-items:center;gap:0.25rem;font-size:0.875rem;font-weight:600;color:var(--color-brand-blue);text-decoration:none;">
							<?php echo wp_kses_post( $card['link_label'] ); ?>
							<svg xmlns="http://www.w3.org/2000/svg" style="height:0.875rem;width:0.875rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
								<path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/>
							</svg>
						</a>
					</div>
				</div>
			<?php endforeach; ?>

		</div>

		<div style="margin-top:3rem;text-align:center;">
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-pill" style="display:inline-flex;">
				Talk With Us About Your Property
				<span class="btn-pill-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;">
						<path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/>
					</svg>
				</span>
			</a>
		</div>

	</div>
</section>
	<?php
	return ob_get_clean();
}

/* ── 5. How It Works / Process Steps ────────────────────────────────────── */
function ddlw_block_process_steps( $attrs ) {
	$eyebrow     = isset( $attrs['eyebrow'] )     ? esc_html( $attrs['eyebrow'] )     : 'How It Works';
	$heading     = isset( $attrs['heading'] )     ? esc_html( $attrs['heading'] )     : 'How Your Excavation Project Gets Started';
	$intro       = isset( $attrs['intro'] )       ? esc_html( $attrs['intro'] )       : '';
	$step1_title = isset( $attrs['step1_title'] ) ? esc_html( $attrs['step1_title'] ) : 'Talk About the Project';
	$step1_desc  = isset( $attrs['step1_desc'] )  ? esc_html( $attrs['step1_desc'] )  : '';
	$step2_title = isset( $attrs['step2_title'] ) ? esc_html( $attrs['step2_title'] ) : 'Look at the Property';
	$step2_desc  = isset( $attrs['step2_desc'] )  ? esc_html( $attrs['step2_desc'] )  : '';
	$step3_title = isset( $attrs['step3_title'] ) ? esc_html( $attrs['step3_title'] ) : 'Do the Site Work';
	$step3_desc  = isset( $attrs['step3_desc'] )  ? esc_html( $attrs['step3_desc'] )  : '';
	$step4_title = isset( $attrs['step4_title'] ) ? esc_html( $attrs['step4_title'] ) : 'Check the Finished Work';
	$step4_desc  = isset( $attrs['step4_desc'] )  ? esc_html( $attrs['step4_desc'] )  : '';

	$process_steps = array(
		array( 'step' => '1', 'title' => $step1_title, 'detail' => $step1_desc ),
		array( 'step' => '2', 'title' => $step2_title, 'detail' => $step2_desc ),
		array( 'step' => '3', 'title' => $step3_title, 'detail' => $step3_desc ),
		array( 'step' => '4', 'title' => $step4_title, 'detail' => $step4_desc ),
	);

	ob_start();
	?>
<section style="position:relative;background:var(--color-ink);color:#fff;overflow:hidden;padding:5rem 0 7rem;">

	<!-- Decorative blur blob -->
	<div aria-hidden="true" style="pointer-events:none;position:absolute;right:0;top:0;height:30rem;width:30rem;border-radius:9999px;background:rgba(59,130,246,.1);filter:blur(64px);"></div>

	<div class="container" style="position:relative;">

		<div style="margin-bottom:4rem;text-align:center;">
			<p style="font-family:var(--font-display);font-weight:600;text-transform:uppercase;letter-spacing:0.1em;font-size:0.875rem;color:var(--color-brand-blue-light);"><?php echo $eyebrow; ?></p>
			<h2 style="margin-top:0.5rem;font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(1.75rem,3vw,2.25rem);color:#fff;">
				<?php echo $heading; ?>
			</h2>
			<p style="margin-top:1rem;color:var(--color-slate-300);max-width:40rem;margin-inline:auto;line-height:1.7;">
				<?php echo $intro; ?>
			</p>
		</div>

		<div style="display:grid;gap:1rem;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));">

			<?php foreach ( $process_steps as $item ) : ?>
				<div style="border-radius:1rem;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);padding:1.5rem 1.75rem;">
					<span style="display:flex;height:2.5rem;width:2.5rem;align-items:center;justify-content:center;border-radius:9999px;background:var(--color-safety-orange);font-family:var(--font-display);font-weight:700;color:#fff;font-size:0.875rem;">
						<?php echo esc_html( $item['step'] ); ?>
					</span>
					<p style="margin-top:1rem;font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.04em;font-size:0.875rem;color:#fff;"><?php echo $item['title']; ?></p>
					<p style="margin-top:0.5rem;font-size:0.875rem;color:var(--color-slate-300);line-height:1.65;"><?php echo $item['detail']; ?></p>
				</div>
			<?php endforeach; ?>

		</div>

		<div style="margin-top:3rem;text-align:center;">
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-cta">Discuss Your Project</a>
		</div>

	</div>
</section>
	<?php
	return ob_get_clean();
}

/* ── 6. Why Choose D&D Land Works ───────────────────────────────────────── */
function ddlw_block_why_choose( $attrs ) {
	$heading     = isset( $attrs['heading'] )     ? esc_html( $attrs['heading'] )     : 'Why Choose D&amp;D Land Works?';
	$intro       = isset( $attrs['intro'] )       ? esc_html( $attrs['intro'] )       : '';
	$item1_title = isset( $attrs['item1_title'] ) ? esc_html( $attrs['item1_title'] ) : 'Licensed &amp; Bonded';
	$item1_desc  = isset( $attrs['item1_desc'] )  ? esc_html( $attrs['item1_desc'] )  : '';
	$item2_title = isset( $attrs['item2_title'] ) ? esc_html( $attrs['item2_title'] ) : 'Free Estimates';
	$item2_desc  = isset( $attrs['item2_desc'] )  ? esc_html( $attrs['item2_desc'] )  : '';
	$item3_title = isset( $attrs['item3_title'] ) ? esc_html( $attrs['item3_title'] ) : 'Residential Excavation';
	$item3_desc  = isset( $attrs['item3_desc'] )  ? esc_html( $attrs['item3_desc'] )  : '';
	$item4_title = isset( $attrs['item4_title'] ) ? esc_html( $attrs['item4_title'] ) : 'Commercial Excavation';
	$item4_desc  = isset( $attrs['item4_desc'] )  ? esc_html( $attrs['item4_desc'] )  : '';
	$item5_title = isset( $attrs['item5_title'] ) ? esc_html( $attrs['item5_title'] ) : 'DEQ Certified for Septic Work';
	$item5_desc  = isset( $attrs['item5_desc'] )  ? esc_html( $attrs['item5_desc'] )  : '';

	$why_items = array(
		array(
			'title'       => $item1_title,
			'description' => $item1_desc,
			'icon'        => 'M12 3l8 3v5c0 5.25-3.5 10.15-8 11.5C7.5 21.15 4 16.25 4 11V6l8-3Z',
			'link_label'  => 'Verify CCB License &#x2197;',
			'link_href'   => 'https://search.ccb.state.or.us/search/',
			'link_target' => '_blank',
		),
		array(
			'title'       => $item2_title,
			'description' => $item2_desc,
			'icon'        => 'M9 3h6a1 1 0 0 1 1 1v1H8V4a1 1 0 0 1 1-1Z M7 6h10v14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V6Z M9 12.5l2 2 4-4.5',
			'link_label'  => '',
			'link_href'   => '',
		),
		array(
			'title'       => $item3_title,
			'description' => $item3_desc,
			'icon'        => 'M5 21V7l7-4 7 4v14M3 21h18M9 21v-4h6v4',
			'link_label'  => '',
			'link_href'   => '',
		),
		array(
			'title'       => $item4_title,
			'description' => $item4_desc,
			'icon'        => 'M3 21V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v16M9 21v-6h6v6M3 21h18',
			'link_label'  => '',
			'link_href'   => '',
		),
		array(
			'title'       => $item5_title,
			'description' => $item5_desc,
			'icon'        => 'M6 7c0-1.7 2.7-3 6-3s6 1.3 6 3v10c0 1.7-2.7 3-6 3s-6-1.3-6-3V7Z M6 7c0 1.7 2.7 3 6 3s6-1.3 6-3',
			'link_label'  => '',
			'link_href'   => '',
		),
	);

	ob_start();
	?>
<section style="background:#fff;border-bottom:1px solid var(--color-slate-100);padding:5rem 0 7rem;">
	<div class="container">
		<div style="display:grid;gap:3rem;align-items:center;grid-template-columns:1fr 1fr;">

			<!-- Left: text + feature list -->
			<div>
				<h2 style="font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(1.75rem,3vw,2.25rem);color:var(--color-ink);line-height:1.1;">
					<?php echo $heading; ?>
				</h2>
				<p style="margin-top:1.25rem;color:var(--color-slate-600);line-height:1.7;">
					<?php echo $intro; ?>
				</p>

				<ul style="margin-top:2.5rem;display:flex;flex-direction:column;gap:1.75rem;list-style:none;padding:0;margin-left:0;">

					<?php foreach ( $why_items as $item ) : ?>
						<li style="display:flex;align-items:flex-start;gap:1rem;">
							<span style="display:flex;height:2.5rem;width:2.5rem;flex-shrink:0;align-items:center;justify-content:center;border-radius:9999px;background:var(--color-brand-blue-light);color:var(--color-brand-blue);margin-top:0.125rem;">
								<svg xmlns="http://www.w3.org/2000/svg" style="height:1.25rem;width:1.25rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
									<path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr( $item['icon'] ); ?>" />
								</svg>
							</span>
							<div>
								<p style="font-family:var(--font-display);font-weight:700;color:var(--color-ink);"><?php echo $item['title']; ?></p>
								<p style="margin-top:0.25rem;font-size:0.875rem;color:var(--color-slate-600);line-height:1.65;"><?php echo $item['description']; ?></p>
								<?php if ( $item['link_href'] ) : ?>
									<a
										href="<?php echo esc_url( $item['link_href'] ); ?>"
										<?php if ( ! empty( $item['link_target'] ) ) : ?>target="<?php echo esc_attr( $item['link_target'] ); ?>" rel="noopener noreferrer"<?php endif; ?>
										style="margin-top:0.25rem;display:inline-block;font-size:0.875rem;font-weight:600;color:var(--color-brand-blue);text-decoration:none;"
									>
										<?php echo wp_kses_post( $item['link_label'] ); ?>
									</a>
								<?php endif; ?>
							</div>
						</li>
					<?php endforeach; ?>

				</ul>

				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-pill" style="margin-top:2.5rem;display:inline-flex;">
					Request a Free Estimate
					<span class="btn-pill-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;">
							<path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/>
						</svg>
					</span>
				</a>
			</div>

			<!-- Right: image -->
			<div style="position:relative;">
				<img
					src="<?php echo esc_url( ddlw_img( 'project-grading-driveway.webp' ) ); ?>"
					alt="D&amp;D Land Works excavation and site work in Lane County, Oregon"
					style="width:100%;border-radius:1rem;object-fit:cover;aspect-ratio:3/4;box-shadow:0 20px 50px rgba(0,0,0,.18);"
					loading="lazy"
				/>
			</div>

		</div>
	</div>
</section>
	<?php
	return ob_get_clean();
}

/* ── 7. FAQ / Reviews Section ────────────────────────────────────────────── */
function ddlw_block_reviews( $attrs ) {
	$heading = isset( $attrs['heading'] ) ? esc_html( $attrs['heading'] ) : 'Common Questions About Excavation Services';

	$faqs = array(
		array(
			'question' => 'What Does an Excavation Contractor Do?',
			'answer'   => 'An excavation contractor prepares and changes ground for construction, drainage, utilities, foundations, access, septic work, and other property projects. D&D Land Works handles excavation, clearing, grading, trenching, driveway repair, septic work, and related site preparation throughout Lane County.',
		),
		array(
			'question' => 'Does D&D Land Works Handle Septic Excavation?',
			'answer'   => 'Yes. D&D Land Works handles septic installation and repair and is DEQ certified for applicable septic work. Excavation is part of most septic projects, including system installation, repair, and access work. The scope depends on the property, existing system conditions, site access, and applicable DEQ requirements.',
		),
		array(
			'question' => 'What Should I Have Ready Before Requesting an Excavation Estimate?',
			'answer'   => "It helps to know the property location, the type of work you need, site preparation, grading, foundation excavation, drainage, utility trenching, driveway repair, septic, or slope work, existing access conditions, and any project timing you're working around. If you have plans or project documents, those can help clarify the scope, but you can start by telling us about the property and the work you need.",
		),
		array(
			'question' => 'Is D&D Land Works Licensed and Bonded?',
			'answer'   => "Yes. D&D Land Works is licensed and bonded in Oregon under Construction Contractors Board license #261742. Customers can verify Oregon contractor licensing through the Oregon CCB's official license lookup before hiring an excavation contractor for their project.",
		),
		array(
			'question' => 'Does D&D Land Works Provide Free Estimates?',
			'answer'   => "Yes. D&D Land Works provides free estimates for excavation and site preparation projects. The estimate can be based on the property's existing conditions, access, planned work, excavation requirements, drainage, utilities, and other factors affecting the project scope.",
		),
	);

	// Build FAQ schema entities
	$faq_schema_entities = array();
	foreach ( $faqs as $faq ) {
		$faq_schema_entities[] = array(
			'@type'          => 'Question',
			'name'           => $faq['question'],
			'acceptedAnswer' => array(
				'@type' => 'Answer',
				'text'  => $faq['answer'],
			),
		);
	}

	ob_start();
	?>
<section style="padding:5rem 0 7rem;background:#fff;">
	<div class="container" style="max-width:48rem;">

		<h2 style="font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(1.75rem,3vw,2.25rem);color:var(--color-ink);text-align:center;margin-bottom:3rem;">
			<?php echo $heading; ?>
		</h2>

		<?php foreach ( $faqs as $faq ) : ?>
			<details class="card faq-item" style="margin-bottom:0.75rem;">
				<summary style="font-family:var(--font-display);font-weight:700;color:var(--color-ink);cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:1rem;list-style:none;">
					<?php echo esc_html( $faq['question'] ); ?>
					<svg xmlns="http://www.w3.org/2000/svg" style="height:1.25rem;width:1.25rem;flex-shrink:0;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
					</svg>
				</summary>
				<p style="margin-top:0.75rem;font-size:0.9375rem;color:var(--color-slate-600);line-height:1.7;"><?php echo esc_html( $faq['answer'] ); ?></p>
			</details>
		<?php endforeach; ?>

	</div>
</section>
<script type="application/ld+json"><?php echo wp_json_encode( array( '@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $faq_schema_entities ) ); ?></script>
	<?php
	return ob_get_clean();
}

/* ── 8. Local Service Areas ──────────────────────────────────────────────── */
function ddlw_block_service_areas( $attrs ) {
	$eyebrow = isset( $attrs['eyebrow'] ) ? esc_html( $attrs['eyebrow'] ) : 'Our Service Area';
	$heading = isset( $attrs['heading'] ) ? esc_html( $attrs['heading'] ) : 'Excavation Services Throughout Lane County, Oregon';
	$intro   = isset( $attrs['intro'] )   ? esc_html( $attrs['intro'] )   : '';

	$other_areas = array(
		array( 'label' => 'Cottage Grove', 'href' => '/excavation-contractor-cottage-grove-or' ),
		array( 'label' => 'Junction City', 'href' => '/excavation-contractor-junction-city-or' ),
		array( 'label' => 'Creswell',      'href' => '/excavation-contractor-creswell-or' ),
		array( 'label' => 'Veneta',        'href' => '/excavation-contractor-veneta-or' ),
		array( 'label' => 'Florence',      'href' => '/excavation-contractor-florence-or' ),
		array( 'label' => 'Oakridge',      'href' => '/locations/oakridge' ),
		array( 'label' => 'Coburg',        'href' => '/excavation-contractor-coburg-or' ),
		array( 'label' => 'Lowell',        'href' => '/excavation-contractor-lowell-or' ),
	);

	ob_start();
	?>
<section style="background:var(--color-slate-50);padding:5rem 0 7rem;">
	<div class="container">

		<div style="margin-bottom:3.5rem;text-align:center;">
			<p style="font-family:var(--font-display);font-weight:600;text-transform:uppercase;letter-spacing:0.1em;font-size:0.875rem;color:var(--color-brand-blue);"><?php echo $eyebrow; ?></p>
			<h2 style="margin-top:0.5rem;font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(1.75rem,4vw,3rem);color:var(--color-ink);line-height:1.1;">
				<?php echo $heading; ?>
			</h2>
			<p style="margin-top:1.25rem;color:var(--color-slate-600);max-width:40rem;margin-inline:auto;line-height:1.7;">
				<?php echo $intro; ?>
			</p>
		</div>

		<div style="display:grid;gap:1.5rem;align-items:stretch;grid-template-columns:1fr 1fr;">

			<!-- Dark location list -->
			<div style="overflow:hidden;border-radius:1rem;background:var(--color-ink);box-shadow:0 8px 32px rgba(0,0,0,.18);">

				<!-- Eugene (primary / highlighted) -->
				<a href="<?php echo esc_url( home_url( '/excavation-contractor-eugene-or' ) ); ?>" style="display:flex;align-items:center;gap:0.75rem;background:var(--color-brand-blue);padding:1rem 1.5rem;color:#fff;text-decoration:none;transition:opacity .15s;">
					<svg xmlns="http://www.w3.org/2000/svg" style="height:1rem;width:1rem;flex-shrink:0;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z" />
						<circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none" />
					</svg>
					<span style="font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.06em;font-size:0.875rem;">Eugene, OR</span>
				</a>

				<!-- Springfield -->
				<a href="<?php echo esc_url( home_url( '/excavation-contractor-springfield-or' ) ); ?>" style="display:flex;align-items:center;gap:0.75rem;border-top:1px solid rgba(255,255,255,.1);padding:1rem 1.5rem;color:rgba(255,255,255,.7);text-decoration:none;transition:background .15s,color .15s;">
					<svg xmlns="http://www.w3.org/2000/svg" style="height:1rem;width:1rem;flex-shrink:0;color:rgba(255,255,255,.4);" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z" />
						<circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none" />
					</svg>
					<span style="font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.06em;font-size:0.875rem;">Springfield, OR</span>
				</a>

				<?php foreach ( $other_areas as $area ) : ?>
					<a href="<?php echo esc_url( home_url( $area['href'] ) ); ?>" style="display:flex;align-items:center;gap:0.75rem;border-top:1px solid rgba(255,255,255,.1);padding:1rem 1.5rem;color:rgba(255,255,255,.7);text-decoration:none;transition:background .15s,color .15s;">
						<svg xmlns="http://www.w3.org/2000/svg" style="height:1rem;width:1rem;flex-shrink:0;color:rgba(255,255,255,.4);" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z" />
							<circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none" />
						</svg>
						<span style="font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.06em;font-size:0.875rem;"><?php echo esc_html( $area['label'] ); ?>, OR</span>
					</a>
				<?php endforeach; ?>

			</div>

			<!-- Google Maps embed -->
			<div style="overflow:hidden;border-radius:1rem;border:1px solid var(--color-slate-200);box-shadow:0 4px 16px rgba(0,0,0,.08);min-height:25rem;">
				<iframe
					title="D&amp;D Land Works service area map, Lane County, Oregon"
					src="https://maps.google.com/maps?q=Lane+County,+Oregon&z=9&output=embed"
					width="100%"
					height="100%"
					style="border:0;display:block;min-height:25rem;"
					loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"
				></iframe>
			</div>

		</div>

	</div>
</section>
	<?php
	return ob_get_clean();
}

/* ── 9. Final CTA Block ──────────────────────────────────────────────────── */
function ddlw_block_cta_section( $attrs ) {
	$title    = isset( $attrs['title'] )    ? esc_html( $attrs['title'] )    : 'Get a Free Estimate From D&amp;D Land Works';
	$subtitle = isset( $attrs['subtitle'] ) ? esc_html( $attrs['subtitle'] ) : '';

	// Business JSON-LD schema (emitted once, here at the bottom of the page)
	$business_schema = array(
		'@context'       => 'https://schema.org',
		'@type'          => 'GeneralContractor',
		'additionalType' => 'https://schema.org/HomeAndConstructionBusiness',
		'@id'            => 'https://www.ddlandworks.com/#business',
		'name'           => 'D&D Land Works',
		'url'            => 'https://www.ddlandworks.com/',
		'telephone'      => '+1-541-401-8726',
		'email'          => 'david@ddlandworks.com',
		'founder'        => array( '@type' => 'Person', 'name' => 'David Deggelman' ),
		'identifier'     => array(
			'@type'      => 'PropertyValue',
			'propertyID' => 'Oregon CCB License',
			'value'      => '261742',
		),
		'hasCredential'  => array(
			'@type'              => 'EducationalOccupationalCredential',
			'credentialCategory' => 'certification',
			'name'               => 'DEQ Certified',
			'recognizedBy'       => array(
				'@type' => 'GovernmentOrganization',
				'name'  => 'Oregon Department of Environmental Quality',
			),
		),
		'address'        => array(
			'@type'          => 'PostalAddress',
			'addressRegion'  => 'OR',
			'addressCountry' => 'US',
		),
		'areaServed'     => array(
			'Lane County, Oregon',
			'Eugene, Oregon',
			'Springfield, Oregon',
			'Cottage Grove, Oregon',
			'Junction City, Oregon',
			'Creswell, Oregon',
			'Veneta, Oregon',
			'Florence, Oregon',
			'Oakridge, Oregon',
			'Coburg, Oregon',
			'Lowell, Oregon',
		),
	);

	ob_start();
	?>
<section class="cta-block">
	<div class="container">
		<div class="cta-block__inner">
			<h2><?php echo $title; ?></h2>
			<p><?php echo $subtitle; ?> Call <?php echo esc_html( ddlw_phone() ); ?> or email <?php echo esc_html( ddlw_email() ); ?>.</p>
			<div class="cta-block__actions">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-pill cta-block__pill">
					Request Your Free Estimate
					<span class="btn-pill-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;">
							<path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/>
						</svg>
					</span>
				</a>
				<a href="<?php echo esc_url( ddlw_phone_href() ); ?>" class="hero__phone">
					<span class="hero__phone-badge">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="height:1.1rem;width:1.1rem;">
							<path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3c0-.6.4-1 1-1h3.2c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z"/>
						</svg>
					</span>
					<span class="hero__phone-text">
						<small>Call us any time</small>
						<strong><?php echo esc_html( ddlw_phone() ); ?></strong>
					</span>
				</a>
			</div>
		</div>
	</div>
	<img src="<?php echo esc_url( ddlw_img( 'ctaimage.png' ) ); ?>" alt="" aria-hidden="true" class="cta-block__image" />
</section>
<script type="application/ld+json"><?php echo wp_json_encode( $business_schema ); ?></script>
	<?php
	return ob_get_clean();
}

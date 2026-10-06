<?php
/**
 * Template Name: Service Page
 *
 * Renders a service page from the structured content arrays in
 * inc/service-content.php and inc/service-content-additional.php.
 * Detects the current page slug, fetches the matching content block,
 * and renders each section by type. Falls back to a generic hero +
 * page content if no content block is found for the slug.
 */

get_header();

$slug = get_post_field( 'post_name', get_the_ID() );

$data = null;
if ( function_exists( 'ddlw_service_content' ) ) {
	$data = ddlw_service_content( $slug );
}
if ( ! $data && function_exists( 'ddlw_service_content_additional' ) ) {
	$data = ddlw_service_content_additional( $slug );
}

/* ── Hero ─────────────────────────────────────────────────────────────────── */
if ( $data ) {
	$h = $data['hero'];
	echo ddlw_hero( array(
		'eyebrow'         => isset( $h['eyebrow'] ) ? $h['eyebrow'] : 'Lane County, OR',
		'title'           => $h['title'],
		'subtitle'        => isset( $h['subtitle'] ) ? $h['subtitle'] : '',
		'primary_label'   => 'Free Estimate',
		'primary_href'    => home_url( '/contact' ),
		'secondary_label' => 'Call ' . ddlw_phone(),
		'secondary_href'  => ddlw_phone_href(),
		'images'          => 'project-excavation-bucket.webp,project-grading-driveway.webp',
	) );
} else {
	while ( have_posts() ) : the_post();
	echo ddlw_hero( array(
		'eyebrow'  => 'Lane County, OR',
		'title'    => get_the_title(),
		'subtitle' => get_the_excerpt(),
		'images'   => 'project-excavation-bucket.webp,project-grading-driveway.webp',
	) );
	endwhile;
}

/* ── Sections ─────────────────────────────────────────────────────────────── */
if ( $data && ! empty( $data['sections'] ) ) {
	foreach ( $data['sections'] as $section ) {
		$type = isset( $section['type'] ) ? $section['type'] : '';

		switch ( $type ) {

			/* ── Intro: two-column about-style split ─────────────────────── */
			case 'intro':
				$intro_img = ! empty( $section['image'] ) ? $section['image'] : 'project-excavation-bucket.webp';
				?>
				<section class="about-section">
					<div class="about-glow" aria-hidden="true"></div>
					<div class="container about-inner">
						<div class="about-grid">
							<div class="about-text">
								<?php if ( ! empty( $section['eyebrow'] ) ) : ?>
								<div class="about-eyebrow">
									<img src="<?php echo esc_url( ddlw_img( 'logo.png' ) ); ?>" alt="" aria-hidden="true" class="about-eyebrow__logo" />
									<p class="eyebrow"><?php echo esc_html( $section['eyebrow'] ); ?></p>
								</div>
								<?php endif; ?>
								<h2 class="section-title"><?php echo esc_html( $section['heading'] ); ?></h2>
								<div class="about-body">
									<?php echo wp_kses_post( $section['body'] ); ?>
								</div>
								<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn-pill" style="margin-top:2rem;display:inline-flex;">
									Learn More About D&amp;D Land Works
									<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
								</a>
							</div>
							<div class="about-img-wrap">
								<img
									src="<?php echo esc_url( ddlw_img( $intro_img ) ); ?>"
									alt="D&D Land Works — <?php echo esc_attr( $section['heading'] ); ?>"
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
				<?php
				break;

			/* ── Cards (light bg, slate-50, with eyebrow + pill CTA) ────── */
			case 'cards':
				?>
				<section style="background:var(--color-slate-50,#f8fafc);border-top:1px solid var(--color-slate-200,#e2e8f0);border-bottom:1px solid var(--color-slate-200,#e2e8f0);padding:5rem 0;">
					<div style="max-width:1100px;margin:0 auto;padding:0 24px;">
						<div style="text-align:center;margin-bottom:3rem;">
							<?php if ( ! empty( $section['eyebrow'] ) ) : ?>
							<p class="eyebrow" style="justify-content:center;"><?php echo esc_html( $section['eyebrow'] ); ?></p>
							<?php endif; ?>
							<h2 class="section-title" style="margin-top:0.5rem;"><?php echo esc_html( $section['heading'] ); ?></h2>
							<?php if ( ! empty( $section['intro'] ) ) : ?>
							<p style="font-size:1rem;color:var(--color-slate-700,#374151);max-width:680px;margin:1rem auto 0;line-height:1.7;">
								<?php echo esc_html( $section['intro'] ); ?>
							</p>
							<?php endif; ?>
						</div>
						<div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:1.5rem;">
							<?php foreach ( $section['items'] as $card ) : ?>
							<div class="card" style="display:flex;flex-direction:column;gap:0.75rem;padding:1.5rem;">
								<h3 style="font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.03em;font-size:1rem;color:var(--color-ink);margin:0;">
									<?php echo esc_html( $card['title'] ); ?>
								</h3>
								<p style="font-size:.875rem;color:var(--color-slate-600,#475569);line-height:1.65;margin:0;flex:1;">
									<?php echo esc_html( $card['desc'] ); ?>
								</p>
								<?php if ( ! empty( $card['href'] ) ) : ?>
								<a href="<?php echo esc_url( home_url( $card['href'] ) ); ?>" style="display:inline-flex;align-items:center;gap:4px;font-size:.875rem;font-weight:600;font-family:var(--font-display);color:var(--color-brand-blue);text-decoration:none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
									<?php echo esc_html( ! empty( $card['link_label'] ) ? $card['link_label'] : $card['title'] ); ?>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:.875rem;width:.875rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg>
								</a>
								<?php endif; ?>
							</div>
							<?php endforeach; ?>
						</div>
						<div style="text-align:center;margin-top:3rem;">
							<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-pill" style="display:inline-flex;">
								Talk About Your Property
								<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
							</a>
						</div>
					</div>
				</section>
				<?php
				break;

			/* ── Cards dark: services-intro layout (bg photo + overlap) ─── */
			case 'cards_dark':
				$cdark_img = ! empty( $section['image'] ) ? $section['image'] : 'project-site-excavation.webp';
				?>
				<section id="services" class="services-intro">
					<img src="<?php echo esc_url( ddlw_img( $cdark_img ) ); ?>" alt="" aria-hidden="true" class="services-intro__bg" loading="lazy" />
					<div class="services-intro__overlay"></div>
					<div class="container services-intro__inner">
						<p class="eyebrow eyebrow--light"><?php echo esc_html( ! empty( $section['eyebrow'] ) ? $section['eyebrow'] : 'Our Services' ); ?></p>
						<h2 class="section-title section-title--white"><?php echo esc_html( $section['heading'] ); ?></h2>
						<?php if ( ! empty( $section['intro'] ) ) : ?>
						<p><?php echo esc_html( $section['intro'] ); ?></p>
						<?php endif; ?>
					</div>
				</section>
				<?php
				$cdark_icons = array(
					'M12 2 8 9h2l-3 6h3v6h4v-6h3l-3-6h2L12 2Z',
					'M3 12a9 9 0 1 0 18 0 9 9 0 0 0-18 0M12 8v4',
					'M9 20 4 18V4l5 2 6-2 5 2v14l-5-2-6 2Z M9 4v14M15 6v14',
					'M4 6h16M4 10h16M4 14h8M4 18h8',
					'M3 17h4l4-9 4 5 3-4h3M17 6h3v3',
					'M5 21V7l7-4 7 4v14M3 21h18M9 21v-4h6v4',
				);
				?>
				<div class="container" style="margin-top:-8rem;position:relative;z-index:2;padding-bottom:1.5rem;">
					<div class="service-card-grid">
						<?php foreach ( $section['items'] as $ci => $card ) :
							$ci_icon = ! empty( $card['icon'] ) ? $card['icon'] : $cdark_icons[ $ci % count( $cdark_icons ) ];
						?>
						<a href="<?php echo esc_url( ! empty( $card['href'] ) ? home_url( $card['href'] ) : home_url( '/services' ) ); ?>" class="service-card">
							<span class="service-card__icon">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
									<path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr( $ci_icon ); ?>"/>
								</svg>
							</span>
							<h3 class="service-card__title" style="font-size:1rem;"><?php echo esc_html( $card['title'] ); ?></h3>
							<p class="service-card__desc"><?php echo esc_html( $card['desc'] ); ?></p>
							<span class="service-card__arrow">Learn more &#8594;</span>
						</a>
						<?php endforeach; ?>
					</div>
				</div>
				<div style="text-align:center;padding:1rem 1.25rem 5rem;display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;">
					<a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-cta">Explore Our Services</a>
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline">Request a Free Estimate</a>
				</div>
				<?php
				break;

			/* ── Steps: orange-circle numbers, dark bg, glow, bottom CTA ── */
			case 'steps':
				?>
				<section style="position:relative;background:var(--color-ink,#0f1923);color:#fff;overflow:hidden;padding:5rem 0;">
					<div style="pointer-events:none;position:absolute;right:0;top:0;height:480px;width:480px;border-radius:999px;background:rgba(29,111,196,0.1);filter:blur(80px);" aria-hidden="true"></div>
					<div style="position:relative;max-width:1100px;margin:0 auto;padding:0 24px;">
						<div style="text-align:center;margin-bottom:3rem;">
							<p style="font-family:var(--font-display);font-weight:600;text-transform:uppercase;letter-spacing:0.08em;font-size:.875rem;color:var(--color-brand-blue-light,#7ab8f5);margin-bottom:0.5rem;"><?php echo esc_html( ! empty( $section['eyebrow'] ) ? $section['eyebrow'] : 'What It Costs' ); ?></p>
							<h2 class="section-title section-title--white" style="margin-bottom:0;"><?php echo esc_html( $section['heading'] ); ?></h2>
							<?php if ( ! empty( $section['intro'] ) ) : ?>
							<p style="color:rgba(255,255,255,.72);max-width:42rem;margin:1rem auto 0;line-height:1.7;"><?php echo esc_html( $section['intro'] ); ?></p>
							<?php endif; ?>
						</div>
						<div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:24px;">
							<?php $i = 1; foreach ( $section['items'] as $step ) : ?>
							<div style="background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);border-radius:var(--radius-brand-card,12px);padding:1.75rem 1.5rem;">
								<span style="display:flex;height:2.5rem;width:2.5rem;align-items:center;justify-content:center;border-radius:999px;background:var(--color-safety-orange,#f97316);font-family:var(--font-display);font-weight:700;color:#fff;font-size:.875rem;"><?php echo $i++; ?></span>
								<p style="margin-top:1rem;font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.03em;font-size:.875rem;color:#fff;"><?php echo esc_html( $step['title'] ); ?></p>
								<p style="margin-top:0.5rem;font-size:.875rem;color:rgba(255,255,255,.72);line-height:1.65;"><?php echo esc_html( $step['desc'] ); ?></p>
							</div>
							<?php endforeach; ?>
						</div>
						<p style="margin-top:2.5rem;text-align:center;color:rgba(255,255,255,.72);max-width:36rem;margin-left:auto;margin-right:auto;line-height:1.7;">Free estimates, always. David comes out, walks the property, and tells you what the job takes. No charge for the visit and no pressure after it.</p>
						<div style="margin-top:2rem;display:flex;flex-wrap:wrap;justify-content:center;gap:1rem;">
							<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-cta">Get a Free Estimate</a>
							<a href="<?php echo esc_url( ddlw_phone_href() ); ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.3);color:#fff;">Call <?php echo esc_html( ddlw_phone() ); ?></a>
						</div>
					</div>
				</section>
				<?php
				break;

			/* ── Why: icon-list left, image right ───────────────────────── */
			case 'why':
				$why_img = ! empty( $section['image'] ) ? $section['image'] : 'project-grading-driveway.webp';
				$why_icons = array(
					'M3 20 9 8l4 6 2-3 6 9H3Z',
					'M12 2 8 9h2l-3 6h3v6h4v-6h3l-3-6h2L12 2Z',
					'M9 3 5 21M15 3l4 18M12 8v2.5m0 4v2.5',
					'M3 17h4l4-9 4 5 3-4h3M17 6h3v3',
					'M12 3s6 7 6 11a6 6 0 1 1-12 0c0-4 6-11 6-11Z',
					'M4 6h16M4 10h16M4 14h16M4 18h16',
				);
				?>
				<section style="background:#fff;border-bottom:1px solid var(--color-slate-100,#f1f5f9);padding:5rem 0;">
					<div style="max-width:1100px;margin:0 auto;padding:0 24px;">
						<div class="why-grid">
							<div>
								<h2 class="section-title"><?php echo esc_html( $section['heading'] ); ?></h2>
								<?php if ( ! empty( $section['intro'] ) ) : ?>
								<p class="lede" style="margin-top:1.25rem;"><?php echo esc_html( $section['intro'] ); ?></p>
								<?php endif; ?>
								<ul class="why-list">
									<?php foreach ( $section['items'] as $idx => $item ) :
										$icon_path = ! empty( $item['icon'] ) ? $item['icon'] : $why_icons[ $idx % count( $why_icons ) ];
									?>
									<li class="why-list__item">
										<span class="why-list__icon" style="display:flex;height:2.5rem;width:2.5rem;border-radius:999px;background:rgba(29,111,196,0.12);color:var(--color-brand-blue);align-items:center;justify-content:center;flex-shrink:0;margin-top:0.125rem;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="height:1.25rem;width:1.25rem;">
												<path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr( $icon_path ); ?>"/>
											</svg>
										</span>
										<div>
											<strong class="why-list__title"><?php echo esc_html( $item['title'] ); ?></strong>
											<p class="why-list__desc"><?php echo esc_html( $item['desc'] ); ?></p>
										</div>
									</li>
									<?php endforeach; ?>
								</ul>
								<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-pill" style="margin-top:2.5rem;display:inline-flex;">
									Talk About Your Project
									<span class="btn-pill-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="height:1rem;width:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"/></svg></span>
								</a>
							</div>
							<div class="why-img-wrap">
								<img
									src="<?php echo esc_url( ddlw_img( $why_img ) ); ?>"
									alt="D&D Land Works <?php echo esc_attr( $section['heading'] ); ?>"
									loading="lazy"
									class="why-img"
									style="min-height:28rem;"
								/>
							</div>
						</div>
					</div>
				</section>
				<?php
				break;

			/* ── FAQ ──────────────────────────────────────────────────────── */
			case 'faq':
				?>
				<section style="background:var(--color-slate-50,#f8fafc);padding:72px 0;">
					<div style="max-width:820px;margin:0 auto;padding:0 24px;">
						<h2 style="font-family:var(--font-display);font-size:clamp(1.5rem,3vw,2rem);font-weight:700;color:var(--color-ink);margin:0 0 40px;text-align:center;">
							<?php echo esc_html( $section['heading'] ); ?>
						</h2>
						<div style="display:flex;flex-direction:column;gap:16px;">
							<?php foreach ( $section['items'] as $faq ) : ?>
							<details style="background:#fff;border-radius:8px;box-shadow:0 1px 3px rgba(0,0,0,.07);overflow:hidden;">
								<summary style="font-family:var(--font-display);font-size:1.05rem;font-weight:700;color:var(--color-ink);padding:20px 24px;cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;gap:16px;">
									<?php echo esc_html( $faq['q'] ); ?>
									<svg style="flex-shrink:0;" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
								</summary>
								<div style="font-family:var(--font-body);font-size:.97rem;color:#374151;line-height:1.75;padding:0 24px 20px;">
									<?php echo esc_html( $faq['a'] ); ?>
								</div>
							</details>
							<?php endforeach; ?>
						</div>
					</div>
				</section>
				<?php
				break;

			/* ── Related services: 4-up link cards ───────────────────────── */
			case 'related':
				?>
				<section style="background:#fff;border-top:1px solid var(--color-slate-100,#f1f5f9);padding:5rem 0 6rem;">
					<div style="max-width:1200px;margin:0 auto;padding:0 24px;">
						<h2 style="font-family:var(--font-display);font-weight:900;font-size:clamp(1.4rem,2.5vw,1.875rem);text-transform:uppercase;letter-spacing:-0.01em;color:var(--color-ink);text-align:center;margin:0 0 3rem;">
							<?php echo esc_html( $section['heading'] ); ?>
						</h2>
						<div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:1.25rem;">
							<?php foreach ( $section['items'] as $rel ) : ?>
							<a href="<?php echo esc_url( home_url( $rel['href'] ) ); ?>" class="card" style="display:flex;flex-direction:column;gap:0.75rem;padding:1.5rem;text-decoration:none;" onmouseover="this.style.borderColor='var(--color-brand-blue,#1d6fc4)'" onmouseout="this.style.borderColor=''">
								<h3 style="font-family:var(--font-display);font-size:.875rem;font-weight:700;text-transform:uppercase;letter-spacing:0.04em;color:var(--color-ink);margin:0;">
									<?php echo esc_html( $rel['title'] ); ?>
								</h3>
								<p style="font-size:.875rem;color:var(--color-slate-600,#475569);line-height:1.65;margin:0;flex:1;">
									<?php echo esc_html( $rel['desc'] ); ?>
								</p>
								<span style="font-family:var(--font-display);font-size:.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.04em;color:var(--color-brand-blue,#1d6fc4);">
									Learn More &#8594;
								</span>
							</a>
							<?php endforeach; ?>
						</div>
					</div>
				</section>
				<?php
				break;

		} // end switch
	} // end foreach sections
}

/* ── Service Areas ────────────────────────────────────────────────────────── */
if ( $data ) :
$svc_areas = array(
	array( 'label' => 'Springfield',   'href' => ddlw_city_url( 'springfield' ) ),
	array( 'label' => 'Cottage Grove', 'href' => ddlw_city_url( 'cottage-grove' ) ),
	array( 'label' => 'Junction City', 'href' => ddlw_city_url( 'junction-city' ) ),
	array( 'label' => 'Creswell',      'href' => ddlw_city_url( 'creswell' ) ),
	array( 'label' => 'Veneta',        'href' => ddlw_city_url( 'veneta' ) ),
	array( 'label' => 'Florence',      'href' => ddlw_city_url( 'florence' ) ),
	array( 'label' => 'Oakridge',      'href' => ddlw_city_url( 'oakridge' ) ),
	array( 'label' => 'Coburg',        'href' => ddlw_city_url( 'coburg' ) ),
	array( 'label' => 'Lowell',        'href' => ddlw_city_url( 'lowell' ) ),
);
$pin = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="height:1rem;width:1rem;flex-shrink:0;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z"/><circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none"/></svg>';
?>
<section class="service-areas-section">
	<div class="container">
		<div class="section-header section-header--center">
			<p class="eyebrow">Our Service Area</p>
			<h2 class="section-title">Serving Eugene and All of Lane County</h2>
			<p class="section-intro">D&amp;D Land Works serves Eugene, Springfield, and communities across Lane County. Call to confirm availability for your location.</p>
		</div>
		<div class="areas-grid">
			<div class="areas-list">
				<a href="<?php echo esc_url( ddlw_city_url( 'eugene' ) ); ?>" class="areas-list__primary">
					<?php echo wp_kses_post( $pin ); ?>
					<span>Eugene, OR</span>
				</a>
				<?php foreach ( $svc_areas as $area ) : ?>
				<a href="<?php echo esc_url( $area['href'] ); ?>" class="areas-list__item">
					<?php echo wp_kses_post( $pin ); ?>
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
<?php
endif;

/* ── Final CTA ────────────────────────────────────────────────────────────── */
$cta_args = ddlw_service_cta( $slug );
if ( empty( $cta_args ) ) {
	$cta_args = array(
		'title'    => 'Get a Free Estimate for ' . get_the_title(),
		'subtitle' => 'Licensed, bonded, and DEQ certified. Serving Eugene, Springfield, and all of Lane County.',
	);
}
echo ddlw_cta_block( $cta_args );

get_footer();

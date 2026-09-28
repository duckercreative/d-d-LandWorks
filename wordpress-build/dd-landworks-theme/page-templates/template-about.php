<?php
/**
 * Template Name: About Page
 *
 * 1:1 port of site/src/pages/about.astro
 * Sections: Hero + stats + floating cards → How It All Started → What Sets Us Apart
 *           → The D&D Promise → Bottom CTA
 */

get_header();
?>

<!-- ── 1. HERO ──────────────────────────────────────────────────────────────── -->
<section class="about-hero-section" style="background:#fff;padding:4rem 0 5rem;overflow:hidden;">
	<div class="container">
		<div class="about-hero-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:center;">

			<!-- Left: text + stats + CTA -->
			<div>
				<span style="display:inline-flex;align-items:center;gap:0.5rem;border-radius:9999px;border:1px solid var(--color-slate-200);background:var(--color-slate-50);padding:0.375rem 1rem;font-size:0.75rem;font-weight:600;color:var(--color-slate-600);margin-bottom:1.5rem;">
					<span style="height:0.375rem;width:0.375rem;border-radius:9999px;background:var(--color-brand-blue);"></span>
					Owner-Operated &amp; Local
				</span>
				<h1 style="font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(2rem,4vw,3rem);color:var(--color-ink);line-height:1.1;">
					About D&amp;D Land Works &mdash;<br />
					<span style="color:var(--color-brand-blue);">Lane County's</span> Excavation Contractor
				</h1>
				<p style="margin-top:1.5rem;color:var(--color-slate-600);line-height:1.7;max-width:32rem;">
					D&amp;D Land Works is a local, owner-operated excavation and site prep contractor run by David Deggelman. We provide excavation, land clearing, grading, drainage, utility trenching, driveway work, and DEQ certified septic installation and repair across Lane County, Oregon.
				</p>

				<!-- Stats -->
				<div style="margin-top:2.5rem;display:flex;flex-wrap:wrap;gap:2rem;">
					<div>
						<p style="font-family:var(--font-display);font-weight:900;font-size:1.875rem;color:var(--color-brand-blue);">5 <span style="color:var(--color-safety-orange);">&#9733;</span></p>
						<p style="font-size:0.875rem;color:var(--color-slate-500);margin-top:0.125rem;">Google Reviews</p>
					</div>
					<div>
						<p style="font-family:var(--font-display);font-weight:900;font-size:1.875rem;color:var(--color-ink);">CCB<span style="color:var(--color-brand-blue);">#</span>261742</p>
						<p style="font-size:0.875rem;color:var(--color-slate-500);margin-top:0.125rem;">Licensed &amp; Bonded</p>
					</div>
					<div>
						<p style="font-family:var(--font-display);font-weight:900;font-size:1.875rem;color:var(--color-ink);">Lane <span style="color:var(--color-brand-blue);">Co.</span></p>
						<p style="font-size:0.875rem;color:var(--color-slate-500);margin-top:0.125rem;">Oregon, Primary Service Area</p>
					</div>
				</div>

				<!-- CTA buttons -->
				<div style="margin-top:2rem;display:flex;flex-wrap:wrap;gap:0.75rem;">
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-cta">Get a Free Estimate</a>
					<a href="https://search.ccb.state.or.us/search/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark">Verify CCB License</a>
				</div>
			</div>

			<!-- Right: image + floating cards -->
			<div style="position:relative;">
				<div style="overflow:hidden;border-radius:1rem;aspect-ratio:4/3;box-shadow:0 20px 50px rgba(0,0,0,.18);">
					<img
						src="<?php echo esc_url( ddlw_img( 'project-excavation-bucket.webp' ) ); ?>"
						alt="D&amp;D Land Works excavation contractor, Lane County Oregon"
						style="width:100%;height:100%;object-fit:cover;"
						loading="eager"
					/>
				</div>
				<!-- Floating card 1: CCB -->
				<div style="position:absolute;top:-1rem;right:-1rem;display:flex;align-items:center;gap:0.75rem;border-radius:0.75rem;background:#fff;border:1px solid var(--color-slate-200);box-shadow:0 8px 24px rgba(0,0,0,.12);padding:0.75rem 1rem;">
					<span style="display:flex;height:2.25rem;width:2.25rem;flex-shrink:0;align-items:center;justify-content:center;border-radius:9999px;background:var(--color-brand-blue-light);color:var(--color-brand-blue);">
						<svg xmlns="http://www.w3.org/2000/svg" style="height:1.25rem;width:1.25rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 3v5c0 5.25-3.5 10.15-8 11.5C7.5 21.15 4 16.25 4 11V6l8-3Z" /></svg>
					</span>
					<div style="line-height:1.2;">
						<p style="font-family:var(--font-display);font-weight:700;font-size:0.875rem;color:var(--color-ink);">CCB #<?php echo esc_html( ddlw_ccb_number() ); ?></p>
						<p style="font-size:0.75rem;color:var(--color-slate-500);">Licensed &amp; Bonded</p>
					</div>
				</div>
				<!-- Floating card 2: DEQ -->
				<div style="position:absolute;bottom:-1rem;left:-1rem;display:flex;align-items:center;gap:0.75rem;border-radius:0.75rem;background:var(--color-brand-blue);box-shadow:0 8px 24px rgba(0,0,0,.18);padding:0.75rem 1rem;color:#fff;">
					<span style="display:flex;height:2.25rem;width:2.25rem;flex-shrink:0;align-items:center;justify-content:center;border-radius:9999px;background:rgba(255,255,255,.15);">
						<svg xmlns="http://www.w3.org/2000/svg" style="height:1.25rem;width:1.25rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M6 7c0-1.7 2.7-3 6-3s6 1.3 6 3v10c0 1.7-2.7 3-6 3s-6-1.3-6-3V7Z M6 7c0 1.7 2.7 3 6 3s6-1.3 6-3" /></svg>
					</span>
					<div style="line-height:1.2;">
						<p style="font-family:var(--font-display);font-weight:700;font-size:0.875rem;">DEQ Certified</p>
						<p style="font-size:0.75rem;color:rgba(255,255,255,.7);">Septic Install &amp; Repair</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- ── 2. HOW IT ALL STARTED ────────────────────────────────────────────────── -->
<section style="background:var(--color-slate-50);border-top:1px solid var(--color-slate-200);border-bottom:1px solid var(--color-slate-200);padding:4rem 0 5rem;">
	<div class="container" style="max-width:48rem;text-align:center;">
		<h2 style="font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(1.75rem,3vw,2.5rem);color:var(--color-ink);margin-bottom:2rem;">How It All Started</h2>
		<div style="display:flex;flex-direction:column;gap:1.25rem;color:var(--color-slate-600);line-height:1.7;text-align:left;">
			<p>
				D&amp;D Land Works is owned and operated by <strong style="color:var(--color-ink);">David Deggelman</strong>, based in Springfield, Oregon. David built the business around one straightforward idea: show up, walk the property, and give a real estimate based on what's actually there, not a number pulled from a rate sheet.
			</p>
			<p>
				The work covers the full range of site prep and excavation, clearing land before a build, cutting a driveway, grading for drainage, trenching for utilities, and digging for septic systems. David is DEQ certified for septic installation and repair, which means one contractor handles both the excavation and the septic work, without bringing in a second crew.
			</p>
			<p>
				Springfield sits close enough to Eugene that both cities get the same scheduling, not one treated as an add-on to the other. Lane County is the core service area, from Junction City and Coburg in the north to Cottage Grove and Creswell in the south, and out to the coast near Florence when the project calls for it.
			</p>
			<p>
				The business is licensed and bonded under <strong style="color:var(--color-ink);">CCB #261742</strong>. Free estimates come standard. David walks every property in person before a number goes on paper.
			</p>
		</div>
	</div>
</section>

<!-- ── 3. WHAT SETS US APART ────────────────────────────────────────────────── -->
<section style="background:#fff;padding:4rem 0 5rem;">
	<div class="container">
		<div style="text-align:center;margin-bottom:3.5rem;">
			<h2 style="font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(1.75rem,3vw,2.5rem);color:var(--color-ink);">What Sets Us Apart</h2>
			<p style="margin-top:0.75rem;color:var(--color-slate-500);">The principles that guide every job</p>
		</div>
		<div style="display:grid;gap:1.5rem;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));">

			<?php
			$apart_items = array(
				array( 'num' => '01', 'title' => 'Free Estimates, In Person', 'body' => "David walks the property before quoting. Pricing reflects what's actually on the site, slope, access, ground conditions, and scope, not a flat rate." ),
				array( 'num' => '02', 'title' => 'Licensed, Bonded & DEQ Certified', 'body' => 'CCB #261742 covers excavation and site prep. DEQ certification covers septic installation and repair. One contractor handles both without a second crew.' ),
				array( 'num' => '03', 'title' => 'Local Knowledge', 'body' => 'Lane County properties vary, flat farmland, steep hillsides, rural access roads, tight urban lots. David has worked them all and knows what each type of site actually needs.' ),
				array( 'num' => '04', 'title' => 'Straight Communication', 'body' => 'The estimate describes the scope plainly. If conditions change during the job, the conversation happens before costs change, not after.' ),
			);
			foreach ( $apart_items as $item ) : ?>
				<div style="display:flex;gap:1.25rem;border-radius:1rem;border:1px solid var(--color-slate-200);background:var(--color-slate-50);padding:1.75rem;">
					<span style="display:flex;height:2.5rem;width:2.5rem;flex-shrink:0;align-items:center;justify-content:center;border-radius:0.75rem;background:var(--color-brand-blue);font-family:var(--font-display);font-weight:900;color:#fff;font-size:0.875rem;">
						<?php echo esc_html( $item['num'] ); ?>
					</span>
					<div>
						<h3 style="font-family:var(--font-display);font-weight:700;color:var(--color-ink);font-size:1rem;"><?php echo esc_html( $item['title'] ); ?></h3>
						<p style="margin-top:0.5rem;font-size:0.875rem;color:var(--color-slate-600);line-height:1.65;"><?php echo esc_html( $item['body'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</section>

<!-- ── 4. THE D&D PROMISE ───────────────────────────────────────────────────── -->
<section style="background:var(--color-ink);padding:4rem 0 5rem;">
	<div class="container">
		<div style="text-align:center;margin-bottom:3.5rem;">
			<h2 style="font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(1.75rem,3vw,2.5rem);color:#fff;">The D&amp;D Land Works Promise</h2>
			<p style="margin-top:0.75rem;color:var(--color-slate-400);">What you can expect from every project</p>
		</div>
		<div style="display:grid;gap:1.5rem;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));">

			<?php
			$promise_items = array(
				array(
					'icon' => 'M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z',
					'title' => 'Honest Estimates',
					'body'  => 'Pricing based on the actual site, no surprises after the quote.',
				),
				array(
					'icon' => 'M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z',
					'title' => 'On-Time Work',
					'body'  => 'We show up when we say we will and finish the job before moving to the next.',
				),
				array(
					'icon' => 'M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z',
					'title' => 'Clear Communication',
					'body'  => 'If something changes on the job, you hear about it before the cost changes.',
				),
				array(
					'icon' => 'M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z',
					'title' => 'Site Left Clean',
					'body'  => 'Work area is cleared and left in order when the job is done.',
				),
			);
			foreach ( $promise_items as $item ) : ?>
				<div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:1rem;border-radius:1rem;border:1px solid rgba(255,255,255,.1);background:rgba(255,255,255,.05);padding:1.75rem;">
					<span style="display:flex;height:3rem;width:3rem;align-items:center;justify-content:center;border-radius:9999px;background:rgba(<?php echo esc_html( '59,130,246' ); ?>,.2);color:var(--color-brand-blue-light);">
						<svg xmlns="http://www.w3.org/2000/svg" style="height:1.5rem;width:1.5rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
							<path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr( $item['icon'] ); ?>" />
						</svg>
					</span>
					<h3 style="font-family:var(--font-display);font-weight:700;color:#fff;font-size:0.875rem;text-transform:uppercase;letter-spacing:0.05em;"><?php echo esc_html( $item['title'] ); ?></h3>
					<p style="font-size:0.875rem;color:var(--color-slate-400);line-height:1.65;"><?php echo esc_html( $item['body'] ); ?></p>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</section>

<!-- ── 5. BOTTOM CTA ────────────────────────────────────────────────────────── -->
<section style="background:#fff;border-top:1px solid var(--color-slate-100);padding:4rem 1rem;text-align:center;">
	<h2 style="font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(1.5rem,3vw,2rem);color:var(--color-ink);">Ready to Talk About Your Project?</h2>
	<p style="margin-top:1rem;color:var(--color-slate-600);max-width:32rem;margin-inline:auto;">Call or send a message, David will ask a few questions about the site and set up a time to walk it. Free estimates, no obligation.</p>
	<div style="margin-top:2rem;display:flex;flex-wrap:wrap;justify-content:center;gap:1rem;">
		<a href="<?php echo esc_url( ddlw_phone_href() ); ?>" class="btn btn-cta">Call <?php echo esc_html( ddlw_phone() ); ?></a>
		<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline-dark">Get a Free Estimate</a>
	</div>
</section>

<?php get_footer(); ?>

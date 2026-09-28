<?php
/**
 * Template Name: Contact Page
 *
 * 1:1 port of site/src/pages/contact.astro
 * Layout: Hero → two-column (form left, info cards right)
 */

get_header();
?>

<!-- ── HERO ─────────────────────────────────────────────────────────────────── -->
<section style="background:var(--color-slate-50);border-bottom:1px solid var(--color-slate-200);padding:4rem 1rem;text-align:center;">
	<p style="font-family:var(--font-display);font-weight:600;text-transform:uppercase;letter-spacing:0.12em;font-size:0.875rem;color:var(--color-brand-blue);margin-bottom:0.75rem;">Get in Touch</p>
	<h1 style="font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(2rem,4vw,3rem);color:var(--color-ink);">
		Contact D&amp;D Land Works
	</h1>
	<p style="margin-top:1rem;color:var(--color-slate-600);max-width:36rem;margin-inline:auto;line-height:1.7;">
		Have a project in mind? Need a free estimate? We're here to help, call, text, or fill out the form.
	</p>
</section>

<!-- ── MAIN: FORM + INFO ─────────────────────────────────────────────────────── -->
<section style="padding:4rem 0 6rem;">
	<div class="container">
		<div style="display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:start;">

			<!-- FORM ─────────────────────────────────────────────────────────── -->
			<div style="border-radius:1rem;border:1px solid var(--color-slate-200);background:#fff;padding:2rem;box-shadow:0 1px 4px rgba(0,0,0,.06);">
				<h2 style="font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.04em;font-size:1.25rem;color:var(--color-ink);margin-bottom:0.5rem;">Send a Message</h2>
				<p style="color:var(--color-slate-500);font-size:0.875rem;margin-bottom:2rem;">Fill out the form and we'll get back to you as soon as possible.</p>

				<form
					action="https://formspree.io/f/david@ddlandworks.com"
					method="POST"
					style="display:flex;flex-direction:column;gap:1.25rem;"
				>
					<div>
						<label for="ddlw_name" style="display:block;font-size:0.875rem;font-weight:600;color:var(--color-ink);margin-bottom:0.375rem;">Name <span style="color:#ef4444;">*</span></label>
						<input
							type="text" id="ddlw_name" name="name" required placeholder="Your full name"
							style="width:100%;box-sizing:border-box;border-radius:0.5rem;border:1px solid var(--color-slate-300);padding:0.75rem 1rem;font-size:0.875rem;color:var(--color-ink);"
						/>
					</div>

					<div>
						<label for="ddlw_phone" style="display:block;font-size:0.875rem;font-weight:600;color:var(--color-ink);margin-bottom:0.375rem;">Phone <span style="color:#ef4444;">*</span></label>
						<input
							type="tel" id="ddlw_phone" name="phone" required placeholder="Your phone number"
							style="width:100%;box-sizing:border-box;border-radius:0.5rem;border:1px solid var(--color-slate-300);padding:0.75rem 1rem;font-size:0.875rem;color:var(--color-ink);"
						/>
					</div>

					<div>
						<label for="ddlw_email" style="display:block;font-size:0.875rem;font-weight:600;color:var(--color-ink);margin-bottom:0.375rem;">Email <span style="color:#ef4444;">*</span></label>
						<input
							type="email" id="ddlw_email" name="email" required placeholder="your@email.com"
							style="width:100%;box-sizing:border-box;border-radius:0.5rem;border:1px solid var(--color-slate-300);padding:0.75rem 1rem;font-size:0.875rem;color:var(--color-ink);"
						/>
					</div>

					<div>
						<label for="ddlw_message" style="display:block;font-size:0.875rem;font-weight:600;color:var(--color-ink);margin-bottom:0.375rem;">Message <span style="color:#ef4444;">*</span></label>
						<textarea
							id="ddlw_message" name="message" required rows="5"
							placeholder="Describe your project, what do you need done and where?"
							style="width:100%;box-sizing:border-box;border-radius:0.5rem;border:1px solid var(--color-slate-300);padding:0.75rem 1rem;font-size:0.875rem;color:var(--color-ink);resize:none;"
						></textarea>
					</div>

					<button
						type="submit"
						style="width:100%;border-radius:0.5rem;background:var(--color-brand-blue);padding:0.875rem;font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.05em;font-size:0.875rem;color:#fff;border:none;cursor:pointer;"
					>
						Send Message
					</button>

					<p style="text-align:center;font-size:0.75rem;color:var(--color-slate-400);">
						By submitting this form, you agree to be contacted by D&amp;D Land Works regarding your inquiry.
					</p>
				</form>
			</div>

			<!-- INFO CARDS ───────────────────────────────────────────────────── -->
			<div style="display:flex;flex-direction:column;gap:2rem;">

				<div>
					<h2 style="font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.04em;font-size:1.25rem;color:var(--color-ink);margin-bottom:0.5rem;">Get in Touch</h2>
					<p style="color:var(--color-slate-600);line-height:1.7;">
						Whether you need excavation, land clearing, grading, drainage, or septic work, call us directly or fill out the form and we'll get back to you.
					</p>
				</div>

				<!-- Cards -->
				<div style="display:flex;flex-direction:column;gap:1rem;">

					<!-- Phone -->
					<div style="display:flex;align-items:flex-start;gap:1rem;border-radius:0.75rem;border:1px solid var(--color-slate-200);background:#fff;padding:1.25rem;box-shadow:0 1px 4px rgba(0,0,0,.06);">
						<span style="display:flex;height:2.75rem;width:2.75rem;flex-shrink:0;align-items:center;justify-content:center;border-radius:9999px;background:var(--color-brand-blue);color:#fff;">
							<svg xmlns="http://www.w3.org/2000/svg" style="height:1.25rem;width:1.25rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
								<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.338c0-.53.313-.988.741-1.212l3.25-1.625a1.5 1.5 0 0 1 1.716.33l1.88 2.348a1.5 1.5 0 0 1-.255 2.118l-.931.7a10.507 10.507 0 0 0 4.388 4.387l.7-.931a1.5 1.5 0 0 1 2.118-.255l2.348 1.88a1.5 1.5 0 0 1 .33 1.716l-1.625 3.25a1.5 1.5 0 0 1-1.344.832C8.49 21.75 2.25 15.51 2.25 7.682a1.5 1.5 0 0 1 .832-1.344Z" />
							</svg>
						</span>
						<div>
							<p style="font-family:var(--font-display);font-weight:700;color:var(--color-ink);">Phone</p>
							<a href="<?php echo esc_url( ddlw_phone_href() ); ?>" style="color:var(--color-brand-blue);font-weight:600;text-decoration:none;"><?php echo esc_html( ddlw_phone() ); ?></a>
							<p style="font-size:0.875rem;color:var(--color-slate-500);margin-top:0.125rem;">Call or text, we'll call back if we miss you</p>
						</div>
					</div>

					<!-- Hours -->
					<div style="display:flex;align-items:flex-start;gap:1rem;border-radius:0.75rem;border:1px solid var(--color-slate-200);background:#fff;padding:1.25rem;box-shadow:0 1px 4px rgba(0,0,0,.06);">
						<span style="display:flex;height:2.75rem;width:2.75rem;flex-shrink:0;align-items:center;justify-content:center;border-radius:9999px;background:var(--color-brand-blue);color:#fff;">
							<svg xmlns="http://www.w3.org/2000/svg" style="height:1.25rem;width:1.25rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
							</svg>
						</span>
						<div>
							<p style="font-family:var(--font-display);font-weight:700;color:var(--color-ink);">Hours</p>
							<p style="color:var(--color-slate-700);font-weight:600;">Monday &mdash; Saturday</p>
							<p style="font-size:0.875rem;color:var(--color-slate-500);margin-top:0.125rem;">Site visits by appointment</p>
						</div>
					</div>

					<!-- Service Area -->
					<div style="display:flex;align-items:flex-start;gap:1rem;border-radius:0.75rem;border:1px solid var(--color-slate-200);background:#fff;padding:1.25rem;box-shadow:0 1px 4px rgba(0,0,0,.06);">
						<span style="display:flex;height:2.75rem;width:2.75rem;flex-shrink:0;align-items:center;justify-content:center;border-radius:9999px;background:var(--color-brand-blue);color:#fff;">
							<svg xmlns="http://www.w3.org/2000/svg" style="height:1.25rem;width:1.25rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
								<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
								<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
							</svg>
						</span>
						<div>
							<p style="font-family:var(--font-display);font-weight:700;color:var(--color-ink);">Service Area</p>
							<p style="color:var(--color-brand-blue);font-weight:600;">Eugene, Springfield &amp; Lane County</p>
							<p style="font-size:0.875rem;color:var(--color-slate-500);margin-top:0.125rem;">
								<a href="<?php echo esc_url( home_url( '/service-area' ) ); ?>" style="color:inherit;">View full service area &rarr;</a>
							</p>
						</div>
					</div>

					<!-- Email -->
					<div style="display:flex;align-items:flex-start;gap:1rem;border-radius:0.75rem;border:1px solid var(--color-slate-200);background:#fff;padding:1.25rem;box-shadow:0 1px 4px rgba(0,0,0,.06);">
						<span style="display:flex;height:2.75rem;width:2.75rem;flex-shrink:0;align-items:center;justify-content:center;border-radius:9999px;background:var(--color-brand-blue);color:#fff;">
							<svg xmlns="http://www.w3.org/2000/svg" style="height:1.25rem;width:1.25rem;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
								<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
							</svg>
						</span>
						<div>
							<p style="font-family:var(--font-display);font-weight:700;color:var(--color-ink);">Email</p>
							<a href="mailto:<?php echo esc_attr( ddlw_email() ); ?>" style="color:var(--color-brand-blue);font-weight:600;text-decoration:none;"><?php echo esc_html( ddlw_email() ); ?></a>
							<p style="font-size:0.875rem;color:var(--color-slate-500);margin-top:0.125rem;">We respond within 24 hours</p>
						</div>
					</div>

				</div>

				<!-- CTA buttons -->
				<div style="display:flex;flex-wrap:wrap;gap:0.75rem;">
					<a href="<?php echo esc_url( ddlw_phone_href() ); ?>" class="btn btn-cta" style="flex:1;text-align:center;justify-content:center;">Call Now</a>
					<a href="mailto:<?php echo esc_attr( ddlw_email() ); ?>" class="btn btn-outline-dark" style="flex:1;text-align:center;justify-content:center;">Send an Email</a>
				</div>

			</div>

		</div>
	</div>
</section>

<style>
@media (max-width: 768px) {
	.contact-grid { grid-template-columns: 1fr !important; }
}
</style>

<?php get_footer(); ?>

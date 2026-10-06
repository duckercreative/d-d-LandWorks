<?php
/**
 * Template Name: Service Area Page
 *
 * 1:1 port of site/src/pages/service-area.astro
 */

get_header();

$areas = ddlw_service_areas();
$all_areas = array_merge(
	array_filter( $areas['primary'], fn( $a ) => in_array( $a['slug'], array( 'eugene', 'springfield' ), true ) ),
	$areas['secondary'],
	$areas['further']
);
$top_two = array_slice( $all_areas, 0, 2 );
$rest    = array_slice( $all_areas, 2 );

$pin_svg = '<svg xmlns="http://www.w3.org/2000/svg" style="height:1rem;width:1rem;flex-shrink:0;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">'
         . '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21c4.4-3.4 7-7 7-10.5A7 7 0 0 0 5 10.5C5 14 7.6 17.6 12 21Z" />'
         . '<circle cx="12" cy="10.5" r="2" fill="currentColor" stroke="none" />'
         . '</svg>';
?>

<section style="background:var(--color-slate-50,#f8fafc);padding:5rem 0 7rem;">
	<div style="max-width:72rem;margin:0 auto;padding:0 1rem;">

		<!-- Heading -->
		<div style="margin-bottom:3.5rem;text-align:center;">
			<p style="font-family:var(--font-display);font-weight:600;text-transform:uppercase;letter-spacing:0.1em;font-size:0.875rem;color:var(--color-brand-blue);margin:0 0 0.5rem;">Our Service Area</p>
			<h1 style="margin:0 0 1.25rem;font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.02em;font-size:clamp(1.75rem,4vw,3rem);color:var(--color-ink);line-height:1.1;">
				Excavation Services Throughout Lane County, Oregon
			</h1>
			<p style="color:var(--color-slate-600,#475569);max-width:42rem;margin:0 auto;line-height:1.7;font-size:1rem;">
				D&amp;D Land Works provides excavation, grading, and site preparation for residential and commercial properties across Lane County, including Eugene, Springfield, Cottage Grove, Junction City, Creswell, Veneta, Florence, Oakridge, Coburg, and Lowell.
			</p>
		</div>

		<!-- Two-column grid -->
		<div style="display:grid;grid-template-columns:1fr;gap:1.5rem;align-items:stretch;">
			<style>@media(min-width:1024px){.sa-inner{grid-template-columns:1fr 1fr!important;gap:2rem!important;}}</style>
			<div class="sa-inner" style="display:grid;grid-template-columns:1fr;gap:1.5rem;align-items:stretch;">

				<!-- Dark location list -->
				<div style="overflow:hidden;border-radius:1rem;background:var(--color-ink,#0d1117);box-shadow:0 10px 30px rgba(0,0,0,.2);">

					<?php
					$eugene = $top_two[0];
					?>
					<a href="<?php echo esc_url( home_url( $eugene['href'] ) ); ?>"
					   style="display:flex;align-items:center;gap:0.75rem;background:var(--color-brand-blue);padding:1rem 1.5rem;color:#fff;text-decoration:none;transition:opacity .15s;"
					   onmouseover="this.style.opacity='.85'" onmouseout="this.style.opacity='1'">
						<span style="color:#fff;display:flex;"><?php echo $pin_svg; // phpcs:ignore ?></span>
						<span style="font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.05em;font-size:0.875rem;">Eugene, OR</span>
					</a>

					<?php
					$springfield = $top_two[1];
					?>
					<a href="<?php echo esc_url( home_url( $springfield['href'] ) ); ?>"
					   style="display:flex;align-items:center;gap:0.75rem;border-top:1px solid rgba(255,255,255,.1);padding:1rem 1.5rem;color:rgba(255,255,255,.7);text-decoration:none;transition:color .15s,background .15s;"
					   onmouseover="this.style.background='rgba(255,255,255,.05)';this.style.color='#fff'" onmouseout="this.style.background='';this.style.color='rgba(255,255,255,.7)'">
						<span style="color:rgba(255,255,255,.4);display:flex;"><?php echo $pin_svg; // phpcs:ignore ?></span>
						<span style="font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.05em;font-size:0.875rem;">Springfield, OR</span>
					</a>

					<?php foreach ( $rest as $area ) : ?>
					<a href="<?php echo esc_url( home_url( $area['href'] ) ); ?>"
					   style="display:flex;align-items:center;gap:0.75rem;border-top:1px solid rgba(255,255,255,.1);padding:1rem 1.5rem;color:rgba(255,255,255,.7);text-decoration:none;transition:color .15s,background .15s;"
					   onmouseover="this.style.background='rgba(255,255,255,.05)';this.style.color='#fff'" onmouseout="this.style.background='';this.style.color='rgba(255,255,255,.7)'">
						<span style="color:rgba(255,255,255,.4);display:flex;"><?php echo $pin_svg; // phpcs:ignore ?></span>
						<span style="font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:0.05em;font-size:0.875rem;"><?php echo esc_html( $area['label'] ); ?></span>
					</a>
					<?php endforeach; ?>

				</div>

				<!-- Google Map -->
				<div style="overflow:hidden;border-radius:1rem;border:1px solid var(--color-slate-200,#e2e8f0);box-shadow:0 4px 16px rgba(0,0,0,.08);min-height:400px;">
					<iframe
						title="D&amp;D Land Works service area map, Lane County, Oregon"
						src="https://maps.google.com/maps?q=Lane+County,+Oregon&z=9&output=embed"
						width="100%"
						height="100%"
						style="border:0;display:block;min-height:400px;"
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"
					></iframe>
				</div>

			</div>
		</div>

	</div>
</section>

<?php
echo ddlw_cta_block( array(
	'eyebrow'   => 'Talk With David',
	'title'     => 'Serving Eugene, Springfield, and All of Lane County',
	'subtitle'  => 'Call D&amp;D Land Works at ' . ddlw_phone() . ' or send a message. Free estimates, no obligation.',
	'cta_label' => 'Request a Free Estimate',
) );

get_footer();
?>

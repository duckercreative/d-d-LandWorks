<?php
/**
 * inc/shortcodes.php — reusable component shortcodes
 * Matches the pattern used in dd-landworks-theme (v6) but adapted for v7.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ── [ddlw_cta] ────────────────────────────────────────────
 * Usage: [ddlw_cta heading="Get a Free Estimate" sub="Contact us..." btn_text="Request Estimate" btn_href="/contact"]
 */
add_shortcode( 'ddlw_cta', function( $atts ) {
	$a = shortcode_atts( [
		'heading'  => 'Get a Free Estimate',
		'heading_light' => 'Get a Free',
		'heading_bold'  => 'Estimate From D&D Land Works',
		'sub'      => 'Contact D&amp;D Land Works to discuss your property and project scope.',
		'btn_text' => 'Request a Free Estimate',
		'btn_href' => '/contact',
	], $atts );

	ob_start();
	?>
	<section class="estimate-section" style="background:var(--color-ink);">
	  <div class="estimate-section__inner">
	    <div>
	      <p class="section-label estimate-section__eyebrow">Free Estimate</p>
	      <h2 class="estimate-section__h2">
	        <span class="light"><?php echo esc_html( $a['heading_light'] ); ?></span>
	        <span class="bold"><?php echo esc_html( $a['heading_bold'] ); ?></span>
	      </h2>
	      <p class="estimate-section__sub"><?php echo wp_kses_post( $a['sub'] ); ?></p>
	      <div class="contact-links">
	        <a href="tel:5414018726" class="contact-link">
	          <span class="contact-link__icon contact-link__icon--accent">
	            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3c0-.6.4-1 1-1h3.2c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" /></svg>
	          </span>
	          <div>
	            <p class="contact-link__hint">Call or text</p>
	            <p class="contact-link__value contact-link__value--lg">541-401-8726</p>
	          </div>
	        </a>
	      </div>
	    </div>
	    <div>
	      <a href="<?php echo esc_url( $a['btn_href'] ); ?>" class="btn btn-cta btn-lg"><?php echo esc_html( $a['btn_text'] ); ?></a>
	    </div>
	  </div>
	</section>
	<?php
	return ob_get_clean();
} );

/* ── [ddlw_trust_bar] ──────────────────────────────────────
 * Renders the 4-item trust strip used on the homepage hero.
 */
add_shortcode( 'ddlw_trust_bar', function( $atts ) {
	ob_start();
	?>
	<div class="trust-strip" style="background:var(--color-ink-deep);">
	  <div class="trust-strip__inner">
	    <div class="trust-item">
	      <span class="trust-item__label">CCB #261742</span>
	      <span class="trust-item__sub">Licensed &amp; Bonded</span>
	    </div>
	    <div class="trust-item">
	      <span class="trust-item__label trust-item__label--accent">DEQ Certified</span>
	      <span class="trust-item__sub trust-item__sub--accent">PLC# 39996</span>
	    </div>
	    <div class="trust-item">
	      <span class="trust-item__label">Free Estimates</span>
	      <span class="trust-item__sub">On-site, no obligation</span>
	    </div>
	    <div class="trust-item">
	      <span class="trust-item__label">Residential &amp; Commercial</span>
	      <span class="trust-item__sub">Lane County, OR</span>
	    </div>
	  </div>
	</div>
	<?php
	return ob_get_clean();
} );

/* ── [ddlw_review_cards] ────────────────────────────────────
 * Renders 3 embedded Facebook reviews.
 */
add_shortcode( 'ddlw_review_cards', function( $atts ) {
	$embeds = [
		'https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fkris.hazelzimmerman%2Fposts%2Fpfbid02m1GKFzqvbS6zXQmBCkT4R4e9gDzPJztrnzm3RjKmJzxyv1m1BwhoT7F77zeFvKWl&show_text=true&width=500',
		'https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flauren.zimmerman.9%2Fposts%2Fpfbid0sxmtPAyd9eZZ13kbPmRhahi7j2XJ4DbPTAz2dLiPYpYxz4RW8pw8aoCbGgUcjyzTl&show_text=true&width=500',
		'https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fkurt.suzuki.2025%2Fposts%2Fpfbid02LWRFAPEKJdH8BsuE2rrP5dECRUpfY5S97ftW54RbPDzo4gTJbHLytSSdwnPj17frl&show_text=true&width=500',
	];

	ob_start();
	echo '<div class="reviews-grid reviews-grid--fb">';
	foreach ( $embeds as $src ) {
		echo '<div class="review-card review-card--fb">';
		echo '<iframe src="' . esc_url( $src ) . '" width="500" height="380" style="border:none;overflow:hidden;width:100%;max-width:500px;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>';
		echo '</div>';
	}
	echo '</div>';
	return ob_get_clean();
} );

/* ── [ddlw_service_area_pills] ──────────────────────────────
 * Renders area pill tags.
 */
add_shortcode( 'ddlw_service_area_pills', function( $atts ) {
	$areas = [
		[ 'label' => 'Eugene',        'href' => '/excavation-contractor-eugene-or' ],
		[ 'label' => 'Springfield',   'href' => '/excavation-contractor-springfield-or' ],
		[ 'label' => 'Cottage Grove', 'href' => '/excavation-contractor-cottage-grove-or' ],
		[ 'label' => 'Junction City', 'href' => '/excavation-contractor-junction-city-or' ],
		[ 'label' => 'Creswell',      'href' => '/excavation-contractor-creswell-or' ],
		[ 'label' => 'Veneta',        'href' => '/excavation-contractor-veneta-or' ],
		[ 'label' => 'Florence',      'href' => '/excavation-contractor-florence-or' ],
		[ 'label' => 'Oakridge',      'href' => '/locations/oakridge' ],
		[ 'label' => 'Coburg',        'href' => '/excavation-contractor-coburg-or' ],
		[ 'label' => 'Lowell',        'href' => '/excavation-contractor-lowell-or' ],
	];

	ob_start();
	echo '<div class="area-pills">';
	foreach ( $areas as $a ) {
		echo '<a href="' . esc_url( $a['href'] ) . '" class="area-pill">' . esc_html( $a['label'] ) . '</a>';
	}
	echo '</div>';
	return ob_get_clean();
} );

/* ── [ddlw_contact_info] ────────────────────────────────────
 * Renders phone + email contact links.
 */
add_shortcode( 'ddlw_contact_info', function() {
	ob_start();
	?>
	<div class="contact-links">
	  <a href="tel:5414018726" class="contact-link">
	    <span class="contact-link__icon contact-link__icon--accent">
	      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3c0-.6.4-1 1-1h3.2c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" /></svg>
	    </span>
	    <div>
	      <p class="contact-link__hint">Call or text</p>
	      <p class="contact-link__value contact-link__value--lg">541-401-8726</p>
	    </div>
	  </a>
	  <a href="mailto:david@ddlandworks.com" class="contact-link">
	    <span class="contact-link__icon contact-link__icon--ghost">
	      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
	    </span>
	    <div>
	      <p class="contact-link__hint">Email</p>
	      <p class="contact-link__value contact-link__value--sm">david@ddlandworks.com</p>
	    </div>
	  </a>
	</div>
	<?php
	return ob_get_clean();
} );

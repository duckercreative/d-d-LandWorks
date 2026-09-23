</main>

<?php
/**
 * Footer — 4-column layout matching Footer.astro.
 */
$footer_services = array_slice( ddlw_services(), 0, 10 );
$footer_areas    = array_slice( ddlw_service_areas()['primary'], 1 );
$footer_areas    = array_merge( $footer_areas, array_slice( ddlw_service_areas()['secondary'], 0, 2 ) );
?>
<footer class="site-footer">
	<div class="container site-footer__grid">
		<div class="footer-col--brand">
			<div class="logo-chip"><img src="<?php echo esc_url( ddlw_img( 'logo.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" /></div>
			<p class="brand-name">D&amp;D Land Works</p>
			<p>Excavation contractor services including site preparation, land clearing, grading, drainage, utility excavation, gravel driveway work, and DEQ certified septic install &amp; repair for Eugene, Springfield, and Lane County, OR.</p>
			<a href="/service-area" style="font-family:var(--font-display);font-weight:700;">View Full Service Area</a>
			<ul class="credentials">
				<li>Licensed, bonded &amp; insured</li>
				<li>CCB #<?php echo esc_html( ddlw_ccb_number() ); ?></li>
				<li><?php echo esc_html( ddlw_deq_cert() ); ?></li>
			</ul>
		</div>

		<div class="footer-col--services">
			<h3>Services</h3>
			<ul class="footer-list">
				<?php foreach ( $footer_services as $s ) : ?>
					<li><a href="/services/<?php echo esc_attr( $s['slug'] ); ?>"><?php echo esc_html( $s['title'] ); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>

		<div class="footer-col--areas">
			<h3>Service Areas</h3>
			<ul class="footer-list">
				<?php foreach ( $footer_areas as $a ) : ?>
					<li><a href="/locations/<?php echo esc_attr( $a['slug'] ); ?>"><?php echo esc_html( $a['label'] ); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>

		<div class="footer-col--contact">
			<h3>Contact</h3>
			<ul class="footer-list">
				<li><?php echo esc_html( ddlw_service_area() ); ?></li>
				<li><a href="<?php echo esc_url( ddlw_phone_href() ); ?>"><?php echo esc_html( ddlw_phone() ); ?></a></li>
				<li><a href="mailto:<?php echo esc_attr( ddlw_email() ); ?>"><?php echo esc_html( ddlw_email() ); ?></a></li>
				<li><a href="/about">About Us</a></li>
				<li><a href="/commercial-excavation">Commercial</a></li>
				<li><a href="/resources">Resources</a></li>
				<li><a href="/blog">Blog</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
			<div class="footer-social"><?php ddlw_render_social_links(); ?></div>
			<a href="<?php echo esc_url( ddlw_phone_href() ); ?>" class="btn btn-cta">Call <?php echo esc_html( ddlw_phone() ); ?></a>
		</div>
	</div>

	<div class="site-footer__bottom">
		<div class="container">
			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> D&amp;D Land Works. All rights reserved.</p>
			<p>Licensed &amp; Bonded, DEQ Certified</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

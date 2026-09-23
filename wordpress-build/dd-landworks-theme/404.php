<?php
/**
 * 404 — matches the site's tone (direct, no filler) rather than a generic
 * "Oops!" page.
 */
get_header();
?>
<section class="section container container--narrow text-center" style="padding-block:6rem;">
	<p class="eyebrow" style="justify-content:center;">404</p>
	<h1 class="section-title section-title--center">That Page Doesn't Exist</h1>
	<p class="lede gap-lg">The page you're looking for was moved, renamed, or never existed. Try the services or contact page instead, or call <?php echo esc_html( ddlw_phone() ); ?> directly.</p>
	<div style="display:flex;justify-content:center;gap:1rem;margin-top:2rem;flex-wrap:wrap;">
		<a href="/services" class="btn btn-primary">View Services</a>
		<a href="<?php echo esc_url( ddlw_phone_href() ); ?>" class="btn btn-cta">Call <?php echo esc_html( ddlw_phone() ); ?></a>
	</div>
</section>
<?php get_footer(); ?>

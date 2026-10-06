<?php
/**
 * Front Page Template
 *
 * Previously hardcoded (1:1 port of site/src/pages/index.astro).
 * Now dynamic: all homepage sections are rendered by custom Gutenberg
 * blocks registered in inc/blocks.php. Edit text in WP Admin > Pages > Home
 * using the block editor — each section's fields appear in the right sidebar.
 *
 * Block order (set automatically by inc/auto-populate-homepage.php on first
 * theme activation, or manually in the editor):
 *   1. ddlw/hero                — Hero
 *   2. ddlw/about               — About / Owner-Operated
 *   3. ddlw/services-intro      — Services Grid
 *   4. ddlw/project-types       — Common Property Problems
 *   5. ddlw/process-steps       — How It Works
 *   6. ddlw/why-choose          — Why Choose D&D Land Works
 *   7. ddlw/service-areas-section — Local Service Areas
 *   8. ddlw/reviews             — FAQ Section
 *   9. ddlw/cta-section         — Final CTA Block
 */

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		the_content();
	}
}

get_footer();

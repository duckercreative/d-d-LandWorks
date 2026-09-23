<?php
/**
 * Template Name: Service Page
 *
 * For the 12 service pages (Excavation, Grading & Leveling, Septic Install
 * & Repairs, etc.). Assign this from the Page Attributes panel.
 *
 * Structure: Hero (title/excerpt) -> the_content (drop [photo_block],
 * [cost_factors], [faq] etc. shortcodes here for the page's unique
 * sections — see this theme's README.md for the full shortcode list and a
 * worked example) -> standard closer (Why Choose Us, real-photo Gallery,
 * Testimonials, CTA).
 */
get_header();
while ( have_posts() ) : the_post();
	$excerpt = get_the_excerpt();
	echo ddlw_hero( array(
		'eyebrow'  => 'Lane County, OR',
		'title'    => get_the_title(),
		'subtitle' => $excerpt,
		'images'   => 'project-excavation-bucket.webp,project-grading-driveway.webp',
	) );
	?>
	<article <?php post_class( 'entry-content' ); ?> style="max-width:none;">
		<?php the_content(); ?>
	</article>
	<?php
	echo ddlw_why_choose_us( array() );
	echo ddlw_gallery_grid( array() );
	echo ddlw_cta_block( array(
		'title'    => 'Get a Free Estimate for ' . get_the_title(),
		'subtitle' => 'One licensed, bonded contractor for residential and commercial properties throughout Lane County.',
	) );
endwhile;
get_footer();

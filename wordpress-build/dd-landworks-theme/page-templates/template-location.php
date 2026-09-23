<?php
/**
 * Template Name: Location Page
 *
 * For city pages (Eugene, Springfield, Coburg, etc.) and city+service
 * sub-pages. Assign this from the Page Attributes panel.
 *
 * Structure: Hero (title/excerpt) -> the_content (the location-specific
 * paragraphs; drop a [photo_block] in here for the "why trust us locally"
 * section, same as the Astro location pages do) -> standard closer
 * (Gallery, Testimonials, CTA).
 */
get_header();
while ( have_posts() ) : the_post();
	$excerpt = get_the_excerpt();
	echo ddlw_hero( array(
		'title'    => get_the_title(),
		'subtitle' => $excerpt,
	) );
	?>
	<article <?php post_class( 'entry-content' ); ?> style="max-width:none;">
		<?php the_content(); ?>
	</article>
	<?php
	echo ddlw_gallery_grid( array() );
	echo ddlw_cta_block( array(
		'title'    => 'Get a Free Estimate in ' . get_the_title(),
		'subtitle' => 'Call and describe the property. No job is too small to quote.',
	) );
endwhile;
get_footer();

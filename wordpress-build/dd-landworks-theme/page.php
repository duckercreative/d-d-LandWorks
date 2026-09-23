<?php
/**
 * Generic page template — a dark title band + the page's own content
 * (written in the block or classic editor, shortcodes and all). This is
 * what a plain WP Page renders with unless it's assigned one of the
 * page-templates/ templates below.
 */
get_header();
while ( have_posts() ) : the_post();
	?>
	<section class="page-hero">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>
	<article <?php post_class( 'entry-content' ); ?>>
		<?php the_content(); ?>
	</article>
	<?php
endwhile;
get_footer();

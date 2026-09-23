<?php
/**
 * Blog listing (also the default catch-all template). Matches the Astro
 * blog/index.astro card-grid layout.
 */
get_header();
?>
<section class="page-hero">
	<div class="container">
		<h1><?php echo is_home() ? esc_html__( 'Blog', 'dd-landworks' ) : esc_html( get_the_archive_title() ); ?></h1>
	</div>
</section>

<div class="container section">
	<?php if ( have_posts() ) : ?>
		<div class="blog-index-grid">
			<?php while ( have_posts() ) : the_post();
				$thumb   = get_the_post_thumbnail_url( get_the_ID(), 'ddlw-card' ) ?: ddlw_img( 'service-excavation.webp' );
				$cats    = get_the_category();
				?>
				<article class="card blog-index-card">
					<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( $thumb ); ?>" alt="" loading="lazy" /></a>
					<div class="blog-index-card__body">
						<?php if ( $cats ) : ?><span class="blog-category" style="align-self:flex-start;"><?php echo esc_html( $cats[0]->name ); ?></span><?php endif; ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php echo esc_html( get_the_excerpt() ); ?></p>
						<a href="<?php the_permalink(); ?>" class="related-card__link">Read more &raquo;</a>
					</div>
				</article>
			<?php endwhile; ?>
		</div>
		<div class="text-center" style="margin-top:2.5rem;">
			<?php the_posts_pagination(); ?>
		</div>
	<?php else : ?>
		<p class="text-center text-muted">No posts yet — check back soon.</p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>

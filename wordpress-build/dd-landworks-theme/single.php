<?php
/**
 * Single blog post — hero image, category/date meta, sidebar (categories,
 * recent posts, photo gallery widget), related posts grid. Matches the
 * Astro blog/[slug].astro layout.
 */
get_header();
while ( have_posts() ) : the_post();
	$categories  = get_the_category();
	$primary_cat = $categories ? $categories[0] : null;
	$recent      = get_posts( array( 'numberposts' => 4, 'post__not_in' => array( get_the_ID() ) ) );
	$related     = $primary_cat
		? get_posts( array( 'numberposts' => 3, 'post__not_in' => array( get_the_ID() ), 'category' => $primary_cat->term_id ) )
		: array();
	$gallery_pool = array( 'project-excavation-bucket.webp', 'service-grading-leveling.webp', 'service-site-preparation.webp', 'project-driveway-repair.webp', 'service-land-clearing.webp', 'project-finished-grading.webp' );
	?>
	<section class="blog-hero">
		<?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'full' ); else : ?>
			<img src="<?php echo esc_url( ddlw_img( 'service-excavation.webp' ) ); ?>" alt="" />
		<?php endif; ?>
		<div class="blog-hero__overlay"></div>
		<div class="container blog-hero__inner">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<div class="container blog-layout">
		<div>
			<div class="blog-meta">
				<?php if ( $primary_cat ) : ?><span class="blog-category"><?php echo esc_html( $primary_cat->name ); ?></span><?php endif; ?>
				<span><?php echo esc_html( get_the_date() ); ?></span>
			</div>
			<p class="lede gap-lg"><?php echo esc_html( get_the_excerpt() ); ?></p>

			<div class="entry-content" style="padding-block:1.5rem 0;max-width:none;">
				<?php the_content(); ?>
			</div>

			<div style="display:flex;gap:0.75rem;align-items:center;margin-top:2rem;border-top:1px solid var(--color-slate-200);padding-top:1.5rem;">
				<strong style="font-size:0.875rem;text-transform:uppercase;letter-spacing:0.03em;">Share:</strong>
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" aria-label="Share on Facebook" style="display:flex;height:2rem;width:2rem;align-items:center;justify-content:center;border-radius:999px;background:var(--color-slate-100);">f</a>
				<a href="https://twitter.com/intent/tweet?url=<?php echo urlencode( get_permalink() ); ?>" aria-label="Share on X" style="display:flex;height:2rem;width:2rem;align-items:center;justify-content:center;border-radius:999px;background:var(--color-slate-100);">x</a>
				<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( get_permalink() ); ?>" aria-label="Share on LinkedIn" style="display:flex;height:2rem;width:2rem;align-items:center;justify-content:center;border-radius:999px;background:var(--color-slate-100);">in</a>
			</div>
		</div>

		<aside class="blog-sidebar">
			<div class="sidebar-card">
				<h3>Categories</h3>
				<hr />
				<ul class="category-list">
					<?php foreach ( get_categories( array( 'hide_empty' => false ) ) as $cat ) : ?>
						<li><a href="<?php echo esc_url( get_category_link( $cat ) ); ?>"><?php echo esc_html( $cat->name ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="sidebar-card">
				<h3>Recent Posts</h3>
				<hr />
				<?php foreach ( $recent as $p ) :
					$thumb = get_the_post_thumbnail_url( $p, 'thumbnail' ) ?: ddlw_img( 'service-excavation.webp' );
					?>
					<div class="recent-post">
						<img src="<?php echo esc_url( $thumb ); ?>" alt="" />
						<a href="<?php echo esc_url( get_permalink( $p ) ); ?>"><?php echo esc_html( get_the_title( $p ) ); ?></a>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="sidebar-card">
				<h3>Photo Gallery</h3>
				<hr />
				<div class="sidebar-photo-grid">
					<?php foreach ( array_slice( array_merge( $gallery_pool, $gallery_pool ), 0, 6 ) as $img ) : ?>
						<img src="<?php echo esc_url( ddlw_img( $img ) ); ?>" alt="" loading="lazy" />
					<?php endforeach; ?>
				</div>
			</div>
		</aside>
	</div>

	<?php if ( $related ) : ?>
	<section class="section--tint section--border-b">
		<div class="container">
			<h2 class="section-title">Related Posts</h2>
			<div class="related-grid">
				<?php foreach ( $related as $p ) :
					$thumb = get_the_post_thumbnail_url( $p, 'ddlw-card' ) ?: ddlw_img( 'service-excavation.webp' );
					?>
					<div class="card related-card">
						<img src="<?php echo esc_url( $thumb ); ?>" alt="" />
						<div class="related-card__body">
							<a href="<?php echo esc_url( get_permalink( $p ) ); ?>"><?php echo esc_html( get_the_title( $p ) ); ?></a>
							<br /><a href="<?php echo esc_url( get_permalink( $p ) ); ?>" class="related-card__link">Read more »</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php echo ddlw_cta_block( array(
		'title'    => "Have a Question We Haven't Covered?",
		'subtitle' => "Skip the search and ask David directly, it's faster than digging through articles.",
	) ); ?>

	<?php
endwhile;
get_footer();

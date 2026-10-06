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
	if ( ! $related ) {
		$related = get_posts( array( 'numberposts' => 3, 'post__not_in' => array( get_the_ID() ) ) );
	}
	$gallery_pool = array( 'project-excavation-bucket.webp', 'service-grading-leveling.webp', 'service-site-preparation.webp', 'project-driveway-repair.webp', 'service-land-clearing.webp', 'project-finished-grading.webp' );
	$share_url    = urlencode( get_permalink() );
	$share_title  = urlencode( get_the_title() );

	/* SVG icon paths */
	$icon_fb  = 'M9.101 23.691v-7.98H6.627v-3.667h2.474v-2.796c0-4.339 2.784-6.706 6.593-6.706 1.815 0 3.375.135 3.828.196v4.361h-2.65c-1.756 0-2.087.834-2.087 2.057v2.696h4.155l-.606 3.667h-3.549v7.98H9.101z';
	$icon_x   = 'M18.9 2H22l-7.6 8.7L23 22h-6.9l-5.4-6.6L4.5 22H1.4l8.2-9.3L1 2h7l4.9 6.1L18.9 2Zm-1.2 18h1.9L7.4 4H5.4l12.3 16Z';
	$icon_li  = 'M20.45 20.45h-3.56v-5.57c0-1.33-.02-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.34V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.38-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28ZM5.34 7.43a2.07 2.07 0 1 1 0-4.13 2.07 2.07 0 0 1 0 4.13ZM7.12 20.45H3.56V9h3.56v11.45Z';
	$share_btn_style = 'display:flex;height:2.25rem;width:2.25rem;align-items:center;justify-content:center;border-radius:999px;background:var(--color-slate-100);color:var(--color-slate-600);transition:background .15s,color .15s;';
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
		<article>
			<div class="blog-meta">
				<?php if ( $primary_cat ) : ?><span class="blog-category"><?php echo esc_html( $primary_cat->name ); ?></span><?php endif; ?>
				<span><?php echo esc_html( get_the_date() ); ?></span>
			</div>
			<p class="lede gap-lg"><?php echo esc_html( get_the_excerpt() ); ?></p>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<div style="display:flex;gap:.75rem;align-items:center;margin-top:2rem;border-top:1px solid var(--color-slate-200);padding-top:1.5rem;">
				<span style="font-family:var(--font-display);font-size:.875rem;font-weight:600;text-transform:uppercase;letter-spacing:.03em;color:var(--color-ink);">Share:</span>
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" target="_blank" rel="noopener" aria-label="Share on Facebook" style="<?php echo $share_btn_style; ?>" onmouseover="this.style.background='var(--color-brand-blue)';this.style.color='#fff'" onmouseout="this.style.background='var(--color-slate-100)';this.style.color='var(--color-slate-600)'">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="height:1rem;width:1rem;fill:currentColor;"><path d="<?php echo $icon_fb; ?>"/></svg>
				</a>
				<a href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&amp;text=<?php echo $share_title; ?>" target="_blank" rel="noopener" aria-label="Share on X" style="<?php echo $share_btn_style; ?>" onmouseover="this.style.background='var(--color-brand-blue)';this.style.color='#fff'" onmouseout="this.style.background='var(--color-slate-100)';this.style.color='var(--color-slate-600)'">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="height:1rem;width:1rem;fill:currentColor;"><path d="<?php echo $icon_x; ?>"/></svg>
				</a>
				<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $share_url; ?>" target="_blank" rel="noopener" aria-label="Share on LinkedIn" style="<?php echo $share_btn_style; ?>" onmouseover="this.style.background='var(--color-brand-blue)';this.style.color='#fff'" onmouseout="this.style.background='var(--color-slate-100)';this.style.color='var(--color-slate-600)'">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="height:1rem;width:1rem;fill:currentColor;"><path d="<?php echo $icon_li; ?>"/></svg>
				</a>
			</div>
		</article>

		<aside class="blog-sidebar">
			<div class="sidebar-card">
				<p class="sidebar-card__heading">Categories</p>
				<div class="sidebar-card__rule"></div>
				<ul style="display:flex;flex-direction:column;gap:.75rem;font-size:.875rem;margin:0;padding:0;list-style:none;">
					<?php foreach ( get_categories( array( 'hide_empty' => false ) ) as $cat ) : ?>
						<li><a href="<?php echo esc_url( get_category_link( $cat ) ); ?>" style="color:var(--color-slate-700);font-weight:500;text-decoration:none;" onmouseover="this.style.color='var(--color-brand-blue)'" onmouseout="this.style.color='var(--color-slate-700)'"><?php echo esc_html( $cat->name ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="sidebar-card">
				<p class="sidebar-card__heading">Recent Posts</p>
				<div class="sidebar-card__rule"></div>
				<ul style="display:flex;flex-direction:column;gap:1rem;margin:0;padding:0;list-style:none;">
					<?php foreach ( $recent as $p ) :
						$thumb = get_the_post_thumbnail_url( $p, 'thumbnail' ) ?: ddlw_img( 'service-excavation.webp' );
						?>
						<li style="display:flex;align-items:center;gap:.75rem;">
							<img src="<?php echo esc_url( $thumb ); ?>" alt="" style="height:3rem;width:3rem;flex-shrink:0;border-radius:var(--radius-brand);object-fit:cover;" loading="lazy" />
							<a href="<?php echo esc_url( get_permalink( $p ) ); ?>" style="font-size:.875rem;font-weight:600;line-height:1.3;color:var(--color-ink);text-decoration:none;" onmouseover="this.style.color='var(--color-brand-blue)'" onmouseout="this.style.color='var(--color-ink)'"><?php echo esc_html( get_the_title( $p ) ); ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="sidebar-card">
				<p class="sidebar-card__heading">Photo Gallery</p>
				<div class="sidebar-card__rule"></div>
				<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:.5rem;margin-top:1rem;">
					<?php foreach ( array_slice( array_merge( $gallery_pool, $gallery_pool ), 0, 6 ) as $img ) : ?>
						<img src="<?php echo esc_url( ddlw_img( $img ) ); ?>" alt="" loading="lazy" style="aspect-ratio:1/1;width:100%;object-fit:cover;border-radius:var(--radius-brand);" />
					<?php endforeach; ?>
				</div>
			</div>
		</aside>
	</div>

	<?php if ( $related ) : ?>
	<section style="border-top:1px solid var(--color-slate-200);background:var(--color-slate-50);padding:4rem 0;">
		<div class="container">
			<h2 style="font-family:var(--font-display);font-weight:700;text-transform:uppercase;letter-spacing:-0.01em;font-size:1.75rem;color:var(--color-ink);margin:0 0 2rem;">Related Posts</h2>
			<div style="display:grid;gap:1.5rem;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));">
				<?php foreach ( $related as $p ) :
					$thumb = get_the_post_thumbnail_url( $p, 'ddlw-card' ) ?: ddlw_img( 'service-excavation.webp' );
					?>
					<a href="<?php echo esc_url( get_permalink( $p ) ); ?>" class="card" style="overflow:hidden;padding:0;display:block;text-decoration:none;" onmouseover="this.style.borderColor='var(--color-brand-blue)'" onmouseout="this.style.borderColor=''">
						<img src="<?php echo esc_url( $thumb ); ?>" alt="" loading="lazy" style="height:10rem;width:100%;object-fit:cover;" />
						<div style="padding:1rem;">
							<h3 style="font-family:var(--font-display);font-weight:700;font-size:1rem;color:var(--color-brand-blue);margin:0 0 .5rem;line-height:1.3;"><?php echo esc_html( get_the_title( $p ) ); ?></h3>
							<span style="font-family:var(--font-display);font-size:.75rem;font-weight:700;text-transform:uppercase;letter-spacing:.04em;color:var(--color-brand-blue);">Read More &raquo;</span>
						</div>
					</a>
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
?>

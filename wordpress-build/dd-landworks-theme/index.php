<?php
/**
 * Blog listing (also the default catch-all template). Matches the Astro
 * blog/index.astro card-grid layout.
 */
get_header();
?>
<section style="position:relative;background:var(--color-ink,#0d1117);color:#fff;padding-block:5rem 3.5rem;overflow:hidden;">
	<img src="<?php echo esc_url( ddlw_img( 'project-site-excavation.webp' ) ); ?>" alt="" aria-hidden="true" loading="eager" style="position:absolute;inset:0;height:100%;width:100%;object-fit:cover;opacity:0.5;" />
	<div aria-hidden="true" style="position:absolute;inset:0;background:linear-gradient(to top,var(--color-ink,#0d1117),rgba(10,10,10,0.35));"></div>
	<div class="container" style="position:relative;z-index:1;">
		<h1 style="font-family:var(--font-display);font-weight:900;text-transform:uppercase;letter-spacing:-0.01em;font-size:clamp(2rem,5vw,3rem);margin:0 0 .75rem;">
			<?php echo is_home() ? esc_html__( 'Blog', 'dd-landworks' ) : esc_html( get_the_archive_title() ); ?>
		</h1>
		<?php if ( is_home() ) : ?>
		<p style="font-size:1.0625rem;color:rgba(255,255,255,0.75);max-width:36rem;margin:0;line-height:1.65;">Guides, cost breakdowns, and site-prep notes for property owners across Lane County, Oregon.</p>
		<?php endif; ?>
	</div>
</section>

<div class="container section">
	<?php if ( have_posts() ) : ?>
		<div class="blog-index-grid">
			<?php while ( have_posts() ) : the_post();
				$thumb   = get_the_post_thumbnail_url( get_the_ID(), 'ddlw-card' ) ?: ddlw_img( 'service-excavation.webp' );
				$cats    = get_the_category();
				?>
				<a href="<?php the_permalink(); ?>" class="card blog-index-card" style="overflow:hidden;padding:0;display:flex;flex-direction:column;text-decoration:none;">
					<img src="<?php echo esc_url( $thumb ); ?>" alt="" loading="lazy" style="height:12rem;width:100%;object-fit:cover;" />
					<div class="blog-index-card__body">
						<?php if ( $cats ) : ?>
						<span class="blog-category" style="align-self:flex-start;"><?php echo esc_html( $cats[0]->name ); ?></span>
						<?php endif; ?>
						<h3 style="font-family:var(--font-display);font-weight:700;font-size:1.1rem;color:var(--color-brand-blue);margin:0;line-height:1.3;">
							<?php the_title(); ?>
						</h3>
						<p style="font-size:.875rem;color:var(--color-slate-600);flex:1;margin:0;"><?php echo esc_html( get_the_excerpt() ); ?></p>
						<span style="font-family:var(--font-display);font-size:.75rem;font-weight:700;text-transform:uppercase;letter-spacing:.04em;color:var(--color-brand-blue);margin-top:.25rem;">Read More &raquo;</span>
						<p style="font-size:.75rem;color:var(--color-slate-400);border-top:1px solid var(--color-slate-100);padding-top:.75rem;margin:0;"><?php echo esc_html( get_the_date() ); ?></p>
					</div>
				</a>
			<?php endwhile; ?>
		</div>
		<div class="text-center" style="margin-top:2.5rem;">
			<?php the_posts_pagination(); ?>
		</div>
	<?php else : ?>
		<p class="text-center text-muted">No posts yet — check back soon.</p>
	<?php endif; ?>
</div>

<?php
echo ddlw_cta_block( array(
	'title'    => "Have a Question We Haven't Covered?",
	'subtitle' => "Skip the search and ask David directly, it's faster than digging through articles.",
) );

get_footer();
?>

<?php
/**
 * archive.php — blog / taxonomy archive
 */
get_header();
?>
<main>
  <div class="page-hero">
    <div class="page-hero__inner">
      <p class="section-label" style="color:var(--color-accent-light);margin-bottom:1.25rem;">D&amp;D Land Works</p>
      <h1 class="page-hero__h1">
        <?php
        if ( is_category() ) {
          echo 'Category: ' . single_cat_title( '', false );
        } elseif ( is_tag() ) {
          echo 'Tag: ' . single_tag_title( '', false );
        } elseif ( is_author() ) {
          echo 'Author: ' . get_the_author();
        } else {
          echo 'Blog';
        }
        ?>
      </h1>
    </div>
  </div>

  <div class="archive-inner">
    <?php if ( have_posts() ) : ?>
      <div class="archive-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <article class="post-card">
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="post-card__thumb">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
              </div>
            <?php endif; ?>
            <div class="post-card__body">
              <p class="post-card__date"><?php echo get_the_date(); ?></p>
              <h2 class="post-card__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <p class="post-card__excerpt"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="post-card__read">Read More &rarr;</a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <?php the_posts_pagination( [ 'prev_text' => '&larr; Newer', 'next_text' => 'Older &rarr;' ] ); ?>
    <?php else : ?>
      <p style="color:#475569;">No posts found.</p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>

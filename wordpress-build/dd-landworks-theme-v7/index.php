<?php
/**
 * index.php — fallback template
 * Used when no more specific template is found.
 */
get_header();
?>
<main>
  <div class="page-hero">
    <div class="page-hero__inner">
      <h1 class="page-hero__h1"><?php the_archive_title(); ?></h1>
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
      <?php the_posts_pagination(); ?>
    <?php else : ?>
      <p>No posts found.</p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>

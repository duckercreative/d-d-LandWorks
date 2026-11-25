<?php
/**
 * single.php — blog post template
 */
get_header();
?>
<main>
  <?php while ( have_posts() ) : the_post(); ?>

    <div class="page-hero">
      <div class="page-hero__inner">
        <p class="section-label" style="color:var(--color-accent-light);margin-bottom:1.25rem;">
          <?php echo get_the_date(); ?>
        </p>
        <h1 class="page-hero__h1"><?php the_title(); ?></h1>
      </div>
    </div>

    <div class="single-inner">
      <?php if ( has_post_thumbnail() ) : ?>
        <div style="margin-bottom:2rem;border-radius:var(--radius-card);overflow:hidden;">
          <?php the_post_thumbnail( 'large', [ 'style' => 'width:100%;height:auto;' ] ); ?>
        </div>
      <?php endif; ?>

      <div class="entry-content">
        <?php the_content(); ?>
      </div>

      <div style="margin-top:3rem;padding-top:2rem;border-top:1px solid #e2e8f0;">
        <a href="/blog" class="btn btn-outline">&larr; Back to Blog</a>
      </div>
    </div>

  <?php endwhile; ?>
</main>
<?php get_footer(); ?>

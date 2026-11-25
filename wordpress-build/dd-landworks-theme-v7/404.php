<?php
/**
 * 404.php
 */
get_header();
?>
<main>
  <div class="not-found">
    <div>
      <p class="not-found__num">404</p>
      <h1 class="not-found__title">Page Not Found</h1>
      <p class="not-found__desc">The page you're looking for doesn't exist or has been moved.</p>
      <div class="not-found__actions">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-cta">Go Home</a>
        <a href="/contact" class="btn btn-outline">Get a Free Estimate</a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>

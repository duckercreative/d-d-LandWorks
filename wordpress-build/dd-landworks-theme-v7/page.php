<?php
/**
 * page.php — default page template
 */
get_header();
?>
<main>
  <?php while ( have_posts() ) : the_post(); ?>

    <div class="page-hero">
      <div class="page-hero__inner">
        <h1 class="page-hero__h1"><?php the_title(); ?></h1>
        <?php if ( has_excerpt() ) : ?>
          <p class="page-hero__desc"><?php the_excerpt(); ?></p>
        <?php endif; ?>
      </div>
    </div>

    <div class="page-content">
      <?php the_content(); ?>
    </div>

  <?php endwhile; ?>
</main>
<?php get_footer(); ?>

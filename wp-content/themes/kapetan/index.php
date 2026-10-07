<?php
/**
 * The fallback template (required by WordPress).
 * This theme is built around front-page.php (homepage) and
 * single-case_study.php (the "case_study" custom post type's single
 * template); this file only renders if WordPress can't find a more
 * specific template for a URL — e.g. an unassigned page, a search
 * result, or a 404.
 *
 * @package Kapetan
 */

get_header();
?>

  <main id="main" class="max-w-[1440px] mx-auto px-6 md:px-10 py-24 md:py-32">
    <?php if ( have_posts() ) : ?>
      <?php
      while ( have_posts() ) :
        the_post();
        ?>
        <article <?php post_class( 'mb-16' ); ?>>
          <h1 class="h2-display text-navy-900"><?php the_title(); ?></h1>
          <div class="text-body text-navy-900/80 mt-6 leading-relaxed max-w-2xl">
            <?php the_content(); ?>
          </div>
        </article>
        <?php
      endwhile;
      ?>
    <?php else : ?>
      <p class="h3-display text-navy-900">Nothing found.</p>
      <p class="text-body text-navy-900/70 mt-4">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-brand hover:underline">Back to the homepage</a>
      </p>
    <?php endif; ?>
  </main>

<?php get_footer(); ?>

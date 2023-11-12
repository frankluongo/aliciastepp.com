<?php
/* Template Name: Categories Page */
get_header();
$cat = get_field('category');
?>
<button class="grid-button z-8" data-grid-button aria-label="Toggle Grid View" title="Toggle Grid View" type="button">
  grid view
</button>
<section class="horizontal-page previews" data-grid-wrapper data-display="full" data-scroll-container>
  <article class="offset" data-scroll-section>&nbsp;</article>
  <?php include(locate_template('loop-galleries.php')); ?>
</section>
<?php include(locate_template('components/ScrollPrompt.php')) ?>
<?php get_footer(); ?>
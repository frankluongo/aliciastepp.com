<?php
/* Template Name: Categories Page */
get_header();
$cat = get_field('category');
$view = get_field('default_view', 'option');
$label = $view === 'grid' ? 'fullscreen view' : 'grid view';
?>
<button class="grid-button z-8" data-grid-button aria-label="Toggle View Type" title="Toggle View Type" type="button">
  <?php echo $label ?>
</button>
<section class="horizontal-page previews" data-grid-wrapper data-display="<?php echo $view; ?>" data-scroll-container>
  <article class="offset" data-scroll-section>&nbsp;</article>
  <?php include(locate_template('loop-galleries.php')); ?>
</section>
<?php include(locate_template('components/ScrollPrompt.php')) ?>
<?php get_footer(); ?>
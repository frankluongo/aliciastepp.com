<?php
/* Template Name: COVID Page */
get_header();
?>
<section class="content vertical-page">
  <?php if (have_posts()) :
    while (have_posts()) : the_post();
      the_content();
    endwhile;
  endif;
  ?>
</section>

<?php get_footer(); ?>
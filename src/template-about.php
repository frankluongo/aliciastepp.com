<?php
/* Template Name: About Page */
get_header();
if (have_posts()) :
  while (have_posts()) : the_post();
    echo '<section class="vertical-page about-page-template">';
    the_content();
    echo '</section>';
  endwhile;
endif;
get_footer();

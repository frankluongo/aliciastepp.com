<?php
get_header();
if (have_posts()) :
  while (have_posts()) :
    the_post();
    echo '<section class="container container--slim content">';
    the_content();
    echo '</section>';
  endwhile;
endif;
get_footer();
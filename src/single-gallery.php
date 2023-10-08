<?php
get_header();
get_template_part('partials/content', 'subgallery-hero');
get_template_part('partials/content', 'credits');

echo "<div class=\"gallery\">";
if (have_rows('components')) {
  while (have_rows('components')) {
    the_row();
    $layout = get_row_layout();
    echo "<div class=\"gallery__item\" data-component=\"{$layout}\">";
    console_log($layout);
    get_template_part('partials/module', get_row_layout());
    echo "</div>";
  }
}
get_template_part('partials/content', 'back-button');
get_template_part('partials/content', 'view-more');
echo "</div>";
get_footer();

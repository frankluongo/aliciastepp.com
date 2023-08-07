<?php
get_header();
echo "<div class=\"gallery-wrapper\">";
echo "<aside class=\"gallery-credits\">";
get_template_part('partials/content', 'credits');
echo "</aside>";
echo "<div class=\"gallery\">";
get_template_part('partials/content', 'intro');
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
get_template_part('partials/content', 'view-more');
echo "</div>";
echo "</div>";
get_footer();

<?php
get_header();
$rows = get_field('slideshow');
if ($rows) {
  echo "<section class='slideshow'>";
  foreach ($rows as $key => $value) {
    get_template_part('partials/content', 'slide', array('key' => $key, 'images' => $value['images']));
  }
  echo "</section>";
}
get_template_part('partials/content', 'logo', array('location' => 'animated'));
get_footer();

<?php
get_header();
$rows = get_field('slideshow');
$timing = get_field('slideshow_timing');
if ($rows) {
  echo "<div class='slideshow' data-slideshow data-timing='$timing'>";
  foreach ($rows as $key => $value) {
    get_template_part('partials/content', 'slide', array('key' => $key, 'images' => $value['images']));
  }
  echo "</div>";
}
get_template_part('partials/content', 'logo', array('location' => 'animated'));
get_footer();

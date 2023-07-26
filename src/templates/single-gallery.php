<?php
get_header();
$modules = get_field('components');
echo '<section class="single-gallery-page horizontal-page" data-scroll-container>';
include("modules/intro.php");
if ($modules) {
  foreach ($modules as &$module) {
    $name = $module['acf_fc_layout'];
    include("modules/$name.php");
  }
}
include(locate_template('components/ViewMore.php'));
echo '</section>';
get_footer();

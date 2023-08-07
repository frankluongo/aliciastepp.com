<?php
/* Template Name: Categories Page */
get_header();
$cat = get_field('category');
echo "<section class=\"previews\">";
get_template_part('loop-galleries');
echo "</section>";
get_template_part('partials/module', 'scroll-prompt');
get_footer();

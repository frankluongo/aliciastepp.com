<?php
$title = get_the_title();
get_header();
echo '<section class="container">';
get_template_part('loop');
echo '</section>';
get_footer();

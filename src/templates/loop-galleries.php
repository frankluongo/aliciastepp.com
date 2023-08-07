<?php
$tests = get_field('tests', 'option');
$query = new WP_Query(
  array(
    'post_type' => 'gallery',
    'cat' => $cat,
    'posts_per_page' => 50
  )
);
if ($query->have_posts()) :
  while ($query->have_posts()) :
    $query->the_post();
    $id = get_the_ID();
    get_template_part('partials/content', 'preview', array('id' => $id));
  endwhile;
  wp_reset_postdata();
endif;

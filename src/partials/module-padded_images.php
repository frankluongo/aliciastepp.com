<?php
$images = get_sub_field('images');
$type = $images ? (count($images) > 1 ? $multiple = 'multiple' : 'single') : false;
if ($images) {
  echo "<div class=\"multiple-images multiple-images--$type\">";
  foreach ($images as &$image) {
    echo "<div class=\"multiple-images__column\">";
    echo wp_get_attachment_image($image['image']['id'], 'xxlarge', false, array('class' => 'multiple-images__img', 'data-lightbox-image' => true, 'loading' => 'lazy'));
    echo "</div>";
  }
  echo "</div>";
}

<?php
$image = get_sub_field('image');
echo "<div class=\"single-image\">";
if ($image) {
  echo wp_get_attachment_image($image['id'], 'xxlarge', false, array('class' => 'single-image__img', 'data-lightbox-image' => true, 'loading' => 'lazy'));
}
echo "</div>";

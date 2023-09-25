<?php
$image = wp_get_attachment_image(
  get_sub_field('image')['id'],
  'xxlarge',
  false,
  array(
    'class' => 'single-image__img',
    'loading' => 'lazy'
  )
);

echo <<<EOT
  <section class="single-image">
    $image
    <img class="single-image__img" data-lightbox-image loading="lazy" src
  </section>

EOT;

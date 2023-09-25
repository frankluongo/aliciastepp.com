<?php
$preview_items = get_field('preview_items');
$image_id = $preview_items['full']['id'];
$image = wp_get_attachment_image($image_id, 'xxlarge', false, array('class' => 'intro__image', 'data-lightbox-image' => true, 'loading' => 'lazy'));
$title = get_the_title();

echo <<<HTML
<section class="intro">
  <div class="intro__inner">
    <h1 class="intro__title" data-title>
      $title
    </h1>
    $image
  </div>
</section>
HTML;

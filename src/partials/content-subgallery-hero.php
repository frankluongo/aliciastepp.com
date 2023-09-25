<?php
$credits = get_field('credits_info');
$preview_items = get_field('preview_items');
$full = wp_get_attachment_image($preview_items['full']['id'], 'large', false, array('class' => 'subgallery-hero__image subgallery-hero__image--full', 'loading' => 'lazy'));
$thumbnail_color = $preview_items['thumbnail_color'];
$thumbnail = wp_get_attachment_image(
  $preview_items['thumbnail']['id'],
  'large',
  false,
  array(
    'class' => "subgallery-hero__image subgallery-hero__image--thumbnail subgallery-hero__image--$thumbnail_color",
    'loading' => 'lazy'
  )
);
$title = get_the_title();

echo <<<HTML
  <div class="subgallery-hero">
    $full
    $thumbnail
    <div class="subgallery-hero__credits">
    $credits
    </div>
    <h2 class="subgallery-hero__title font-heading">
        $title
    </h2>
  </div>
HTML;

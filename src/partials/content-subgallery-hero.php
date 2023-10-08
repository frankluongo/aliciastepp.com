<?php
$masthead_design = get_field('masthead_design');
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

// Replace spaces with line breaks
$spaced_title = str_replace(' ', '<br />', $title);

echo <<<HTML
  <div class="subgallery-hero subgallery-hero--{$masthead_design}">
    $full
    $thumbnail
    <h2 class="subgallery-hero__title font-heading">
        $title
    </h2>
  </div>
HTML;

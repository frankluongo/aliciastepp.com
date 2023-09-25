<?php
$id = $args['id'];
$thumb = get_field('preview_items', $id)['thumbnail']['sizes']['large'];
$full = get_field('preview_items', $id)['full']['sizes']['xxlarge'];
$custom_title = get_field('preview_items', $id)['custom_title'];
$render_title = $custom_title ? str_replace(' ', '', $custom_title) : $title;
$title = get_the_title();
$thumbnail_color = get_field('preview_items', $id)['thumbnail_color'];

$link = get_the_permalink();


echo <<<HTML
<article class="preview">
  <a class="preview__link" href="{$link}" title="{$title}">
    <div class="preview__images">
      <figure class="preview__image-wrapper">
        <img alt="{$title}" class="preview__image" loading="lazy" src="{$full}" />
      </figure>
      <figure class="preview__image-wrapper">
        <img alt="{$title}" class="preview__image preview__image--{$thumbnail_color}" loading="lazy" src="{$thumb}">
      </figure>
    </div>
    <h2 class="preview__title">
      $render_title
    </h2>
  </a>
</article>
HTML;

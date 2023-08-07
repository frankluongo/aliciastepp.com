<?php
$id = $args['id'];
$thumb = get_field('preview_items', $id)['thumbnail']['sizes']['large'];
$full = get_field('preview_items', $id)['full']['sizes']['xxlarge'];
$customTitle = get_field('preview_items', $id)['custom_title'];
$title = get_the_title();
$thumbnailColor = get_field('preview_items', $id)['thumbnail_color'];
?>

<article class="preview">
  <a class="preview__link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <div class="preview__images">
      <figure class="preview__image-wrapper">
        <img alt="<?php echo $title; ?>" class="preview__image" loading="lazy" src="<?php echo $full; ?>" />
      </figure>
      <figure class="preview__image-wrapper">
        <img alt="<?php echo $title; ?>" class="preview__image preview__image--<?php echo $thumbnailColor; ?>" loading="lazy" src="<?php echo $thumb; ?>">
      </figure>
    </div>
    <h2 class="preview__title">
      <?php echo $customTitle ? str_replace(' ', '', $customTitle) : $title; ?>
    </h2>
  </a>
</article>
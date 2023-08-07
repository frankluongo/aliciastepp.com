<?php
$bg_img = get_sub_field('multiple_images_background_background');
$border_color = get_sub_field('border_color');
$border_size = get_sub_field('border_size');
$has_border = get_sub_field('has_border');
$border_modifier = $has_border ? 'border' : '';
$id = get_row_layout() . '-' . get_the_ID() . '-' . get_row_index();
$img = get_sub_field('image');
$images = get_sub_field('images');
$type = count($images) > 1 ? $multiple = 'multiple' : $multiple = 'single';
?>

<div class="multiple-images multiple-images--<?php echo $type ?>">
  <?php
  if ($images) {
    foreach ($images as &$image) { ?>
      <div class="mulitple-images__column">
        <picture class="multiple-images__picture">
          <source srcset="<?php echo $image['image']['sizes']['large'] ?>" media="(min-width: 0px)">
          <source srcset="<?php echo $image['image']['sizes']['xlarge'] ?>" media="(min-width: 768px)">
          <source srcset="<?php echo $image['image']['sizes']['xxlarge'] ?>" media="(min-width: 1024px)">
          <img data-lightbox-image class="multiple-images__img" src="<?php echo $image['image']['sizes']['xxlarge'] ?>" alt="">
        </picture>
      </div>
  <?php }
  } ?>
</div>

<?php
echo <<<EOT
  <style>
    #$id {
      --bg-color: {$bg_img['bg_color']};
      --bg-img: {$bg_img['background_image']['sizes']['xxlarge']};
      --border-color: {$border_color};
      --border-size: {$border_size}px;
    }
</style>
EOT;

<?php
$bg_img = get_sub_field('single_image_background_background');
$border_color = get_sub_field('border_color');
$border_size = get_sub_field('border_size');
$has_border = get_sub_field('has_border');
$border_modifier = $has_border ? 'border' : '';
$id = get_row_layout() . '-' . get_the_ID() . '-' . get_row_index();
$img = get_sub_field('image');
?>

<div class="single-image" id="<?php echo $id; ?>">
  <picture class="single-image__picture">
    <source srcset="<?php echo $img['sizes']['large'] ?>" media="(min-width: 0px)">
    <source srcset="<?php echo $img['sizes']['xlarge'] ?>" media="(min-width: 768px)">
    <source srcset="<?php echo $img['sizes']['xxlarge'] ?>" media="(min-width: 1024px)">
    <img data-lightbox-image class="single-image__img single-image__img--<?php echo $border_modifier; ?>" src="<?php echo $img['sizes']['xxlarge'] ?>" alt="" loading="lazy">
  </picture>
</div>
<?php
echo <<<EOT
  <style>
    #$id {
      --bg-color: {$bg_img['bg_color']};
      
      --border-color: {$border_color};
      --border-size: {$border_size}px;
    }
</style>
EOT;

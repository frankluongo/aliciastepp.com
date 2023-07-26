<?php
$image = $module['image'];
$cropMobile = $module['cropping_mobile'];
$cropDesktop = $module['desktop_cropping'];
$padding = $module['padding'];
$size = $module['size'];
?>

<section class="section ultimate-image has-padding ultimate-image--<?php echo $size; ?>" data-scroll-section style="
  background-color: <?php echo $module['background_color']; ?>;
  --width-mobile: <?php echo $cropMobile; ?>vw;
  --width-desktop: <?php echo $cropDesktop; ?>vw;
  <?php displayPadding($padding); ?>
  " <?php if ($module['background_image']) { ?> data-lazy-bg data-src="<?php echo $module['background_image']['sizes']['xlarge']; ?>" <?php } ?>>
  <div class="ultimate-image__inner">
    <?php
    if ($image) { ?>
      <img data-delayed-image class="ultimate-image__image" data-src="<?php echo $image['sizes']['xlarge']; ?>" alt="<?php echo $image['title']; ?>" />
    <?php } ?>
  </div>
</section>
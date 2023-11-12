<section class="single-image single-image--<?php echo $module['size_type']; ?> has-padding" data-single-image data-scroll-section style="
    <?php if ($module['single_image_background_background']['bg_color']) { ?>
      background-color: <?php echo $module['single_image_background_background']['bg_color'] ?>;
    <?php } ?>
    <?php if ($module['single_image_background_background']['background_image']) { ?>
      background-image: url(<?php echo $module['single_image_background_background']['background_image']['sizes']['xxlarge']; ?>);
    <?php } ?>
    <?php if ($module['size_type'] == 'width' or $module['size_type'] == 'height') { ?>
      --size-mobile: <?php echo $module['screen_sizes']['mobile']; ?>%;
      --size-tablet: <?php echo $module['screen_sizes']['tablet']; ?>%;
      --size-desktop: <?php echo $module['screen_sizes']['Desktop']; ?>%;
    <?php } ?>
    <?php echo setPaddingVars($module['single_image_padding_padding']); ?>
  ">
  <div class="single-image__inner">
    <picture class="single-image__picture" data-picture>
      <source srcset="<?php echo $module['image']['sizes']['large'] ?>" media="(min-width: 0px)">
      <source srcset="<?php echo $module['image']['sizes']['xlarge'] ?>" media="(min-width: 768px)">
      <source srcset="<?php echo $module['image']['sizes']['xxlarge'] ?>" media="(min-width: 1024px)">
      <img class="single-image-picture__img" src="<?php echo $module['image']['sizes']['xxlarge'] ?>" alt="" <?php if ($module['has_border']) { ?> style="border: <?php echo $module['border_size']; ?>px solid <?php echo $module['border_color']; ?>;" <?php } ?> />
    </picture>
  </div>
</section>
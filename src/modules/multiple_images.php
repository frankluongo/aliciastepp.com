<section class="multiple-images has-padding" data-multiple-images data-info='<?php echo json_encode($module); ?>' data-scroll-section style="
    <?php if ($module['multiple_images_background_background']['bg_color']) { ?>
      background-color: <?php echo $module['multiple_images_background_background']['bg_color'] ?>;
    <?php } ?>
    <?php if ($module['multiple_images_background_background']['background_image']) { ?>
      background-image: url(<?php echo $module['multiple_images_background_background']['background_image']['sizes']['xxlarge']; ?>);
    <?php } ?>
    <?php if ($module['size_type'] == 'screen') { ?>
      --size-mobile: <?php echo $module['screen_sizes']['mobile']; ?>%;
      --size-tablet: <?php echo $module['screen_sizes']['tablet']; ?>%;
      --size-desktop: <?php echo $module['screen_sizes']['Desktop']; ?>%;
    <?php } ?>
    <?php echo setPaddingVars($module['multiple_images_padding_padding']); ?>
    <?php if ($module['gutter_settings'] == 'match') { ?>
      --gap-mobile: <?php echo $module['multiple_images_padding_padding']['padding_left_mobile']; ?>px;
      --gap-tablet: <?php echo $module['multiple_images_padding_padding']['padding_left_tablet']; ?>px;
      --gap-desktop: <?php echo $module['multiple_images_padding_padding']['padding_left_desktop']; ?>px;
    <?php } ?>
  ">
  <div class="multiple-images__inner" style="grid-template-columns: repeat(<?php echo $module['columns'] ?>, 1fr);grid-template-rows: repeat(<?php echo $module['rows'] ?>, 1fr);" data-inner>
    <?php
    if ($module['images']) {
      foreach ($module['images'] as &$image) { ?>
        <div class="multiple-images-inner__column">
          <picture class="multiple-images__picture">
            <source srcset="<?php echo $image['image']['sizes']['large'] ?>" media="(min-width: 0px)">
            <source srcset="<?php echo $image['image']['sizes']['xlarge'] ?>" media="(min-width: 768px)">
            <source srcset="<?php echo $image['image']['sizes']['xxlarge'] ?>" media="(min-width: 1024px)">
            <img class="multiple-images-picture__img" data-picture src="<?php echo $image['image']['sizes']['xxlarge'] ?>" alt="">
          </picture>
        </div>
    <?php }
    } ?>
  </div>
</section>
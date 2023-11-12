<?php
$images = $module['images'];
$gap = $module['gap_size'];
$tp = $module['padding']['top'];
$bp = $module['padding']['bottom'];
$lp = $module['padding']['left'];
$rp = $module['padding']['right'];
$mtp = getValue($module['padding_mobile']['top']);
$mbp = getValue($module['padding_mobile']['bottom']);
$mlp = getValue($module['padding_mobile']['left']);
$mrp = getValue($module['padding_mobile']['right']);
$bg = $module['use_background_image'];
?>

<section class="section section--flex section--full-screen padded-images padded-images--<?php echo $module['arrangement']; ?> horizontal-section padded <?php if ($bg) {
                                                                                                                                                          echo 'padded-images--has-bg';
                                                                                                                                                        } ?>" style="
    background-color: <?php echo $module['background_color']; ?>;
    --gap: <?php echo $gap; ?>rem;
    --tp: <?php echo $tp; ?>rem;
    --bp: <?php echo $bp; ?>rem;
    --lp: <?php echo $lp; ?>rem;
    --rp: <?php echo $rp; ?>rem;
    --mtp: <?php echo $mtp; ?>rem;
    --mbp: <?php echo $mbp; ?>rem;
    --mlp: <?php echo $mlp; ?>rem;
    --mrp: <?php echo $mrp; ?>rem;
  " <?php if ($bg) { ?> data-lazy-bg data-src="<?php echo $module['background_image']['sizes']['xlarge']; ?>" <?php } ?> data-scroll-section>
  <?php
  if ($images) {
    foreach ($images as &$image) { ?>
      <img data-delayed-image class="padded-images__image" data-src="<?php echo $image['image']['sizes']['xlarge']; ?>" alt="<?php echo $image['image']['title']; ?>" <?php if ($module['arrangement'] === 'horizontal') { ?> data-dynamic-image <?php } else { ?> data-vertical-image <?php } ?> />
  <?php }
  }
  ?>
</section>
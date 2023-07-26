<?php
$size = $module['size'];
$tp = $module['padding']['top'];
$bp = $module['padding']['bottom'];
$lp = $module['padding']['left'];
$rp = $module['padding']['right'];
?>

<section class="framed-image section section--flex section--full-screen horizontal-section padded" data-scroll-section style="
    --tp: <?php echo $tp; ?>rem;
    --bp: <?php echo $bp; ?>rem;
    --lp: <?php echo $lp; ?>rem;
    --rp: <?php echo $rp; ?>rem;
  ">
  <img style="--border-color: <?php echo $module['frame_color']; ?>;--size: <?php echo $size; ?>vw;" data-lazy-img data-loaded="false" class="framed-image__image has-border has-border--<?php echo $module['frame_size']; ?>" data-src="<?php echo $module['image']['sizes']['xxlarge']; ?>" alt="<?php echo $module['image']['title']; ?>">
</section>
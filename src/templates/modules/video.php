<?php
$tp = $module['padding']['top'];
$bp = $module['padding']['bottom'];
$lp = $module['padding']['left'];
$rp = $module['padding']['right'];
$width = $module['video_width'];
?>

<section class="video section section--flex horizontal-section padded" data-scroll-section style="
    --tp: <?php echo $tp; ?>rem;
    --bp: <?php echo $bp; ?>rem;
    --lp: <?php echo $lp; ?>rem;
    --rp: <?php echo $rp; ?>rem;
    --width: <?php echo $width; ?>vw;
  ">
  <article class="video-wrapper video-wrapper--<?php echo $module['size']; ?>">
    <?php echo $module['video']; ?>
  </article>
</section>
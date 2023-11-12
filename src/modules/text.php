<?php
$tp = $module['padding']['top'];
$bp = $module['padding']['bottom'];
$lp = $module['padding']['left'];
$rp = $module['padding']['right'];
$fs = $module['font_size'];
$type = $module['size'];
$width = $module['text_width'];
$background = in_array('background_color', $module) ? $module['background_color'] : 'white';
?>

<section class="text text--<?php echo $type ?> section section--flex section--full-screen horizontal-section padded" data-scroll-section style="
    background-color: <?php echo $background; ?>;
    --bg-color: <?php echo $background; ?>;
    --text-color: <?php echo $module['text_color'] ?>;
    --tp: <?php echo $tp; ?>rem;
    --bp: <?php echo $bp; ?>rem;
    --lp: <?php echo $lp; ?>rem;
    --rp: <?php echo $rp; ?>rem;
    --fs: <?php echo $fs; ?>%;
    --width: <?php echo $width; ?>rem;
  ">
  <article class="text__wrapper">
    <?php echo $module['text']; ?>
  </article>
</section>
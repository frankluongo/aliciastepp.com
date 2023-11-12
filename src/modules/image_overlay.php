<?php
$topImage = $module['top_image']['image']['sizes']['xxlarge'];
$title = $module['top_image']['image']['title'];
$size = $module['top_image']['size'];
$hasFrame = $module['top_image']['show_frame'];
$frameColor = $module['top_image']['frame_color'];
$frameSize = $module['top_image']['frame_size'];
$placement = $module['top_image']['placement'];
$tp = $module['padding']['top'];
$bp = $module['padding']['bottom'];
$lp = $module['padding']['left'];
$rp = $module['padding']['right'];
?>

<section class="image-overlay section section--full-screen section--flex horizontal-section padded" data-scroll-section data-lazy-bg data-loaded="false" data-src="<?php echo $module['bottom_image']['sizes']['xxlarge'] ?>" data-placement="<?php echo $placement; ?>" style="
    --tp: <?php echo $tp; ?>rem;
    --bp: <?php echo $bp; ?>rem;
    --lp: <?php echo $lp; ?>rem;
    --rp: <?php echo $rp; ?>rem;
  ">
  <img <?php if ($hasFrame) { ?> class="image-overlay__image has-border has-border--<?php echo $frameSize; ?>" style="--border-color: <?php echo $frameColor; ?>;--size: <?php echo $size; ?>%;" <?php } else { ?> class="image-overlay__image" style="--size: <?php echo $size; ?>%;" <?php } ?> data-lazy-img data-loaded="false" class="image-overlay__image" data-src="<?php echo $topImage; ?>" alt="<?php echo $title; ?>">
</section>
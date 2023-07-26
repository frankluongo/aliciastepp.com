<?php
$tp = $module['padding']['top'];
$bp = $module['padding']['bottom'];
$lp = $module['padding']['left'];
$rp = $module['padding']['right'];
$fs = $module['font_size'];
?>

<section class="text-over-image section section--full-screen section--flex horizontal-section padded" data-scroll-section data-lazy-bg data-loaded="false" data-src="<?php echo $module['image']['sizes']['xxlarge'] ?>" style="
    --tp: <?php echo $tp; ?>rem;
    --bp: <?php echo $bp; ?>rem;
    --lp: <?php echo $lp; ?>rem;
    --rp: <?php echo $rp; ?>rem;;
  ">
  <article <?php if ($module['has_blend_mode']) { ?> class="text-over-image__text has-blend" <?php } else { ?> class="text-over-image__text" <?php }  ?> style="--fs: <?php echo $fs; ?>%;--color: <?php echo $module['text_color']; ?>">
    <?php echo $module['text'] ?>
  </article>
</section>
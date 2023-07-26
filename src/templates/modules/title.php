<?php
$titleFs = $module['title_font_size'];
$dateFs = $module['date_font_size'];
$descriptionFs = $module['description_font_size'];
$tp = $module['padding']['top'];
$bp = $module['padding']['bottom'];
$lp = $module['padding']['left'];
$rp = $module['padding']['right'];
$width = $module['text_width'];
?>

<section class="title section section--flex horizontal-section padded" data-scroll-section style="
    --bg-color: <?php echo $module['background_color']; ?>;
    --text-color: <?php echo $module['text_color'] ?>;
    --tp: <?php echo $tp; ?>rem;
    --bp: <?php echo $bp; ?>rem;
    --lp: <?php echo $lp; ?>rem;
    --rp: <?php echo $rp; ?>rem;
    --width: <?php echo $width; ?>rem;
  ">
  <article class="title__text">
    <header class="title__title-wrapper" style="--fs: <?php echo $titleFs; ?>%;">
      <h2 class="title__title" data-title>
        <?php echo $module['title'] ?>
      </h2>
    </header>
    <div class="title__description" style="--fs: <?php echo $descriptionFs; ?>%;">
      <?php echo $module['description'] ?>
    </div>
    <div class="title__date" style="--fs: <?php echo $dateFs; ?>%;">
      <p><?php echo $module['date']; ?></p>
    </div>
  </article>
</section>
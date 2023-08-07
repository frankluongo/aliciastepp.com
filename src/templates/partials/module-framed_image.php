<?php

$bp = get_sub_field('padding')['bottom'];
$frame_color = get_sub_field('frame_color');
$frame_size = get_sub_field('frame_size');
$id = get_row_layout() . '-' . get_the_ID() . '-' . get_row_index();
$image = get_sub_field('image');
$lp = get_sub_field('padding')['left'];
$rp = get_sub_field('padding')['right'];
$size = get_sub_field('size');
$tp = get_sub_field('padding')['top'];

echo "<div class=\"framed-image\" id=\"$id\">";

echo "<img data-lightbox-image loading=\"lazy\" class=\"framed-image__image framed-image__image--{$frame_size}\" src=\"{$image['sizes']['xxlarge']}\" alt=\"{$image['title']}\">";

echo "</div>";

echo <<<EOT
  <style>
    #$id {
    --border-color: $frame_color;
    --bp: {$bp}rem;
    --fs: {$fs}%;
    --lp: {$lp}rem;
    --rp: {$rp}rem;
    --size: {$size}dvh;
    --text-color: {$text_color};
    --tp: {$tp}rem;
    }
</style>
EOT;

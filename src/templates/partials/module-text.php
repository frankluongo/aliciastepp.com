<?php

$id = get_row_layout() . '-' . get_the_ID() . '-' . get_row_index();
$tp = get_sub_field('padding')['top'];
$bp = get_sub_field('padding')['bottom'];
$lp = get_sub_field('padding')['left'];
$rp = get_sub_field('padding')['right'];
$fs = get_sub_field('font_size');
$background = get_sub_field('background_color') ? get_sub_field('background_color') : 'white';
$text_color = get_sub_field('text_color');

echo "<div class=\"text\" id=\"$id\">";
echo "<div class=\"text__inner\">";
the_sub_field('text');
echo "</div>";
echo "</div>";

echo <<<EOT
  <style>
    #$id {
    --fs: {$fs}%;
    --text-color: {$text_color};
    --tp: {$tp}rem;
    --bp: {$bp}rem;
    --lp: {$lp}rem;
    --rp: {$rp}rem;
    }
</style>
EOT;

<?php

$id = get_row_layout() . '-' . get_the_ID() . '-' . get_row_index();

$titleFs = get_sub_field('title_font_size');
$dateFs = get_sub_field('date_font_size');
$descriptionFs = get_sub_field('description_font_size');
$tp = get_sub_field('padding')['top'];
$bp = get_sub_field('padding')['bottom'];
$lp = get_sub_field('padding')['left'];
$rp = get_sub_field('padding')['right'];
$width = get_sub_field('text_width');

$text_color = get_sub_field('text_color');

echo "<div class=\"title\" id=\"$id\">";
echo "<div class=\"title__inner\">";
if (get_sub_field('title')) {
  echo "<header class=\"title__header\" style=\"--fs: {$titleFs}%;\">";
  echo "<h2 class=\"title__title\">";
  the_sub_field('title');
  echo "</h2>";
  echo "</header>";
}
if (get_sub_field('description')) {
  echo "<div class=\"title__description\" style=\"--fs: {$descriptionFs}%;\">";
  the_sub_field('description');
  echo "</div>";
}

if (get_sub_field('date')) {
  echo "<div class=\"title__date\" style=\"--fs: {$dateFs}%;\">";
  echo "<p>";
  the_sub_field('date');
  echo "</p>";
  echo "</div>";
}

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

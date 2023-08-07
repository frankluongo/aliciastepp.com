<?php
/* Template Name: Create PDF Page */
get_header();
$images = get_field('pdf_images');
$covers = get_field('front_back_cover_images');

echo "<div class=\"contact-images-wrapper\" id=\"images-wrapper\" data-pdf-front=\"{$covers['front_cover']['sizes']['xxlarge']}\" data-pdf-back=\"{$covers['back_cover']['sizes']['xxlarge']}\">";
if ($images) {
  foreach ($images as &$image) {
    $photo = $image['image'];
    echo "<button class=\"contact-image__button\" title=\"{$photo['title']}\" data-selected=\"false\" data-image data-src=\"{$photo['sizes']['xxlarge']}\">";
    echo "<img loazing=\"lazy\" class=\"contact-image__image\" src=\"{$photo['sizes']['medium']}\" alt=\"{$photo['title']}\" />";
    echo "</button>";
  }
}

echo "<div class=\"printing-loader\" data-printing>";
echo "<div class=\"printing-loader__text\">";
echo "Preparing Photos...";
echo "</div>";
echo "</div>";


get_footer();

<?php
$id = $args['id'];
$thumb = get_field('preview_items', $id)['thumbnail']['sizes']['large'];
$full = get_field('preview_items', $id)['full']['sizes']['xxlarge'];
$custom_title = get_field('preview_items', $id)['custom_title'];
$title = get_the_title();
$thumbnail_color = get_field('preview_items', $id)['thumbnail_color'];

$link = get_the_permalink();

echo "<article class=\"preview\">";
echo "<a class=\"preview__link\" href=\"{$link}\" title=\"{$title}\">";
echo "<div class=\"preview__images\">";
echo "<figure class=\"preview__image-wrapper\">";
echo "<img alt=\"{$title}\" class=\"preview__image\" loading=\"lazy\" src=\"{$full}\" />";
echo "</figure>";
echo "<figure class=\"preview__image-wrapper\">";
echo "<img alt=\"{$title}\" class=\"preview__image preview__image--{$thumbnail_color}\" loading=\"lazy\" src=\"{$thumb}\">";
echo "</figure>";
echo "</div>";
echo "<h2 class=\"preview__title\">";
echo $custom_title ? str_replace(' ', '', $custom_title) : $title;
echo "</h2>";
echo "</a>";
echo "</article>";

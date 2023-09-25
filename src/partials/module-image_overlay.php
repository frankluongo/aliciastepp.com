<?php
$bottom_image = get_sub_field('bottom_image')['sizes']['xxlarge'];
$frame_color = $module['top_image']['frame_color'];
$frame_size = get_sub_field('top_image')['frame_size'];
$has_frame = get_sub_field('top_image')['show_frame'];
$placement = get_sub_field('top_image')['placement'];
$size = get_sub_field('top_image')['size'];
$top_image_id = get_sub_field('top_image')['image']['id'];

$style = array("style" => "--border-color: {$frame_color}; --size: {$size}%;");

echo "<div class=\"image-overlay image-overlay--{$placement}\" style=\"background-image: url(\"{$bottom_image}\")\">";
if ($has_frame) {
  $args = array('class' => "image-overlay__image image-overlay__image--{$frame_size}", ...$style);
} else {
  $args = array('class' => "image-overlay__image", ...$style);
}
echo wp_get_attachment_image($top_image_id, 'xxlarge', false, $args);
echo "</div>";

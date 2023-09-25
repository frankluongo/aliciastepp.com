<?php
$blend = get_sub_field('has_blend_mode') ? 'text-over-image__text--blended' : '';
$font_size = get_sub_field('font_size');
$image =  get_sub_field('image')['sizes']['xxlarge'];
$text_color = get_sub_field('text_color');

echo "<div class=\"text-over-image\" style=\"background-image: url(\"$image\");\">";
echo "<article class=\"text-over-image__text {$blend}\" style=\"--fs: {$font_size}; --color: {$text_color};\">";
the_sub_field('text');
echo "</article>";
echo "</div>";

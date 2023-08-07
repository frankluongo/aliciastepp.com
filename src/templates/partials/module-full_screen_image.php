<?php
$image = get_sub_field('image');
echo "<section class=\"single-image\">";
echo "<img data-lightbox-image loading=\"lazy\" class=\"single-image__img\" src=\"{$image['sizes']['xxlarge']}\" alt=\"{$image['title']}\">";
echo "</section>";

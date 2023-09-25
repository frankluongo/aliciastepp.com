<?php

echo "<div class=\"image-with-letterform\">";
echo "<div class=\"image-with-letterform__letter\">";
the_sub_field('letter');
echo "</div>";
echo wp_get_attachment_image(get_sub_field('image')['id'], 'xxlarge', false, array('class' => 'image-with-letterform__image'));
echo "</div>";

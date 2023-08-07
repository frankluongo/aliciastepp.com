<?php
$id = get_the_ID();
$category_slug = get_the_category($id)[0]->slug;;

echo "<div class=\"credits-inner\">";
echo "<div class=\"credits__back-button\">";
echo "<a class=\"credits-back-button__link\" href=\"/{$category_slug}\" title=\"Return to Gallery page\">";
get_template_part('partials/icon', 'chevron', array('class' => 'credits-back-button__icon'));
echo "</a>";
echo "</div>";
if (get_field('display_credits')) {
  echo "<div class=\"credits\">";
  the_field('credits_info');
  echo "</div>";
}
echo "</div>";
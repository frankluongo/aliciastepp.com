<?php
$category_slug = get_the_category(get_the_ID())[0]->slug;
$credits = get_field('credits_info');

echo <<<HTML
  <div class="credits-inner">
    <div class="credits__back-button">
      <a class="credits-back-button__link" href="/{$category_slug}" title="Return to Gallery page">
HTML;
get_template_part('partials/icon', 'chevron-left', array('class' => 'credits-back-button__icon'));
echo <<<HTML
      </a>
    </div>
    <div class="credits">
      $credits
    </div>
  </div>
HTML;

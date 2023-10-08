<?php
$category_slug = get_the_category(get_the_ID())[0]->slug;
echo <<<HTML
  <a class="back-button" href="/{$category_slug}" title="Return to Gallery page">
    <div class="back-button__icon-container">
HTML;
get_template_part('partials/icon', 'chevron-left', array('class' => 'back-button__icon'));
echo <<<HTML
    </div>
  &nbsp;Return to Gallery page
  </a>
HTML;

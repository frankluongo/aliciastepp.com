<?php
$credits = get_field('credits_info');
$formatted_text = str_replace(['<p>', '</p>', '<br>', '<br />'], '', $credits);

echo <<<HTML
  <div class="credits">
  $formatted_text
  </div>
HTML;

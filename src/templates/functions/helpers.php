<?php

function console_log($data)
{
  echo '<script>';
  echo 'console.log(' . json_encode($data) . ')';
  echo '</script>';
}

function stringify_data($data)
{
  echo json_encode($data);
}

function basePath()
{
  echo get_template_directory_uri();
}

function displayPadding($padding)
{
  echo '--ptm: ' . getValue($padding['padding_top_mobile']) . 'rem;';
  echo '--pbm: ' . getValue($padding['padding_bottom_mobile']) . 'rem;';
  echo '--plm: ' . getValue($padding['padding_left_mobile']) . 'rem;';
  echo '--prm: ' . getValue($padding['padding_right_mobile']) . 'rem;';
  echo '--ptd: ' . getValue($padding['padding_top_desktop']) . 'rem;';
  echo '--pbd: ' . getValue($padding['padding_bottom_desktop']) . 'rem;';
  echo '--pld: ' . getValue($padding['padding_left_desktop']) . 'rem;';
  echo '--prd: ' . getValue($padding['padding_right_desktop']) . 'rem;';
}

function getValue($value)
{
  if (strlen($value) > 0) return $value;
  return '0';
}

function get_padding($padding)
{
  return <<<EOT
  --ptm: {$padding['padding_top_mobile']}px;
  --pbm: {$padding['padding_bottom_mobile']}px;
  --plm: {$padding['padding_left_mobile']}px;
  --prm: {$padding['padding_right_mobile']}px;
  --ptt: {$padding['padding_top_tablet']}px;
  --pbt: {$padding['padding_bottom_tablet']}px;
  --plt: {$padding['padding_left_tablet']}px;
  --prt: {$padding['padding_right_tablet']}px;
  --ptd: {$padding['padding_top_desktop']}px;
  --pbd: {$padding['padding_bottom_desktop']}px;
  --pld: {$padding['padding_left_desktop']}px;
  --prd: {$padding['padding_right_desktop']}px;
  EOT;
}

function setPaddingVars($padding)
{
  echo '--ptm: ' . getValue($padding['padding_top_mobile']) . 'px;';
  echo '--pbm: ' . getValue($padding['padding_bottom_mobile']) . 'px;';
  echo '--plm: ' . getValue($padding['padding_left_mobile']) . 'px;';
  echo '--prm: ' . getValue($padding['padding_right_mobile']) . 'px;';
  echo '--ptt: ' . getValue($padding['padding_top_tablet']) . 'px;';
  echo '--pbt: ' . getValue($padding['padding_bottom_tablet']) . 'px;';
  echo '--plt: ' . getValue($padding['padding_left_tablet']) . 'px;';
  echo '--prt: ' . getValue($padding['padding_right_tablet']) . 'px;';
  echo '--ptd: ' . getValue($padding['padding_top_desktop']) . 'px;';
  echo '--pbd: ' . getValue($padding['padding_bottom_desktop']) . 'px;';
  echo '--pld: ' . getValue($padding['padding_left_desktop']) . 'px;';
  echo '--prd: ' . getValue($padding['padding_right_desktop']) . 'px;';
}

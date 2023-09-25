<?php


function copyright()
{
  return '&copy; ' . date("Y");
}

add_shortcode('copyright', 'copyright');

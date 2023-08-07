<?php $tests = get_field('tests', 'option'); ?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js" style="opacity: 0;">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
                                  echo ' :';
                                } ?> <?php bloginfo('name'); ?></title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="site-inner">
    <?php get_template_part('partials/global', 'header'); ?>
    <main id="main-content">
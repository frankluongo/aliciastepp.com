<?php
function theme_scripts()
{
  global $post;
  wp_enqueue_style('app', get_template_directory_uri() . '/assets/styles/app.css', array(), wp_get_theme()->get('Version'));
  wp_enqueue_script('app', get_template_directory_uri() . '/assets/scripts/app.js');

  if (is_single()) {
    if ($post->post_type == 'gallery') {
      wp_enqueue_script('gallery', get_template_directory_uri() . '/assets/scripts/gallery.js');
    }
  }
  if (is_page()) {
    $template = get_page_template_slug();
    if ($template == 'template-category.php') {
      wp_enqueue_script('gallery', get_template_directory_uri() . '/assets/scripts/gallery.js');
    }
    if ($template == 'template-create.php') {
      wp_enqueue_script('create', get_template_directory_uri() . '/assets/scripts/create.js');
    }
    switch ($post->post_name) {
      case 'overview':
        wp_enqueue_script('home', get_template_directory_uri() . '/assets/scripts/home.js');
        break;
    }
  }
}

function admin_scripts()
{
  wp_enqueue_style('admin', get_template_directory_uri() . '/assets/styles/admin.css', array(), wp_get_theme()->get('Version'));
}

function editor_scripts()
{
  add_editor_style('/assets/styles/editor.css');
}

add_action('admin_enqueue_scripts', 'admin_scripts');
add_action('admin_init', 'editor_scripts');
add_action('wp_enqueue_scripts', 'theme_scripts');

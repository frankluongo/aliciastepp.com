<?php



if (!function_exists('theme_scripts')) :
  function theme_scripts()
  {
    $modules = array(
      array(
        'name' => 'framed-image',
        'path' => get_template_directory_uri() . '/assets/styles/modules/framed-image.css',
      ),
      array(
        'name' => 'multiple-images',
        'path' => get_template_directory_uri() . '/assets/styles/modules/multiple-images.css',
      ),
      array(
        'name' => 'single-image',
        'path' => get_template_directory_uri() . '/assets/styles/modules/single-image.css',
      ),
      array(
        'name' => 'text',
        'path' => get_template_directory_uri() . '/assets/styles/modules/text.css',
      ),
      array(
        'name' => 'title',
        'path' => get_template_directory_uri() . '/assets/styles/modules/title.css',
      ),
      array(
        'name' => 'video',
        'path' => get_template_directory_uri() . '/assets/styles/modules/video.css',
      ),
    );

    global $post;
    // Global CSS Files
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/styles/global/reset.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('typography', get_template_directory_uri() . '/assets/styles/global/typography.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('variables', get_template_directory_uri() . '/assets/styles/global/variables.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('body', get_template_directory_uri() . '/assets/styles/global/body.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/styles/global/fonts.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/styles/global/header.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('portal', get_template_directory_uri() . '/assets/styles/global/portal.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('video', get_template_directory_uri() . '/assets/styles/global/video.css', array(), wp_get_theme()->get('Version'));
    // Global App CSS
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/styles/app.css', array(), wp_get_theme()->get('Version'));
    // Global App Js
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/scripts/app.js');

    if (is_single()) {
      if ($post->post_type == 'gallery') {
        wp_enqueue_script('gallery-scripts', get_template_directory_uri() . '/assets/scripts/gallery.js');
        foreach ($modules as $module) {
          wp_enqueue_style($module['name'], $module['path']);
        }
        wp_enqueue_style('gallery-styles', get_template_directory_uri() . '/assets/styles/templates/gallery.css');
      }
    }
    if (is_page()) {
      $template = get_page_template_slug();
      if ($template == 'template-create.php') {
        wp_enqueue_script('create', get_template_directory_uri() . '/assets/scripts/create.js');
        wp_enqueue_style('create', get_template_directory_uri() . '/assets/styles/pages/create-pdf.css');
      }

      if ($template == 'template-category.php') {
        wp_enqueue_style('top-level-styles', get_template_directory_uri() . '/assets/styles/templates/top-level-gallery.css');
      }
      switch ($post->post_name) {
        case 'overview':
          wp_enqueue_script('home', get_template_directory_uri() . '/assets/scripts/home.js');
          wp_enqueue_style('home', get_template_directory_uri() . '/assets/styles/pages/home.css');
          break;
      }
    }
  }
endif;

function admin_scripts()
{
  wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/styles/global/fonts.css', array(), wp_get_theme()->get('Version'));
  wp_enqueue_style('admin', get_template_directory_uri() . '/assets/styles/admin.css', array(), wp_get_theme()->get('Version'));
}

// function editor_scripts()
// {
//   add_editor_style('/assets/editor.css');
// }

add_action('admin_enqueue_scripts', 'admin_scripts');
// add_action('admin_init', 'editor_scripts');
add_action('wp_enqueue_scripts', 'theme_scripts');

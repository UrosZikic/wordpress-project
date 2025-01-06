<?php

function main_styles()
{
  wp_enqueue_style(
    'google-fonts',
    '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700&display=swap',
    null,
    null
  );
  wp_enqueue_style('main_css', get_theme_file_uri('/css/main_css.css'));
  if (is_front_page()) {
    wp_enqueue_style('front_page_css', get_theme_file_uri('/css/front_page_css.css'));
  }

  wp_enqueue_script('main_script', get_theme_file_uri('/scripts/script.js'), NULL, '1.0', TRUE);
  // wp_enqueue_script('ion_modern', '//unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', NULL, NULL, TRUE);
  // wp_enqueue_script('ion_legacy', '//unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', NULL, NULL, TRUE);
}

function support_f()
{
  return add_theme_support('title-tag');
}

function feature_image_function()
{
  add_theme_support('post-thumbnails');
}

add_action('wp_enqueue_scripts', 'main_styles');
add_action('after_setup_theme', 'support_f');
add_action('after_setup_theme', 'feature_image_function');
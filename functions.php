<?php

function main_styles()
{
  wp_enqueue_style(
    'google-fonts',
    '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',
    null,
    null
  );
  wp_enqueue_style('main_css', get_theme_file_uri('/css/main_css.css'));
  wp_enqueue_script('main_script', get_theme_file_uri('/scripts/script.js'), NULL, '1.0', TRUE);
  wp_enqueue_script('ion_modern', '//unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', NULL, NULL, TRUE);
  wp_enqueue_script('ion_legacy', '//unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', NULL, NULL, TRUE);
}

function support_f()
{
  return add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts', 'main_styles');
add_action('after_setup_theme', 'support_f');
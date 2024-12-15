<?php

function main_styles()
{
  wp_enqueue_style('main_css', get_theme_file_uri('/css/main_css.css'));
  wp_enqueue_script('main_script', get_theme_file_uri('/scripts/script.js'), NULL, '1.0', TRUE);
}

function support_f()
{
  return add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts', 'main_styles');
add_action('after_setup_theme', 'support_f');
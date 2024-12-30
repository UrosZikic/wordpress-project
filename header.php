<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <nav class="width-max white-bg flex-default flex-justify-between">
    <img class="width-max nav-logo" src="<?php echo get_theme_file_uri('/images/nav_image.png'); ?>" alt="website logo">
    <button class="nav-menu-container width-max white-bg">
      <img class="width-max" src="<?php echo get_theme_file_uri('/images/menu.webp'); ?>" alt="menu button icon">
    </button>
  </nav>
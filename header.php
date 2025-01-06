<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <nav class="width-max flex-default flex-justify-between">
    <img class="width-max nav-logo" src="<?php echo get_theme_file_uri('/images/nav_image.webp'); ?>"
      alt="website logo">
    <!-- <img class="width-max" src="<?php echo get_theme_file_uri('/images/menu.webp'); ?>" alt="menu button icon"> -->

    <button class="nav-menu-container width-max white-bg flex-default flex-direction-column flex-justify-evenly">
      <div class="nav-menu-line nav-menu-line-short pos-relative">
        <div class="nav-menu-line nav-menu-line-short pos-absolute absolute-cover nav-menu-line-filler"></div>
      </div>
      <div class="nav-menu-line pos-relative">
        <div class="nav-menu-line nav-menu-line-short pos-absolute absolute-cover nav-menu-line-filler"></div>

      </div>
      <div class="nav-menu-line nav-menu-line-short pos-relative">
        <div class="nav-menu-line nav-menu-line-short pos-absolute absolute-cover nav-menu-line-filler"></div>
      </div>
    </button>
  </nav>
  <aside class="pos-fixed width-max menu-list">
    <ul class="flex-default flex-direction-column flex-align-center flex-justify-center gap-m">
      <li>
        <a href="">Home</a>
      </li>
      <li>
        <a href="">Home</a>
      </li>
      <li>
        <a href="">Home</a>
      </li>
      <li>
        <a href="">Home</a>
      </li>
    </ul>
  </aside>
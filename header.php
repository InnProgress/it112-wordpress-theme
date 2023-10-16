<!DOCTYPE html>
<html lang="lt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ios -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="Title">

  <!-- android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#000">

  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body <?php body_class(); ?>>
  <div class="container mx-auto px-3">
    <header class="relative z-10 flex justify-between bg-white text-black py-5">
      <a href="<?php echo esc_url(home_url( '/' )); ?>" class="flex self-center"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="100" alt="logo"></a>

      <div class="flex items-center">
        <button class="menu-toggle lg:hidden" aria-label="navigation">
          <img src="<?php echo get_template_directory_uri(); ?>/img/hamburger-icon.svg" width="64" height="64" />
        </button>
        <div class="header-navigation-wrapper max-lg:absolute max-lg:top-20 max-lg:left-0 max-lg:shadow-lg max-lg:bg-white max-lg:w-full pb-5 lg:pb-0 hidden lg:block">
          <?php
            $args = array(
              'theme_location' => 'primary-menu',
              'container' => 'nav',
              'menu_class' => 'header__nav'
            );
            wp_nav_menu($args);
          ?>
        </div>
      </div>
    </header>

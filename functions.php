<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function loadThemeStylesAScripts() {
  wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Gabarito:wght@400;600;700;800');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/output.css');
  wp_enqueue_script('script', get_template_directory_uri() . '/script.js');
}
add_action('wp_enqueue_scripts', 'loadThemeStylesAScripts');


function registerThemeMenus() {
  register_nav_menus(array(
    'primary-menu' => __('Primary Menu'),
    'footer-menu' => __('Footer Menu')
  ));
}
add_action('init', 'registerThemeMenus');

function get_cart_item_count() {
  global $woocommerce;
  $cart = $woocommerce->cart;
  $item_count = $cart->get_cart_contents_count();
  return $item_count;
}

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

  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EXFFR5JX4J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EXFFR5JX4J');
</script>

  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PFVBJPJ7');</script>
<!-- End Google Tag Manager -->

  <!-- Event snippet for Page view conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11418089397/86B6CIHdsvgYELXvyMQq'});
</script>


  
</head>
<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFVBJPJ7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div class="container mx-auto px-3">
    <header class="relative z-10 flex justify-between bg-white text-black py-5">
      <a href="<?php echo esc_url(home_url( '/' )); ?>" class="flex self-center"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="100" alt="Kompiuterių remontas Vilniuje"></a>

      <div class="flex items-center">
        <button class="menu-toggle lg:hidden" aria-label="navigation">
          <img src="<?php echo get_template_directory_uri(); ?>/img/hamburger-icon.png" width="48" height="48" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/x-icon.png" class="hidden" width="48" height="48" />
        </button>
        <div class="header-navigation-wrapper max-lg:absolute max-lg:top-20 max-lg:left-0 max-lg:shadow-lg max-lg:bg-white max-lg:w-full pb-5 lg:pb-0 hidden lg:flex items-center">
          <?php
            $args = array(
              'theme_location' => 'primary-menu',
              'container' => 'nav',
              'menu_class' => 'header__nav'
            );
            wp_nav_menu($args);
          ?>

          <a href="/krepselis" class="cart relative inline-block inset-x-1/2 xl:inset-0 -translate-x-2/4 xl:translate-x-0 xl:ml-16">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cart-shopping-solid.svg" width="48" height="48" />
            <div class="bg-blue flex items-center justify-center absolute -bottom-[14px] -right-[14px] rounded-md w-8 h-8">
              <p class="text-white text-xl font-bold"><?php echo get_cart_item_count(); ?></p>
            </div>
          </a>
        </div>
        
      </div>
    </header>

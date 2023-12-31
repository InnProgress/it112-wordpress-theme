    <hr class="mt-14" />
    <footer class="grid grid-cols-6 gap-2 justify-between mt-10 mb-14">
      <div class="col-span-6 xl:col-span-2 mb-10 xl:mb-0">
        <h2 class="footer-title w-max text-2xl md:text-3xl font-bold mb-1 md:mb-3">
          <a href="https://it112.lt/" class="font-bold">Kompiuterių remontas Vilniuje</a>
        </h2>
        <p class="text-md md:text-lg">Jokių problemų - tik sprendimai</p>
        <div class="flex space-x-6 mt-8">
          <a href="https://facebook.com" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/img/facebook-logo.png" class="social-media-logo" alt="Nešiojamų kompiuterių remontas Vilniuje" />
          </a>
          <a href="https://tiktok.com" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tiktok-logo.png" class="social-media-logo" alt="Kompiuterių taisykla Vilniuje" />
          </a>
        </div>
      </div>
      <div class="col-span-6 md:col-span-2 xl:col-span-1">
        <h3 class="text-xl font-bold mb-1 md:mb-3">Kontaktai</h3>
        <div class="footer-contacts text-gray-400">
          <p>Kalvarijų g. 2, Vilnius</p>
          <a href="tel:+37065804435" class="block">+370 658 04435</a>
          <a href="mailto:info@it112.lt" class="block">info@it112.lt</a>
        </div>
      </div>
      <div class="col-span-6 md:col-span-2 xl:col-span-1">
        <h3 class="text-xl font-bold mb-1 md:mb-3">Navigacija</h3>
        <div class="text-gray-400">
          <?php
            $args = array(
              'theme_location' => 'footer-menu',
              'container' => 'nav',
              'menu_class' => 'footer__nav'
            );
            wp_nav_menu($args);
          ?>
        </div>
      </div>
      <div class="col-span-6 md:col-span-2">
        <h3 class="text-xl font-bold mb-1 md:mb-3">Rekvizitai</h3>
        <p class="text-gray-400">
          MB „IT112“<br />
          Įmonės kodas: 306561580<br />
          PVM: LT100016378016<br />
          Adresas: Kalvarijų g. 2, Vilnius<br /><br />

          Atsiskaitomoji sąskaita: LT077300010181630587<br />
          „Swedbank”, AB
        </p>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </div>
</body>
</html>

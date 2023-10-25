<?php get_header(); ?>

<div class="flex flex-col-reverse md:flex-row md:max-lg:mt-14 mb-14 lg:mb-0">
  <div class="flex-1 self-center text-center md:text-left">
    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-1 md:mb-4">KOMPIUTERIŲ REMONTAS VILNIUJE, KALVARIJŲ G. 2</h1>
    <p class="text-lg md:text-xl lg:text-2xl text-justify md:text-left my-2 md:my-5">Greitai nustatysime gedimą bei rasime sprendimą. Taisome, tobuliname bei surenkame kompiuterius. Kreipkitės jau šiandien, visada padėsime!</p>
    <a href="<?php echo get_page_link(12); ?>" class="btn btn--red rounded-lg inline-block text-lg md:text-xl px-12 py-4 mt-2 md:mt-0">PASLAUGŲ KAINOS</a>
  </div>
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/troubleshooting.png" class="mx-auto w-9/12 md:w-full">
  </div>
</div>

<div class="text-center mt-14 mb-14">
  <h2 class="text-2xl md:text-4xl font-bold mb-1 md:mb-3">MŪSŲ PASLAUGOS</h2>
  <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-6 items-center py-5 text-xl font-bold">
    <div class="w-full">
      <a href="<?php echo get_page_link(12); ?>" class="info-block block text-center rounded-xl border-solid border-2 hover:border-transparent w-full border-gray-300">
        <div class="transition-all rounded-xl border-solid border-transparent border-8 hover:border-black px-3 pt-14 pb-1">
          <div class="info-block__inside w-48">
            <div class="btn btn--blue btn--no-hover rounded-md inline-flex text-center p-6 mb-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/service-icon.png" width="95" height="95" class="self-center mx-auto">
            </div>
            <h3 class="text-xl md:text-2xl font-bold uppercase">Kompiuterių remontas</h3>
            <p class="info-block__inside__read-more my-5">Skaityti daugiau</p>
          </div>
        </div>
      </a>
    </div>
    <div class="w-full">
      <a href="<?php echo get_page_link(39); ?>" class="info-block block text-center rounded-xl bg-gray-100 border-solid border-2 hover:border-white w-full border-gray-300">
        <div class="transition-all rounded-xl border-solid border-transparent border-8 hover:border-black px-3 pt-14 pb-1">
          <div class="info-block__inside w-48">
            <div class="btn btn--yellow btn--no-hover rounded-md inline-flex text-center p-6 mb-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/computer-icon.png" width="95" height="95" class="self-center mx-auto">
            </div>
            <h3 class="text-xl md:text-2xl font-bold uppercase">Kompiuterių surinkimas</h3>
            <p class="info-block__inside__read-more my-5">Skaityti daugiau</p>
          </div>
        </div>
      </a>
    </div>
    <div class="w-full">
      <a href="<?php echo get_page_link(35); ?>" class="info-block block text-center rounded-xl border-solid border-2 hover:border-transparent w-full border-gray-300">
        <div class="transition-all rounded-xl border-solid border-transparent border-8 hover:border-black px-3 pt-14 pb-1">
          <div class="info-block__inside w-48">
            <div class="btn btn--red btn--no-hover rounded-md inline-flex text-center p-6 mb-6">
              <img src="<?php echo get_template_directory_uri(); ?>/img/coins-icon.png" width="95" height="95" class="self-center mx-auto">
            </div>
            <h3 class="text-xl md:text-2xl font-bold uppercase">Kompiuterių supirkimas</h3>
            <p class="info-block__inside__read-more my-5">Skaityti daugiau</p>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="flex flex-col md:flex-row mb-14 lg:mb-10">
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/messenger.png" class="mx-auto md:mx-0 w-10/12">
  </div>
  <div class="flex-1 self-center text-center md:text-left">
    <h2 class="text-2xl md:text-4xl font-bold uppercase mb-1 md:mb-4">Pristatyk įrenginį paštomatu!</h2>
    <p class="text-lg md:text-xl text-justify md:text-left my-3 md:my-5">Neturite laiko atvykti ar gyvenate kitame mieste?<br>Saugiai siųskite savo įrenginį paštomatu ir mes jį sutvarkysime!</p>
    <a href="<?php echo get_page_link(42); ?>" class="btn btn--red rounded-lg inline-block text-md md:text-xl px-14 py-5">PLAČIAU</a>
  </div>
</div>

<div class="flex flex-col-reverse md:flex-row mb-14 lg:mb-10">
  <div class="flex-1 self-center text-center md:text-left">
    <div class="lg:w-max">
      <h2 class="text-2xl md:text-4xl font-bold uppercase mb-2 md:mb-4">Pasitikrink remonto būseną!</h2>
      <p class="text-lg md:text-xl text-justify md:text-left my-2 md:my-5">Stebėkite savo kompiuterio remonto eigą tiesiogiai mūsų svetainėje.</p>
      <form action="/remonto-busena">
        <input class="block w-full text-lg rounded-lg border border-solid border-gray-200 px-3 md:px-5 py-3 md:py-5 mb-3 md:mb-5" name="code" placeholder="Įveskite remonto numerį" />
        <button class="btn btn--yellow rounded-lg text-md md:text-xl px-14 py-5">TIKRINTI</a>
      </form>
    </div>  
  </div>
  <div class="flex flex-1 justify-end mb-2 md:mb-0">
    <img src="<?php echo get_template_directory_uri(); ?>/img/search.png">
  </div>
</div>

<div class="flex flex-col md:flex-row mb-14 lg:mb-10">
  <div class="flex-1 mb-2 md:mb-0">
    <img src="<?php echo get_template_directory_uri(); ?>/img/error-troubleshooting.png" class="mx-auto md:mx-0 w-11/12">
  </div>
  <div class="flex-1 self-center text-center md:text-left">
    <h2 class="text-2xl md:text-4xl font-bold uppercase mb-1 md:mb-4">Kompiuterių remontas</h2>
    <p class="text-lg md:text-xl text-justify md:text-left my-3 md:my-5">Mes tvirtai laikomės aukštų kokybės standartų. Teikiame aukštos kokybės nešiojamųjų ir stacionarių kompiuterių remonto paslaugas. Mūsų komanda stengiasi greitai rasti kiekvienos problemos sprendimus.</p>
    <a href="<?php echo get_page_link(12); ?>" class="btn btn--red rounded-lg inline-block text-md md:text-xl px-14 py-5">PLAČIAU</a>
  </div>
</div>

<div class="flex flex-col-reverse md:flex-row mb-14 lg:mb-10">
  <div class="md:w-5/12 self-center text-center md:text-left">
    <h2 class="text-2xl md:text-4xl font-bold uppercase mb-1 md:mb-4">Stacionarių kompiuterių surinkimas</h2>
    <p class="text-lg md:text-xl text-justify md:text-justify my-3 md:my-5">Galime sukomplekuoti stacionarius kompiuterius, atitinkančius įvairius poreikius - tiek žaidimams, tiek darbui ar mokslams. Parenkame tik aukštos kokybės komponentus. Suteikiame garantiją!</p>
    <a href="<?php echo get_page_link(39); ?>" class="btn btn--yellow rounded-lg inline-block text-md md:text-xl px-14 py-5">PLAČIAU</a>
  </div>
  <div class="md:w-6/12 mb-5 md:mb-0">
    <img src="<?php echo get_template_directory_uri(); ?>/img/puzzle.png" class="mx-auto md:mr-0 w-11/12">
  </div>
</div>

<div class="flex flex-col md:flex-row mb-14 lg:mb-10">
  <div class="flex-1 mb-4 md:mb-0">
    <img src="<?php echo get_template_directory_uri(); ?>/img/coins.png" class="mx-auto md:mx-0 w-11/12">
  </div>
  <div class="flex-1 self-center text-center md:text-left">
    <h2 class="text-2xl md:text-4xl font-bold uppercase mb-1 md:mb-4">Kompiuterių supirkimas</h2>
    <p class="text-lg md:text-xl text-justify md:text-left my-3 md:my-5">Superkame Hp, Dell, Lenovo, Asus, Acer, Msi, Samsung nešiojamus bei stacionarius kompiuterius. Tai yra puiki galimybė atsikratyti sena kompiuterine įranga ir įsigyti naują. Mes vertiname naudotus kompiuterius pagal jų būklę ir technines specifikacijas. Galime pasiūlyti itin gerą kainą.</p>
    <a href="<?php echo get_page_link(35); ?>" class="btn btn--red rounded-lg inline-block text-md md:text-xl px-14 py-5">PLAČIAU</a>
  </div>
</div>

<div class="mb-14">
  <h2 class="text-2xl md:text-4xl font-extrabold text-center lg:text-left mb-3 lg:mb-8 lg:ml-2 uppercase">Naujienos</h2>
  
  <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-6 mb-7">
    <?php
      $args = array(
        'numberposts' => 3
      );
      
      $latest_posts = get_posts($args);
    ?>

    <?php foreach ($latest_posts as $key=>$post) :
      setup_postdata($post); ?>
      <a href="<?php echo get_permalink(); ?>" class="block flex-1 rounded-2xl border-8 border-transparent hover:border-black transition-all">
        <div class="<?php echo $key % 2 != 0 ? "bg-gray-100" : ""; ?> border-2 border-gray-300 hover:border-transparent rounded-xl h-full transition-all">
          <div style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" class="w-full h-60 bg-cover bg-center rounded-t-xl"></div>
          <div class="py-4 px-7">
            <h3 class="text-2xl md:text-3xl font-bold"><?php the_title(); ?></h3>
            <span class="block text-lg mt-2"><?php echo get_the_date(); ?></span>
          </div>
        </div>
      </a>

    <?php wp_reset_postdata(); endforeach; ?>
  </div>

  <div class="text-center">
    <a href="<?php echo get_post_type_archive_link('post'); ?>" class="btn btn--yellow rounded-lg inline-block text-md md:text-xl px-14 py-5">VISOS NAUJIENOS</a>
  </div>
</div>

<div class="flex flex-col-reverse md:flex-row mb-14 lg:mb-0">
  <div class="flex-1 self-center">
    <div class="lg:pl-[80px]">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 md:mb-7">SUSISIEKIME DABAR!</h2>
      <div class="flex items-center">
        <div class="w-10 md:w-20">
          <img src="<?php echo get_template_directory_uri(); ?>/img/call-icon.png" class="mx-auto" />
        </div>
        <div class="ml-5 md:ml-8">
          <a href="tel:+37065804435" class="block text-xl md:text-2xl font-bold">+370 658 04435</a>
          <a href="mailto:info@it112.lt" class="block text-xl md:text-2xl font-semibold">info@it112.lt</a>
        </div>
      </div>
      <div class="flex items-center mt-6 md:mt-8">
        <div class="w-10 md:w-20">
          <img src="<?php echo get_template_directory_uri(); ?>/img/location-icon.png" class="mx-auto" />
        </div>
        <div class="ml-5 md:ml-8">
          <p class="text-xl md:text-2xl font-bold">Kalvarijų g. 2</p>
          <p class="text-xl md:text-2xl font-semibold">Darbo laikas</p>
        </div>
      </div>
    </div>
  </div>
  <div class="flex-1 mb-4 md:mb-0">
    <img src="<?php echo get_template_directory_uri(); ?>/img/get-in-touch.png" class="mx-auto md:mx-0 w-10/12">
  </div>
</div>

<?php require 'dirbame-su.php'; ?>

<?php get_footer(); ?>

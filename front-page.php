<?php get_header(); ?>

<div class="flex flex-col-reverse md:flex-row md:max-lg:mt-14 mb-14 lg:mb-0">
  <div class="flex-1 self-center text-center md:text-left">
    <h1 class="text-3xl md:text-5xl font-bold mb-1 md:mb-4">KOMPIUTERIŲ SERVISAS VILNIUJE</h1>
    <p class="text-lg md:text-2xl my-2 md:my-5">Greitai nustatysime gedimą bei rasime sprendimą. Taisome, tobuliname bei surenkame kompiuterius. Kreipkitės jau šiandien, visada padėsime!</p>
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
      <a href="<?php echo get_page_link(12); ?>" class="info-block block text-center rounded-xl border-solid border-2 hover:border-8 hover:border-black px-3 pt-14 w-full">
        <div class="info-block__inside w-48">
          <div class="btn btn--blue btn--no-hover rounded-md inline-flex text-center p-6 mb-6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/service-icon.png" width="95" height="95" class="self-center mx-auto">
          </div>
          <h3 class="text-xl md:text-2xl font-bold uppercase">Remonto paslaugos</h3>
          <p class="info-block__inside__read-more my-5">Skaityti daugiau</p>
        </div>
      </a>
    </div>
    <div class="w-full">
      <a href="<?php echo get_page_link(39); ?>" class="info-block block text-center rounded-xl border-solid border-2 hover:border-8 hover:border-black px-3 pt-14 w-full">
        <div class="info-block__inside w-48">
          <div class="btn btn--yellow btn--no-hover rounded-md inline-flex text-center p-6 mb-6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/computer-icon.png" width="95" height="95" class="self-center mx-auto">
          </div>
          <h3 class="text-xl md:text-2xl font-bold uppercase">Kompiuterių surinkimas</h3>
          <p class="info-block__inside__read-more my-5">Skaityti daugiau</p>
        </div>
      </a>
    </div>
    <div class="w-full">
      <a href="<?php echo get_page_link(35); ?>" class="info-block block text-center rounded-xl border-solid border-2 hover:border-8 hover:border-black px-3 pt-14 w-full">
        <div class="info-block__inside w-48">
          <div class="btn btn--red btn--no-hover rounded-md inline-flex text-center p-6 mb-6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/coins-icon.png" width="95" height="95" class="self-center mx-auto">
          </div>
          <h3 class="text-xl md:text-2xl font-bold uppercase">Kompiuterių supirkimas</h3>
          <p class="info-block__inside__read-more my-5">Skaityti daugiau</p>
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
    <p class="text-lg md:text-xl my-3 md:my-5">Neturite laiko atvykti ar gyvenate kitame mieste?<br>Saugiai siųskite savo įrenginį paštomatu ir mes jį sutvarkysime!</p>
    <a href="<?php echo get_page_link(42); ?>" class="btn btn--red rounded-lg inline-block text-md md:text-xl px-14 py-5">PLAČIAU</a>
  </div>
</div>

<div class="flex flex-col-reverse md:flex-row mb-14 lg:mb-10">
  <div class="flex-1 self-center text-center md:text-left">
    <div class="lg:w-max">
      <h2 class="text-2xl md:text-4xl font-bold uppercase mb-2 md:mb-4">Pasitikrink remonto būseną!</h2>
      <p class="text-lg md:text-xl text-justify md:text-left my-2 md:my-5">Stebėkite savo įrenginio remonto eigą tiesiogiai mūsų svetainėje</p>
      <form>
        <input class="block w-full text-lg rounded-lg border border-solid border-gray-200 px-3 md:px-5 py-3 md:py-5 mb-3 md:mb-5" name="code" placeholder="Įveskite remonto numerį" />
        <button class="btn btn--yellow rounded-lg text-md md:text-xl px-14 py-5">TIKRINTI</a>
      </form>
    </div>  
  </div>
  <div class="flex flex-1 justify-end">
    <img src="<?php echo get_template_directory_uri(); ?>/img/search.png">
  </div>
</div>

<div class="flex flex-col md:flex-row mb-14 lg:mb-10">
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/error-troubleshooting.png" class="mx-auto md:mx-0 w-11/12">
  </div>
  <div class="flex-1 self-center text-center md:text-left">
    <h2 class="text-2xl md:text-4xl font-bold uppercase mb-1 md:mb-4">Kompiuterių remontas</h2>
    <p class="text-lg md:text-xl my-3 md:my-5">Mes tvirtai laikomės aukštų kokybės standartų. Teikiame aukštos kokybės nešiojamųjų ir stacionarių kompiuterių remonto paslaugas. Mūsų komanda stengiasi greitai rasti kiekvienos problemos sprendimus.</p>
    <a href="<?php echo get_page_link(12); ?>" class="btn btn--red rounded-lg inline-block text-md md:text-xl px-14 py-5">PLAČIAU</a>
  </div>
</div>

<div class="flex flex-col md:flex-row mb-14 lg:mb-10">
  <div class="flex-1 self-center text-center md:text-left">
    <h2 class="text-2xl md:text-4xl font-bold uppercase mb-1 md:mb-4">Stacionarių kompiuterių surinkimas</h2>
    <p class="text-lg md:text-xl my-3 md:my-5">Galime sukomplekuoti stacionarius kompiuterius, atitinkančius įvairius poreikius - tiek žaidimams, tiek darbui ar mokslams. Parenkame tik aukštos kokybės komponentus. Suteikiame garantiją!</p>
    <a href="<?php echo get_page_link(39); ?>" class="btn btn--yellow rounded-lg inline-block text-md md:text-xl px-14 py-5">PLAČIAU</a>
  </div>
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/puzzle.png" class="mx-auto md:mx-0 w-11/12">
  </div>
</div>

<div class="flex flex-col md:flex-row mb-14 lg:mb-10">
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/coins.png" class="mx-auto md:mx-0 w-11/12">
  </div>
  <div class="flex-1 self-center text-center md:text-left">
    <h2 class="text-2xl md:text-4xl font-bold uppercase mb-1 md:mb-4">Kompiuterių supirkimas</h2>
    <p class="text-lg md:text-xl my-3 md:my-5">Superkame HP, DELL, LENOVO, ASUS, ACER, MSI, SAMSUNG nešiojamus bei stacionarius kompiuterius. Tai yra puiki galimybė atsikratyti sena kompiuterine įranga ir įsigyti naują. Mes vertiname naudotus kompiuterius pagal jų būklę ir technines specifikacijas. Galime pasiūlyti itin gerą kainą.</p>
    <a href="<?php echo get_page_link(35); ?>" class="btn btn--red rounded-lg inline-block text-md md:text-xl px-14 py-5">PLAČIAU</a>
  </div>
</div>

<div class="flex flex-col md:flex-row mb-14 lg:mb-0">
  <div class="flex-1 self-center">
    <div class="lg:pl-[80px]">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 md:mb-7">Susisiekime dabar!</h2>
      <div class="flex items-center">
        <div class="w-10 md:w-20">
          <img src="<?php echo get_template_directory_uri(); ?>/img/call-icon.png" class="mx-auto" />
        </div>
        <div class="ml-5 md:ml-8">
          <a href="tel:telefonas" class="block text-xl md:text-2xl font-bold">Telefonas</a>
          <a href="mailto:info@it112.lt" class="block text-xl md:text-2xl font-semibold">info@it112.lt</a>
        </div>
      </div>
      <div class="flex items-center mt-6 md:mt-8">
        <div class="w-10 md:w-20">
          <img src="<?php echo get_template_directory_uri(); ?>/img/location-icon.png" class="mx-auto" />
        </div>
        <div class="ml-5 md:ml-8">
          <p class="text-xl md:text-2xl font-bold">Adresas</p>
          <p class="text-xl md:text-2xl font-semibold">Darbo laikas</p>
        </div>
      </div>
    </div>
  </div>
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/get-in-touch.png" class="mx-auto md:mx-0 w-10/12">
  </div>
</div>

<?php require 'dirbame-su.php'; ?>

<?php get_footer(); ?>

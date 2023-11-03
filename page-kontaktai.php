<?php get_header(); ?>

<div class="flex flex-col-reverse md:flex-row mb-14 mt-6 lg:mb-0">
  <div class="flex-1 self-center">
    <div class="lg:pl-[80px]">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 md:mb-7">MŪSŲ KONTAKTAI</h2>
      <div class="flex items-center">
        <div class="w-10 md:w-20">
          <img src="<?php echo get_template_directory_uri(); ?>/img/call-icon.png" class="mx-auto" alt="Kompiuterių remonto kainos"/>
        </div>
        <div class="ml-5 md:ml-8">
          <a href="tel:+37065804435" class="block text-xl md:text-2xl font-bold">+370 658 04435</a>
          <a href="mailto:info@it112.lt" class="block text-xl md:text-2xl">info@it112.lt</a>
        </div>
      </div>
      <div class="flex items-center mt-6 md:mt-8">
        <div class="w-10 md:w-20">
          <img src="<?php echo get_template_directory_uri(); ?>/img/location-icon.png" class="mx-auto" alt="Kompiuterių taisykla Vilniuje"/>
        </div>
        <div class="ml-5 md:ml-8">
          <p class="text-xl md:text-2xl font-bold">Kalvarijų g. 2</p>
          <p class="text-xl md:text-2xl">I-V, 10-18 val. VI, 10-15 val.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="flex-1 mb-4 md:mb-0">
    <img src="<?php echo get_template_directory_uri(); ?>/img/get-in-touch.png" class="mx-auto md:mx-0 w-10/12" alt="Kompiuterių taisykla Vilniuje">
  </div>
</div>

<div class="flex flex-col md:flex-row mb-14 lg:mb-10">
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/bus-stop.png" class="mx-auto md:mx-0 w-10/12" alt="Kompiuterių remontas Vilniuje">
  </div>
  <div class="flex-1 self-center text-center md:text-left">
    <h2 class="text-2xl md:text-4xl font-bold uppercase mb-1 md:mb-4">Itin patogus susisiekimas!</h2>
    <p class="text-lg md:text-xl text-justify md:text-left xl:w-10/12 my-3 md:my-5">Atvykite į mūsų saloną autobusu ar troleibusu. Visai šalia mūsų yra viena populiariausių stotelių „Žaliasis tiltas“. Čia važiuoja autobusai: 1G, 3G, 6G, 10, 43, 46, 52, 53, 56, 88 bei troleibusai: 6, 10, 12.</p>
    <a href="https://www.stops.lt/vilnius/#stop/0101,0102" class="btn btn--red rounded-lg inline-block text-md md:text-xl px-14 py-5">TVARKARAŠTIS</a>
  </div>
</div>

<div class="flex flex-col-reverse lg:flex-row mb-14 md:mb-0"> 
  <div class="lg:w-6/12 self-center">
    <h2 class="text-2xl md:text-4xl font-bold uppercase text-center lg:text-left mb-1 md:mb-4">Kreipkitės jau dabar!</h2>
    <p class="text-lg md:text-2xl text-center lg:text-left mt-2 mb-3 md:mt-4 md:mb-6">Visada stengiamės atsakyti kaip įmanoma greičiau.</p>
    
    <?php echo do_shortcode('[contact-form-7 id="47162d4" title="Kontaktų forma"]'); ?>
    <!-- DO NOT REMOVE THESE COMMENTS AS THEY ARE HERE TO MAKE SURE TAILWIND FINDS CLASSES USED IN CONTACT FORM 7 FORMS TO COMPILE THEM TO CSS, OTHERWISE THEY WILL NOT BE INCLUDED IN FINAL CSS FILE -->
    <!-- mt-1 mt-6 cursor-pointer -->
  </div>
    <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/new-entries.png" class="mx-auto lg:mr-0 w-10/12 lg:w-11/12" alt="Nešiojamų kompiuterių taisykla Vilniuje">
  </div> 
</div>

<?php get_footer(); ?>

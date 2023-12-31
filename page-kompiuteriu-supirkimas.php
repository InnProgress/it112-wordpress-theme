<?php get_header(); ?>

<div class="flex flex-col-reverse lg:flex-row mb-14 md:mb-0">
  <div class="lg:w-5/12 self-center text-center lg:text-left">
    <h1 class="text-3xl md:text-5xl font-bold mb-1 md:mb-4">Turite nereikalingą kompiuterį?<br/>Galime jį nupirkti</h1>
    <p class="text-lg md:text-2xl text-justify lg:text-left my-2 md:my-5">Užpildykite žemiau esančia formą ir sulaukite atsakymo greičiau nei per 24 valandas! Atlikus išsamią apžiūrą galėsime tiksliai nustatyti įrenginio vertę ir pasiūlyti geriausią kainą.</p>
  </div>
  <div class="flex-1 mb-1 lg:mb-0">
    <img src="<?php echo get_template_directory_uri(); ?>/img/buy-laptop.png" class="mx-auto lg:ml-auto lg:mr-0 w-10/12" alt="Nešiojamų kompiuterių taisykla Vilniuje">
  </div>
</div>

<div class="text-center mt-14 mb-14">
  <div class="flex flex-col lg:flex-row space-y-6 lg:space-y-0 lg:space-x-6 py-5 text-xl">
    <div class="info-block block text-center rounded-xl border-solid border-2 px-3 py-10 md:py-14 w-full border-gray-300">
      <div class="info-block__inside w-72">
        <div class="btn btn--blue btn--no-hover rounded-md inline-flex text-center p-6 mb-6">
          <img src="<?php echo get_template_directory_uri(); ?>/img/calendar-icon.png" width="85" height="85" class="self-center mx-auto" alt="Nešiojamų kompiuterių supirkimas Vilniuje">
        </div>
        <h3 class="text-2xl md:text-3xl font-bold mb-4">Kompiuterių amžius</h3>
        <p class="text-lg md:text-xl">Superkame iki 7 metų senumo nešiojamus ir stacionarius kompiuterius</p>
      </div>  
    </div>
    <div class="info-block block text-center rounded-xl border-solid border-2 px-3 py-10 md:py-14 w-full bg-gray-100 border-gray-300">
      <div class="info-block__inside w-72">
        <div class="btn btn--yellow btn--no-hover rounded-md inline-flex text-center p-6 mb-6">
          <img src="<?php echo get_template_directory_uri(); ?>/img/check-icon.png" width="95" height="95" class="self-center mx-auto" alt="Nešiojamų kompiuterių taisykla Vilniuje">
        </div>
        <h3 class="text-2xl md:text-3xl font-bold mb-4">Modeliai</h3>
        <p class="text-lg md:text-xl">Domina Hp, Dell, Lenovo, Asus, Acer, Msi, Samsung nešiojami ir stacionarūs kompiuteriai</p>
      </div>  
    </div>
    <div class="info-block block text-center rounded-xl border-solid border-2 px-3 py-10 md:py-14 w-full border-gray-300">
      <div class="info-block__inside w-72">
        <div class="btn btn--red btn--no-hover rounded-md inline-flex text-center p-6 mb-6">
          <img src="<?php echo get_template_directory_uri(); ?>/img/warning-icon.png" width="95" height="95" class="self-center mx-auto" alt="Stacionarių kompiuterių remontas Vilniuje">
        </div>
        <h3 class="text-2xl md:text-3xl font-bold mb-4">Nesvarbi būklė</h3>
        <p class="text-lg md:text-xl">Taip pat superkame neįsijungiančius, sulūžusius, apipiltus nešiojamus ir stacionarius kompiuterius</p>
      </div>
    </div>
  </div>
</div>

<div class="flex flex-col lg:flex-row mb-14 md:mb-0">
  <div class="flex-1 mb-4 lg:mb-0">
    <img src="<?php echo get_template_directory_uri(); ?>/img/working-desk.png" class="mx-auto lg:mr-auto lg:ml-0 w-10/12" alt="Stacionarių kompiuterių remontas">
  </div>  
  <div class="lg:w-5/12 self-center">
    <h2 class="text-2xl md:text-4xl font-bold text-center lg:text-left mb-1 md:mb-4">Supirkimo forma</h2>
    <?php echo do_shortcode('[contact-form-7 id="581349b" title="Supirkimo forma"]'); ?>
    <!-- DO NOT REMOVE THESE COMMENTS AS THEY ARE HERE TO MAKE SURE TAILWIND FINDS CLASSES USED IN CONTACT FORM 7 FORMS TO COMPILE THEM TO CSS, OTHERWISE THEY WILL NOT BE INCLUDED IN FINAL CSS FILE -->
    <!-- mt-1 cursor-pointer my-1 -->
  </div>
</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="flex flex-col-reverse lg:flex-row mb-14 md:mb-0">
  <div class="lg:w-5/12 self-center text-center lg:text-left">
    <h1 class="text-3xl md:text-5xl font-extrabold uppercase mb-1 md:mb-4">Reikia stacionaraus kompiuterio?</h1>
    <p class="text-lg md:text-2xl my-2 md:my-5">Galime surinkti itin galingus, žaidimams ir sudėtingam darbui pritaikytus arba biudžetinius, mokslams ir įprastam laisvalaikiui skirtus stacionarius kompiuterius. Parinksime tik kokybiškus komponentus. Suteiksime garantiją.</p>
  </div>
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/puzzle.png" class="mx-auto lg:ml-auto lg:mr-0 w-10/12">
  </div>
</div>

<div class="text-center mt-14 mb-14">
  <div class="flex flex-col xl:flex-row space-y-6 xl:space-y-0 xl:space-x-6 py-5 text-xl">
    <div class="info-block block text-center rounded-xl border-solid border-2 border-gray-300 px-3 py-14 w-full">
      <div class="info-block__inside">
          <div class="btn btn--blue btn--no-hover rounded-md inline-flex text-center p-3 mb-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/chat-icon.png" width="60" height="60" class="self-center mx-auto">
          </div>
        <h3 class="text-2xl md:text-3xl font-bold uppercase mb-4">Konsultacija</h3>
        <p class="text-lg md:text-xl">Analizuojame Jūsų poreikius. Nustatome biudžetą. Pateikiame pavyzdžių.</p>
      </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/right-icon.png" width="29" height="29" class="right-icon self-center rotate-90 xl:rotate-0">
    <div class="info-block block bg-gray-100 text-center rounded-xl border-solid border-2 border-gray-300 px-3 py-14 w-full">
      <div class="info-block__inside">
        <div class="bg-yellow rounded-full inline-flex w-[131px] h-[131px] text-center p-4 mb-6">
          <img src="<?php echo get_template_directory_uri(); ?>/img/search-icon.png" width="59" height="62" class="self-center mx-auto">
        </div>
        <h3 class="text-2xl md:text-3xl font-bold uppercase mb-4">Paieška</h3>
        <p class="text-lg md:text-xl">Operatyviai ieškome tik kokybiškų ir Jūsų biudžetą atitinkančių komponentų.</p>
      </div>  
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/right-icon.png" width="29" height="29" class="right-icon self-center rotate-90 xl:rotate-0">
    <div class="info-block block text-center rounded-xl border-solid border-2 border-gray-300 px-3 py-14 w-full">
      <div class="info-block__inside">
        <div class="bg-blue rounded-full inline-flex w-[131px] h-[131px] text-center p-4 mb-6">
          <img src="<?php echo get_template_directory_uri(); ?>/img/puzzle-icon.png" width="59" height="62" class="self-center mx-auto">
        </div>
        <h3 class="text-2xl md:text-3xl font-bold uppercase mb-4">Surinkimas</h3>
        <p class="text-lg md:text-xl">Kruopščiai ir atvarkingai surenkame. Ištestuojame. Suteikiame garantiją dalims bei darbams.</p>
      </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/right-icon.png" width="29" height="29" class="right-icon self-center rotate-90 xl:rotate-0">
    <div class="info-block block bg-gray-100 text-center rounded-xl border-solid border-2 border-gray-300 px-3 py-14 w-full">
      <div class="info-block__inside">
        <div class="bg-yellow rounded-full inline-flex w-[131px] h-[131px] text-center p-4 mb-6">
          <img src="<?php echo get_template_directory_uri(); ?>/img/shipment-icon.png" class="self-center mx-auto">
        </div>
        <h3 class="text-2xl md:text-3xl font-bold uppercase mb-4">Pristatymas</h3>
        <p class="text-lg md:text-xl">Kokybiškai supakuojame ir pristatome į kliento namus. Yra galimybė atsiimti salone.</p>
      </div>
    </div>
  </div>
</div>

<div class="flex flex-col lg:flex-row mb-14 md:mb-0">
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/new-entries.png" class="mx-auto lg:mr-auto lg:ml-0 w-10/12">
  </div>  
  <div class="lg:w-5/12 self-center">
    <h2 class="text-2xl md:text-4xl font-extrabold uppercase text-center lg:text-left mb-1 md:mb-4">Pradėkime jau dabar!</h2>
    <?php echo do_shortcode('[contact-form-7 id="769cef0" title="Surinkimo forma"]'); ?>
    <!-- DO NOT REMOVE THESE COMMENTS AS THEY ARE HERE TO MAKE SURE TAILWIND FINDS CLASSES USED IN CONTACT FORM 7 FORMS TO COMPILE THEM TO CSS, OTHERWISE THEY WILL NOT BE INCLUDED IN FINAL CSS FILE -->
    <!-- mt-1 mt-6 cursor-pointer -->
  </div>
</div>

<?php get_footer(); ?>

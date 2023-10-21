<?php get_header(); ?>

<div class="flex flex-col-reverse md:flex-row mb-14 lg:mb-0">
  <div class="flex-1 self-center">
    <div class="lg:pl-[80px]">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 md:mb-7">MŪSŲ KONTAKTAI</h2>
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

<div class="flex flex-col lg:flex-row mb-14 md:mb-0">
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/new-entries.png" class="mx-auto lg:mr-auto lg:ml-0 w-10/12 lg:w-full">
  </div>  
  <div class="lg:w-6/12 self-center">
    <h2 class="text-2xl md:text-4xl font-bold uppercase text-center lg:text-left mb-1 md:mb-4">Kreipkitės jau dabar!</h2>
    <p class="text-lg md:text-2xl text-center lg:text-left mt-2 mb-3 md:mt-4 md:mb-6">Visada stengiamės atsakyti kaip įmanoma greičiau.</p>
    
    <?php echo do_shortcode('[contact-form-7 id="47162d4" title="Kontaktų forma"]'); ?>
    <!-- DO NOT REMOVE THESE COMMENTS AS THEY ARE HERE TO MAKE SURE TAILWIND FINDS CLASSES USED IN CONTACT FORM 7 FORMS TO COMPILE THEM TO CSS, OTHERWISE THEY WILL NOT BE INCLUDED IN FINAL CSS FILE -->
    <!-- mt-1 mt-6 cursor-pointer -->
  </div>
</div>

<?php get_footer(); ?>

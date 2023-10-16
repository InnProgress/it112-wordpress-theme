<?php get_header(); ?>

<div class="flex flex-col-reverse lg:flex-row mb-14 md:mb-0">
  <div class="lg:w-5/12 self-center text-center lg:text-left">
    <h1 class="text-3xl md:text-5xl font-bold uppercase mb-1 md:mb-4">Susisiekime!</h1>
    <p class="text-lg md:text-2xl my-2 md:my-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione eveniet cumque mollitia qui ut enim corporis dignissimos itaque velit, ipsam nobis a illum quidem obcaecati? Iure quia unde quo doloremque? <a href="mailto:info@it112.lt>info@it112.lt</a> <a href="tel:+37062249444">+3705...</a> </p>
  </div>
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/puzzle.png" class="mx-auto lg:ml-auto lg:mr-0 w-10/12">
  </div>
</div>

<div class="flex flex-col lg:flex-row mb-14 md:mb-0">
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/new-entries.png" class="mx-auto lg:mr-auto lg:ml-0 w-10/12 lg:w-full">
  </div>  
  <div class="lg:w-6/12 self-center">
    <h2 class="text-2xl md:text-4xl font-bold uppercase text-center lg:text-left mb-1 md:mb-4">Pradėkime jau dabar!</h2>
    <?php echo do_shortcode('[contact-form-7 id="47162d4" title="Kontaktų forma"]'); ?>
    <!-- DO NOT REMOVE THESE COMMENTS AS THEY ARE HERE TO MAKE SURE TAILWIND FINDS CLASSES USED IN CONTACT FORM 7 FORMS TO COMPILE THEM TO CSS, OTHERWISE THEY WILL NOT BE INCLUDED IN FINAL CSS FILE -->
    <!-- mt-1 mt-6 cursor-pointer -->
  </div>
</div>

<?php get_footer(); ?>

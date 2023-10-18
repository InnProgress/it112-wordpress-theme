<?php get_header(); ?>

<div class="flex flex-col-reverse lg:flex-row mb-14 md:mb-0">
  <div class="status-check-container self-center w-full lg:w-6/12 text-center lg:text-left pt-8">
    <h2 class="text-2xl md:text-4xl font-bold uppercase mb-2 md:mb-4">Pasitikrink savo įrenginio remonto eigą</h2>
    <p class="text-md md:text-xl my-2 md:my-5">Remonto numeris yra nurodytas kompiuterio priėmimo akte</p>
    <form class="status-check-form">
      <input class="repair-id-input block w-full text-lg rounded-lg border border-solid border-gray-200 px-3 md:px-5 py-3 md:py-5 mb-3 md:mb-5" name="code" placeholder="Įveskite remonto numerį" required />
      <button class="btn btn--yellow rounded-lg text-md md:text-xl px-14 py-5">TIKRINTI</a>
    </form>
  </div>
  <div class="flex flex-1 justify-end items-center">
    <img src="<?php echo get_template_directory_uri(); ?>/img/remote-working.png" class="mx-auto md:mx-0 w-11/12">
  </div>
</div>

<?php get_footer(); ?>

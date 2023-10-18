<?php get_header(); ?>

<div class="flex flex-col-reverse md:flex-row md:max-lg:mt-14 mb-14 lg:mb-0">
  <div class="flex-1 self-center text-center md:text-left">
    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-1 md:mb-4">KOMPIUTERIŲ SERVISAS VILNIUJE</h1>
    <p class="text-lg md:text-xl lg:text-2xl my-2 md:my-5">Greitai nustatysime gedimą bei rasime sprendimą. Taisome, tobuliname bei surenkame kompiuterius. Kreipkitės jau šiandien, visada padėsime!</p>
    <a href="<?php echo get_page_link(12); ?>" class="btn btn--red rounded-lg inline-block text-lg md:text-xl px-12 py-4 mt-2 md:mt-0">PASLAUGŲ KAINOS</a>
  </div>
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/troubleshooting.png" class="mx-auto w-9/12 md:w-full">
  </div>
</div>

<?php get_footer(); ?>

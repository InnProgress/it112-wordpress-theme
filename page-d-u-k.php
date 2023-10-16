<?php get_header(); ?>

<div class="flex flex-col-reverse lg:flex-row justify-between mb-14 md:mb-0">
  <div class="lg:w-6/12 self-center text-center lg:text-left lg:pr-7">
    <h1 class="text-3xl lg:text-4xl xl:text-5xl font-extrabold uppercase mb-1 md:mb-4">Neįsijungia? Lėtas?<br />O gal sulūžo?</h1>
    <p class="text-lg lg:text-xl xl:text-2xl my-2 md:my-5">Nepriklausomai nuo kompiuterio modelio ar gedimo, mes visada pasirengę suteikti aukščiausios kokybės paslaugas.</p>
    <p class="text-lg lg:text-xl xl:text-2xl my-2 md:my-5">Visiems darbams suteikiama <strong>3 mėnesių garantija!</strong></p>
  </div>
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/maintenance.png" class="mx-auto w-9/12 lg:w-full">
  </div>
  <div class="container mx-auto py-12 px-4">
    <h1 class="text-3xl font-bold mb-10 text-center">Frequently Asked Questions</h1>
    
    <div class="max-w-3xl mx-auto">
        <div class="border rounded-md shadow-md bg-white mb-6">
            <div class="px-5 py-3 border-b">
                <h2 class="text-xl font-medium">What is the purpose of this FAQ page?</h2>
            </div>
            <div class="px-5 py-3">
                This FAQ page provides answers to common questions about our services and platform.
            </div>
        </div>
        
        <div class="border rounded-md shadow-md bg-white mb-6">
            <div class="px-5 py-3 border-b">
                <h2 class="text-xl font-medium">How do I use this service?</h2>
            </div>
            <div class="px-5 py-3">
                To use our service, simply sign up and follow the on-screen instructions.
            </div>
        </div>

    </div>
</div>
</div>


<?php require 'dirbame-su.php'; ?>

<?php get_footer(); ?>

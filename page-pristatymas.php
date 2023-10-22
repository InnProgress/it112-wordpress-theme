<?php get_header(); ?>

<div class="flex flex-col-reverse lg:flex-row mt-6 mb-14 md:mb-12">
  <div class="lg:w-5/12 self-center text-center lg:text-left">
    <h1 class="text-3xl md:text-5xl font-bold uppercase mb-1 md:mb-4">Pristatykite kurjeriu ar paštomatu!</h1>
    <p class="text-lg md:text-2xl text-justify lg:text-left my-2 md:my-5">Jei neturite laiko atvykti patys ar gyvenate toli nuo mūsų salono, pasinaudokite kurjerių bei paštomatų pagalba. Sutaisysime įrenginį, saugiai įpakuosime ir išsiųsime Jums nemokamai!</p>
  </div>
  <div class="flex-1 mb-6 lg:mb-0">
    <img src="<?php echo get_template_directory_uri(); ?>/img/delivery-guy.png" class="mx-auto lg:ml-auto lg:mr-0 w-10/12">
  </div>
</div>

<div class="flex flex-col xl:flex-row my-14 md:mt-0">
  <div class="flex-1 mb-6 xl:mb-0">
    <img src="<?php echo get_template_directory_uri(); ?>/img/shipments.png" class="mx-auto xl:mx-0 w-10/12">
  </div>  
  <div class="xl:w-5/12 xl:self-center">
    <h2 class="text-3xl md:text-5xl font-bold uppercase text-center lg:text-left mb-1 md:mb-4">Pristatymo būdai</h2>
    <p class="text-lg md:text-2xl text-center lg:text-left mt-2 mb-3 md:mt-4 md:mb-6">Siuntų pristatymas dažniausiai trunka vos 1-2 darbo dienas</p>
    <div class="flex-1">
      <div class="border border-solid border-slate-300 rounded-lg overflow-hidden mt-5">
        <table class="border-collapse w-full text-left text-md md:text-xl">
          <tbody>
            <tr>
              <td class="w-[45%] border-b border-r border-slate-300 bg-gray-100 uppercase font-bold px-8 py-6">Kurjeriai</td>
              <td class="border-b border-slate-300 px-8 py-6">Adresas</td>
            </tr>
            <tr>
              <td class="w-[45%] border-b border-r border-slate-300 uppercase font-bold px-8 py-6">LP Express</td>
              <td class="border-b border-slate-300 bg-gray-100 px-8 py-6">Adresas</td>
            </tr>
            <tr>
              <td class="w-[45%] border-r border-slate-300 bg-gray-100 uppercase font-bold px-8 py-6">Omniva</td>
              <td class="border-slate-300 px-8 py-6">Adresas</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="my-14">
  <h2 class="text-3xl md:text-5xl font-bold text-center uppercase mb-1 md:mb-4">Būtina žinoti</h2>
  <p class="text-md md:text-xl text-center mt-2 mb-3 md:mt-4 md:mb-6">Pristatymo sąlygos, taisyklės</p>
  <div class="border-2 border-slate-300 rounded-xl text-md md:text-xl p-4 md:px-10 md:py-7">
    <p class="bg-yellow-400 rounded-xl p-4 md:px-10 md:py-7">
      <strong>Jei norite pristatyti įrenginį remontui, pirmas žingsnis - susisiekti su mumis telefonu ar el. paštu. Aptarsime įrenginio būklę, galimus gedimus bei sprendimo būdus.</strong> Mūsų telefonas: El. paštas: info@it112.lt
    </p>
    <p class="p-4 md:px-10 md:py-7">
      <strong>1.</strong> Įrenginį būtina gerai įvinioti į burbulinį popierių tam, kad pristatymo metu atlaikytų įvairius smūgius ar kitų siuntų spaudimą.<br/><br/>
      <strong>2.</strong> Dėžė turi būti tokio dydžio, kad supakuotas įrenginys visiškai nejudėtų. Jei dėžė yra per didelė, tada būtina ją užpildyti įvairiomis medžiagomis. Taip apsaugosite savo turtą nuo įvairių apgadinimų.<br/><br/>
      <strong>3.</strong> Dėžę būtina apklijuoti lipnia juosta iš visų pusių.<br/><br/>
      <strong>MB „IT112“ neatsako, jei įrenginys buvo pažeistas pristatymo metu dėl netinkamo įpakavimo.</strong>
    </p>
  </div>
</div>

<?php get_footer(); ?>

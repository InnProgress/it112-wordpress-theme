<?php get_header(); ?>

<div class="flex flex-col-reverse md:flex-row md:max-lg:mt-14 mb-14 lg:mb-0">
  <div class="flex-1 self-center text-center md:text-left">
    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-1 md:mb-4">DAŽNIAUSIAI UŽDUODAMI KLAUSIMAI</h1>
    <p class="text-lg md:text-xl lg:text-2xl text-justify md:text-left my-2 md:my-5">Čia rasite visus populiariausių klausimų atsakymus. Jei reikalingos informacijos neradote - susisiekime telefonu ar elektroniniu paštu.</p>
    <a href="<?php echo get_page_link(12); ?>" class="btn btn--red rounded-lg inline-block text-lg md:text-xl px-12 py-4 mt-2 md:mt-0">KONTAKTAI</a>
  </div>
  <div class="flex-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/DUK.png" class="mx-auto w-9/12 md:w-full" alt="Kompiuterių remonto kainos">
  </div>
</div>

<div class="flex flex-col-reverse lg:flex-row justify-between mb-6 md:mb-0">
  <div class="container mx-auto pt-2 pb-5 px-4">

    <div class="text-center mb-6 lg:mb-14">
      <h2 class="text-2xl md:text-4xl font-bold mb-1 md:mb-3">D.U.K.</h2>
    </div>
    
    <div>
      <div class="border border-slate-300 rounded-md bg-white mb-6">
        <div class="bg-gray-100	border-b border-slate-300 rounded-t-md px-5 py-3">
          <h2 class="text-xl font-medium">Kokiu adresu mus galite rasti?</h2>
        </div>
        <div class="px-5 py-3">
          Kalvarijų g. 2, Vilnius. Esame įsikūrę šalia CUP prekybos centro. Labai patogu atvykti autobusu - pro langą matosi „Žaliojo tilto“ stotelė.
        </div>
      </div>
      
      <div class="border border-slate-300 rounded-md bg-white mb-6">
        <div class="bg-gray-100	border-b border-slate-300 rounded-t-md px-5 py-3">
          <h2 class="text-xl font-medium">Koks mūsų darbo laikas?</h2>
        </div>
        <div class="px-5 py-3">
          Mes dirbame I-V, 10-18 val. VI, 10-15 val.
        </div>
      </div>

      <div class="border border-slate-300 rounded-md bg-white mb-6">
        <div class="bg-gray-100 border-b border-slate-300 rounded-t-md px-5 py-3">
          <h2 class="text-xl font-medium">Per kiek laiko atliekame kompiuteriui diagnostiką?</h2>
        </div>
        <div class="px-5 py-3">
          Kiekviena situacija yra individuali. Vidutinškai gedimą nustatome greičiau nei per valandą.
        </div>
      </div>

      <div class="border border-slate-300 rounded-md bg-white mb-6">
        <div class="bg-gray-100 border-b border-slate-300 rounded-t-md px-5 py-3">
          <h2 class="text-xl font-medium">Kiek laiko užtrunka aušinimo valymas, termopastos keitimas?</h2>
        </div>
        <div class="px-5 py-3">
          Dažniausiai užtrunkame apie 20-30 minučių.
        </div>
      </div>

      <div class="border border-slate-300 rounded-md bg-white mb-6">
        <div class="bg-gray-100 border-b border-slate-300 rounded-t-md px-5 py-3">
          <h2 class="text-xl font-medium">Kiek laiko užtrunka Windows perrašymo darbai?</h2>
        </div>
        <div class="px-5 py-3">
          Jei prieš Windows perrašymą nereikia išsaugoti jokių duomenų, tada užtrunkama apie 1-2 valandas. Tačiau jei duomenis reikia išsaugoti - užtrunkama ilgiau, o laikas priklauso nuo duomenų kiekio.
        </div>
      </div>
      
      <div class="border border-slate-300 rounded-md bg-white mb-6">
        <div class="bg-gray-100 border-b border-slate-300 rounded-t-md px-5 py-3">
          <h2 class="text-xl font-medium">Ar atliktiems darbams suteikiame garantiją?</h2>
        </div>
        <div class="px-5 py-3">
          Visiems remonto darbams bei serviso dalims suteikiame 3 mėnesių garantiją.
        </div>
      </div>

      <div class="border border-slate-300 rounded-md bg-white mb-6">
        <div class="bg-gray-100 border-b border-slate-300 rounded-t-md px-5 py-3">
          <h2 class="text-xl font-medium">Ar kompiuterio remonto metu bus pažeisti/prarasti duomenys?</h2>
        </div>
        <div class="px-5 py-3">
          Ne. Jei yra rizika, kad duomenys gali būti prarasti, mes klientą visada įspėjame. Jūsų duomenų saugumas yra mūsų prioritetas.
        </div>
      </div>

    </div>
  </div>
</div>

<?php require 'dirbame-su.php'; ?>

<?php get_footer(); ?>

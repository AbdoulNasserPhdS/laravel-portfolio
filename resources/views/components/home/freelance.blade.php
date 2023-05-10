<section id="tutorials" class="dark:bg-slate-800 pt-24 pb-16" >
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
          <div class="text-center mx-auto mb-[60px] max-w-[510px] "  >
       
            <h2 class=" revealable font-bold text-3xl sm:text-4xl md:text-[40px] text-dark dark:text-gray-300 mb-4">
                Mes Services freelance actifs
            </h2>


            <p class="text-base text-body-color">
                Passionné par l'informatique et j'offre plusieurs services en freelance en tant qu'activité transversale.
            </p>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap -mx-4">
        @foreach ($freelanceServices as $item)
          <x-freelance-item :title="$item['title']"
                            :image="$item['image']"
                            :github="$item['github']"></x-freelance-item>
        @endforeach

      </div>
      <div class="flex justify-center">
        <x-button-link href="https://comeup.com/profil/abdoulnasserhami" target="_blank" class="rounded-lg">
          Voir Tout
        </x-button-link>
      </div>
    </div>
  </section>
  <!-- ====== Cards Section End -->
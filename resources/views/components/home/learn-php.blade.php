<x-call-to-action>
    <x-slot name="title">
      <h4 class="text-white text-base font-semibold mb-2">
        Vous souhaitez collaborer avec moi ? 
      </h4>
      {{-- <h2 class=" text-white font-bold text-3xl sm:text-[38px] leading-tight mb-6 sm:mb-8 lg:mb-0 ">
        Alors commencez dès maintenant votre apprentissage.  <br class="hidden xs:block"/>
      </h2> --}}


      
      <div class="font-bold">
        <span class="text-4xl">Mes compétences</span>
        <div class="relative inline-grid grid-cols-2 grid-rows-1 gap-12 overflow-hidden text-2xl">

          <span class="animate-word col-span-full row-span-full" >Langages de programmation : Python, Compilé (C#, C++), Orienté objets (Java), langage web (HTML, CSS, PHP, javascript)</span>
          <span class="animate-word-delay-1 col-span-full row-span-full">Bases de données (MySQL, NoSQL, Oracle)</span>
          <span class="animate-word-delay-2 col-span-full row-span-full">Frameworks : Django, Flask, Angular+Ionic, Laravel</span>
          <span class="animate-word-delay-3 col-span-full row-span-full">Intelligence artificielle (Extraction, traitement et analyse des données)</span>
          <span class="animate-word-delay-4 col-span-full row-span-full">Intelligence artificielle(Apprentissage automatique, apprentissage profond)</span>

        </div>
      </div>
      

    </x-slot>


    
      <x-button-link href="{{ url('png/CV.pdf') }}" variant="dark" class="mr-3" target="_blank">
        Voir Mon CV
      </x-button-link>
      {{-- <x-button-link href="https://youtube.com/abdoulnasser1951" variant="red" target="_blank">
        Watch on YouTube
      </x-button-link> --}}


  
  </x-call-to-action>


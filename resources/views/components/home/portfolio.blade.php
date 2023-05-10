<!-- ====== Portfolio Section Start -->
<section
  id="portfolio"
  x-data="
        {
          selectedTab: 'Développement Web et Mobile',
          selectedSection: 'Développement Web et Mobile',
          activeClasses: 'bg-primary text-white',
          inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
        }
      "
  class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]"
  
>

  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full px-4">
        <div class="text-center mx-auto mb-[60px] max-w-[510px]">
          <h2 class="revealable font-bold text-3xl sm:text-4xl md:text-[40px] text-dark dark:text-gray-300 mb-4">
            Mes Projets Récents
          </h2>
          <p class="text-base text-body-color">
            Quelques-uns de mes projets professionnels et personnels, réalisés avec passion.
          </p>
        </div>
      </div>
    </div>


    <div class="flex flex-wrap justify-center -mx-4">
        <div class="w-full px-4">
          <ul class="flex flex-wrap justify-center mb-12 space-x-1">
            {{-- <li class="mb-1">
              <button
                @click="selectedSection = 'all' "
                :class="selectedSection == 'all' ? activeClasses : inactiveClasses "
                class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition "
              >
                All Domaines
              </button>
            </li> --}}
            @foreach($sections as $section)
            <li class="mb-1">
              <button @click="selectedSection = selectedTab = '{{$section}}';"
              :class="selectedSection === '{{$section}}' ? activeClasses : inactiveClasses"
              class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition">
              {{$section}}
            </button>
            </li>
            @endforeach
          </ul>
        </div>
      </div>



    <div class="flex flex-wrap justify-center -mx-4"
    :class="selectedSection == 'Développement Web et Mobile' ? 'block' : 'hidden' "
    
    >
        <ul class="flex flex-wrap justify-center mb-12 space-x-1">
            <li class="mb-1">
              <button
                @click="selectedTab = 'Développement Web et Mobile' "
                :class="selectedTab == 'Développement Web et Mobile' ? activeClasses : inactiveClasses "
                class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition "
              >
                All Projects
              </button>
            </li>
            @foreach($tabs_0 as $tab)
            <li class="mb-1">
              <button
                @click="selectedTab = '{{$tab}}' "
                :class="selectedTab === '{{$tab}}' ? activeClasses : inactiveClasses "
                class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition ">
                {{$tab}}
              </button>
            </li>
            @endforeach
          </ul>
        {{-- @foreach ($items as $item)
        <x-portfolio-section-item :sections="$item['section']"
                                    :tabs="$tabs"></x-portfolio-section-item>
        @endforeach --}}
    </div>




    
    <div class="flex flex-wrap justify-center -mx-4"
    :class="selectedSection == 'Intelligence Artificielle' ? 'block' : 'hidden' "
    
    >
        <ul class="flex flex-wrap justify-center mb-12 space-x-1">
            <li class="mb-1">
              <button
                @click="selectedTab = 'Intelligence Artificielle' "
                :class="selectedTab == 'Intelligence Artificielle' ? activeClasses : inactiveClasses "
                class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition "
              >
                All Projects
              </button>
            </li>
            @foreach($tabs_1 as $tab)
            <li class="mb-1">
              <button
                @click="selectedTab = '{{$tab}}' "
                :class="selectedTab === '{{$tab}}' ? activeClasses : inactiveClasses "
                class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition ">
                {{$tab}}
              </button>
            </li>
            @endforeach
          </ul>
        {{-- @foreach ($items as $item)
        <x-portfolio-section-item :sections="$item['section']"
                                    :tabs="$tabs"></x-portfolio-section-item>
        @endforeach --}}
    </div>

    


    <div class="flex flex-wrap -mx-4"$ 
    :class="selectedSection == 'Développement Web et Mobile' ? 'block' : 'hidden' "
    >
      @foreach ($items as $item)
        <x-portfolio-item :title="$item['title']"
                          :categories="$item['category_ID_0'] "
                          :itemsection="$item['section']"
                          :image="$item['image']"
                          :github="$item['github']"></x-portfolio-item>
      @endforeach
    </div>


    
    <div class="flex flex-wrap -mx-4" 
    :class="selectedSection == 'Intelligence Artificielle' ? 'block' : 'hidden' ">
        @foreach ($items as $item)
          <x-portfolio-item :title="$item['title']"
                            :categories="$item['category_ID_1'] "
                            :itemsection="$item['section']"
                            :image="$item['image']"
                            :github="$item['github']"></x-portfolio-item>
        @endforeach
      </div>



  </div>

</section>
<!-- ====== Portfolio Section End -->
<div
  x-data="{sections: {{ json_encode($sections) }} }"
  :class="selectedSection == 'all' || sections.includes(selectedSection) ? 'block' : 'hidden' "
  class="w-full md:w-1/2 xl:w-1/3 px-4"
>

    <ul class="flex flex-wrap justify-center mb-12 space-x-1">
      <li class="mb-1">
        <button
          @click="selectedTab = 'all' "
          :class="selectedTab == 'all' ? activeClasses : inactiveClasses "
          class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition "
        >
          All Projects
        </button>
      </li>
      @foreach($tabs as $tab)
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
  </div>





  {{-- <div class="w-full px-4">
    <ul class="flex flex-wrap justify-center mb-12 space-x-1">
      <li class="mb-1">
        <button
          @click="selectedTab = 'all' "
          :class="selectedTab == 'all' ? activeClasses : inactiveClasses "
          class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition "
        >
          All Projects
        </button>
      </li>
      @foreach($tabs as $tab)
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
  </div> --}}
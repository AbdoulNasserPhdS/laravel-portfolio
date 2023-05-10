<!-- ====== Navbar Section Start -->
<style>
 

    header {

    background: linear-gradient(to right, #0f2d54, #772121, #3194b4,#0f2d54);

  /* background: linear-gradient(to right, #f12711, #f5af19, #f5af19, #f12711); */
  background-size: 400% 400%;
  animation: gradient 20s ease infinite;
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}


  </style>
  
  <header
    x-data="{navbarOpen: true}"
    class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24"
  >
  
  <div class="container">
    <div class="flex -mx-4 items-center justify-between relative">
      <div class="pr-4 w-60 max-w-full">
        <a href="/" class="w-full flex items-center py-2">
          <img
            src="{{ url('/img/logo.png') }}"
            alt="logo"
            class="w-[48px] lg:w-[64px] inline-block dark:hidden"
          />
          <img
            src="{{ url('/img/logo.png') }}"
            alt="logo"
            class="w-[48px] lg:w-[64px] hidden dark:inline-block"
          />
          <span class="text-xl xl:text-2xl font-bold text-[#0c7187] dark:text-white">NasserPortfolio</span>
        </a>
      </div>
      <div class="flex px-4 justify-end items-center w-full">
        <div>
          <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                                     x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-hamburger>
          <nav
            :class="!navbarOpen && 'hidden' "
            id="navbarCollapse"
            class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none"
          >
            <ul class="block lg:flex lg:items-center">
              @foreach($navigationItems as $item)
                <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
              @endforeach

              <div class="ml-0 lg:ml-10 xl:ml-16 relative top-1">
                <div class="g-ytsubscribe" data-channelid="UC_UMEcP_kF0z4E6KbxCpV1w" data-layout="default"
                     data-count="default"></div>
              </div>
            </ul>
          </nav>

          
        </div>
      </div>
    </div>
  </div>
</header>
<!-- ====== Navbar Section End -->
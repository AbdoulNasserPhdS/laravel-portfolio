<!-- ====== Hero Section Start -->
<div class="relative pt-[60px] lg:pt-[80px] pb-[110px] bg-cover bg-no-repeat bg-center" style="background-image: url('/img/back.png')">
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full lg:w-5/12 px-4">
          <div class="hero-content">
            <h1
              class="text-dark dark:text-gray-200 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-6"
            >
              Je suis Abdoul Nasser,<br/>
              <span class="rounded-md text-amber-600">Data scientist et Développeur</span>.
            </h1>


            <p class="text-base mb-8 max-w-[520px]">


            Je suis fier de vous présenter mon portfolio que j'ai réalisé à l'aide de Laravel. 
            Cette plateforme reflète mes compétences en tant que développeur et data scientist et témoigne de mon dévouement à offrir des solutions technologiques efficaces et performantes.<br/>
            Contactez-moi pour en savoir plus sur mes compétences ou pour discuter de vos projets.
              {{-- Développeur et data scientist spécialisé dans le développement web et l'intelligence artificielle.<br/>
              J'aime partager mes connaissances avec les autres et mon portfolio reflète cette volonté en présentant mes projets les plus innovants en utilisant les dernières technologies.<br/>
               Contactez-moi pour en savoir plus sur mes compétences ou pour discuter de vos projets. --}}
              {{-- <a
                class="text-primary font-bold no-underline hover:underline underline-offset-2 decoration-2 decoration-primary"
                href="https://youtube.com/TheCodeholic" target="_blank">YouTube Channel</a>. <br> --}}
            </p>
            <ul class="flex flex-wrap items-center">
              <li>
                <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                  Mes Projets
                </x-button-link>
              </li>
            </ul>
            <div class="clients pt-16">
              <h6 class="font-normal text-xs flex items-center text-body-color dark:text-gray-300 mb-4">
                Me contacter sur les réseaux sociaux
                <span class="w-8 h-[1px] bg-body-color inline-block ml-2"></span>
              </h6>
              <x-social-icons></x-social-icons>
            </div>
          </div>
        </div>
        <div class="hidden lg:block lg:w-1/12 px-4"></div>
        <div class="w-full lg:w-6/12 px-4">
          <div class="lg:text-right lg:ml-auto">
            <div class="relative inline-block z-10 pt-11 lg:pt-0">
              <img
                {{-- src="{{ url('/img/back2.png') }}" --}}
                src="{{ url('/img/prof.gif') }}"

                alt="hero"
                class="max-w-full lg:ml-auto"
              />
              <span class="absolute -left-8 -bottom-8 z-[-1]">
                <svg
                  width="93"
                  height="93"
                  viewBox="0 0 93 93"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3"/>
                  <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3"/>
                  <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3"/>
                  <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3"/>
                  <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3"/>
                  <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3"/>
                  <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3"/>
                  <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3"/>
                  <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3"/>
                  <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3"/>
                  <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3"/>
                  <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3"/>
                  <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3"/>
                  <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3"/>
                  <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3"/>
                  <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3"/>
                  <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3"/>
                  <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3"/>
                  <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3"/>
                  <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3"/>
                  <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3"/>
                  <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3"/>
                  <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3"/>
                  <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3"/>
                  <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3"/>
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Hero Section End -->
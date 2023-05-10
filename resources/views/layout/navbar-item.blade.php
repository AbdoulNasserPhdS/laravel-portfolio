<li class="ml-4 lg:ml-6 xl:ml-12"  >
    <a href="{{ $href }}" onMouseDown="selectLink(event, this)" class="text-sm font-semibold text-gray-700 py-2 flex items-center justify-center hover:text-primary dark:text-gray-200 dark:hover:text-gray-50 lg:inline-flex transition-colors duration-300 ease-in-out my-styled-link" >
      <span class="mr-1">{{ $slot }}</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 fill-current text-primary hidden lg:inline-block" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M5.293 6.293a1 1 0 0 0 0 1.414L8.586 11l-3.293 3.293a1 1 0 0 0 1.414 1.414l4-4a1 1 0 0 0 0-1.414l-4-4a1 1 0 0 0-1.414 0z" clip-rule="evenodd" />
      </svg>
    </a>
</li>
  
  <style>
      #menu-toggle:checked + #menu {
        display: block;
      }
  </style>
  
<nav class="bg-white flex flex-wrap items-center text-white lg:py-0 py-2 bg-cine bg-center bg-cover">
    <div class="flex-1 flex items-center text-xl justify-between">
        <div class="flex items-center justify-center">
            <a href="/">
                <img src="{{ asset('img/logo.png') }}" class="ml-9 h-24 w-24" alt="">
            </a>
            <a href="/" class="sm:text-6xl font-bold">Pampa Flix</a>
        </div>
    </div>
    <label for="menu-toggle" class="pointer-cursor lg:hidden block">
        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M3.625 21H25.375V18.6667H3.625V21ZM3.625 15.1667H25.375V12.8333H3.625V15.1667ZM3.625 7V9.33333H25.375V7H3.625Z"
                fill="white" />
        </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />
    <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
        <ul class="lg:flex items-center justify-center list-none float-right lg:text-xl lg:space-x-5 mr-5">
            <li><a class="hover:border-b-2 border-teal-400 hover:delay-75" href="/">Home</a></li>
            <li><a class="hover:border-b-2 border-teal-400 hover:delay-75" href="/filmes">Filmes</a></li>
            <li><a class="hover:border-b-2 border-teal-400 hover:delay-75" href="/series">Series</a></li>
            <li><a class="hover:border-b-2 border-teal-400 hover:delay-75" href="/login">Login</a></li>
            @auth
                <li><a class="hover:border-b-2  border-teal-400 hover:delay-75" href="/favoritos">Favoritos</a></li>
            @endauth
        </ul>
    </div>
</nav>

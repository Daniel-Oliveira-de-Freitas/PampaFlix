<nav
    class="flex items-center text-xl justify-between h-32 w-full border-4 border-indigo-900 border-b-laranja w-full text-white bg-cine bg-center bg-no-repeat bg-cover">
    <div class="flex items-center justify-center">
        <img src="{{ asset('img/logo.png') }}" class="ml-9 h-24 w-24" alt="" >
        <a href="/" class="text-6xl font-bold">Pampa Flix</a>
    </div>
    <div>
        <ul class="flex list-none space-x-5 mr-5">
            <li><a class="hover:border-b-2 border-teal-400 hover:delay-75" href="/">Home</a></li>
            <li><a class="hover:border-b-2 border-teal-400 hover:delay-75" href="/filmes">Filmes</a></li>
            <li><a class="hover:border-b-2 border-teal-400 hover:delay-75" href="/series">Series</a></li>
            @auth
                <li><a class="hover:border-b-2  border-teal-400 hover:delay-75" href="">Favoritos</a></li>
            @endauth
        </ul>
    </div>
</nav>

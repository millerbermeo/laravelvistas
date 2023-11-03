<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body>
        <header class="p-5 bg-gray-600 text-white flex justify-between">
            <h1 class="text-3xl font-black">
                AGROVIDA
            </h1>

            {{-- @if (auth()->user())
            <p>Autenticado</p>
            @else
            <p>No autenticado</p>
            @endif --}}

            @auth()
            <nav class=" flex gap-4 items-center">
                <a href="{{route('post.create')}}" class="border p-2 font-bold flex rounded-2xl gap-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                </svg>
    
                CREAR</a>
                <a class="font-bold uppercase text-white" href="{{route('post.index', auth()->user()->username)}}">Hola, <span class="font-bold">{{ auth()->user()->username}}</span></a>

                <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="font-bold uppercase text-white" >CERRAR SESIÓN</button>
                </form>
          </nav>
            @endauth

            @guest
            <nav class="">
                <a class="text-white hover:text-blue-400 font-bold " href="/muro">LOGIN</a>
                <a class="text-white hover:text-blue-400 font-bold " href="{{route('register')}}">CREAR-CUENTA</a>
            </nav>
            @endguest

        </header>
        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')

        </main>
        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Agrovida - Todos los derechos reservados {{date("Y")}}
        </footer>
    </body>
</html>

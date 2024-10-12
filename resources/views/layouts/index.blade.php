<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>COT</title>
        <link href="{{ asset('css/main.css') }}" rel="stylesheet"/>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    </head>
    <body >
        <header id="appHeader" class="transparent">
            <p>COT</p>
            <nav>
                <ul>
                    <li><a href="{{route('home')}}" >Home</a></li>
                    <li><a href="{{route('articles.index')}}" >Articulos</a></li>
                    <li><a href="{{route('events.index')}}" >Eventos</a></li>
                    <li><a href="{{route('about')}}" >Sobre nosotros</a></li>
                    <li><a href="{{route('contact')}}" >Contactos</a></li>
                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>Created by COT. All rights reserved</p>
        </footer>
        @yield('script')
    </body>
</html>

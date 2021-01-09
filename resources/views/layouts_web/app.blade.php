<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <header>
            <nav class="navbar">
                <span class="navbar-toggle" id="js-navbar-toggle">
                    <i class="box-shadow-menu">Menú</i>
                </span>
                <img src="{{ asset('images/logo.png') }}" alt="Logo_company">
                <ul class="main-nav" id="js-menu">
                    <li>
                        <a href="#" class="nav-links">Home</a>
                    </li>
                    <li>
                        <a href="#" class="nav-links">Products</a>
                    </li>
                    <li>
                        <a href="#" class="nav-links">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="nav-links">Contact Us</a>
                    </li>
                    <li>
                        <a href="#" class="nav-links">Blog</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <section>
                <ul>
                    <li><a href="#"></a>Linkedin</li>
                    <li><a href="#"></a>FaceBook</li>
                    <li><a href="#"></a>Instagram</li>
                </ul>
            </section>
        </footer>
        @livewireScripts
        <script>
            let mainNav = document.getElementById('js-menu');
            let navBarToggle = document.getElementById('js-navbar-toggle');

            navBarToggle.addEventListener('click', function () {
                mainNav.classList.toggle('active');
                console.log(mainNav.className);
                if (mainNav.className!='main-nav') {
                    document.querySelector('.box-shadow-menu').innerHTML = 'X';
                }else{
                    document.querySelector('.box-shadow-menu').innerHTML = 'Menú';
                }
            });
        </script>
    </body>
</html>

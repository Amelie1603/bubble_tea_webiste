<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts : Attention à ne pas l'oublier. Ou le menu déroulant ne fonctionnera pas ... -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Bubble My Tea</title>

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        <!-- Page Heading. Normalement on devrait mettre tout le header dans un autre fichier .php puis l'integrer avec un yield.
             En effet vu que plein de gens travaillent sur ce fichier, risque accru de conflit avec git. Et niveau organisation
             c'est mieux -->
        <header class="font-pacifico bg-pink items-center p-4 py-1">

            <!-- Settings Dropdown. Un dropdown est un menu deroulant -->
            <div class="w-screen mx-auto container items-center flex-col sm:ml-6 justify-end">
                <div class="flex mx-auto items-center justify-between">
                    <x-dropdown class="object-right sm:ml-6 justify-end sm:items-end" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex object-left justify-end items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>Menu</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <form method="GET" action="{{ url('/') }}">
                                @csrf

                                <x-dropdown-link :href="url('/')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Accueil') }}
                                </x-dropdown-link>
                            </form>
                            @if (Auth::check())
                            <!-- Authentication -->
                            <form method="GET" action="{{ url('/products') }}">
                                @csrf

                                <x-dropdown-link :href="url('products')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Produit') }}
                                </x-dropdown-link>
                            </form>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                           
                            <form method="GET" action="{{ route('admin') }}">
                                @csrf

                                <x-dropdown-link :href="route('admin')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Admin') }}
                                </x-dropdown-link>
                            </form>
                            @else
                           
                            <!-- Authentication -->
                            <form method="GET" action="{{ route('login') }}">
                                @csrf

                                <x-dropdown-link :href="route('login')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log In') }}
                                </x-dropdown-link>
                            </form>
                            <!-- Authentication -->
                            <form method="GET" action="{{ route('register') }}">
                                @csrf

                                <x-dropdown-link :href="route('register')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Register') }}
                                </x-dropdown-link>
                            </form>
                            @endif
                        </x-slot>
                    </x-dropdown>
                </div>
                <h1 class="text-5xl text-center mt-2">Bubble My Tea</h1>
                <p class="text-gray text-center mt-4 text-xl ">Même les pandas en boivent !</p>
                <div class="flex items-center justify-between">
                    <img class="mx-auto w-20" src="resources/views/panda.png" alt="logo du site" />
                </div>
            </div>

        </header>
        <!-- Fin Page Heading -->

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
        <!-- Page Footer -->
    </div>
    <footer class="bg-lightgray mt-3 flex items-center p-4 flex-wrap">

        <a  href="https://www.instagram.com/%22%3E" ><img src="/resources/views/instagram.png" width=40px> </a>
       
        <a  href="https://fr.linkedin.com/" ><img src="/resources/views/linkedin.png" width=40px></a>
        <a  href="https://twitter.com/?lang=fr" ><img src="/resources/views/twitter.png" width=40px> </a>
        
        <a  href="https://twitter.com/?lang=fr" ><img src="/resources/views/facebook.png" width=40px> </a>
  
  
        <div class="absolute right-0">
        <p>Bubble_My_Tea © Copyright 2022</p>
        </div>
  
        <div class="mr-auto ml-auto">
        <a class="" href="/">Home -
        <a class="" href="/product">Services
  
  
        </div>
  </footer>
</body>

</html>


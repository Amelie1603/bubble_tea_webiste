<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Bubble My Tea</title>
</head>

<body>
{{-- HEADER --}}
<header class="font-pacifico bg-pink flex items-center p-4 py-1">
  <nav class="container mx-auto">
      <h1 class="text-5xl text-center mt-2">Bubble My Tea</h1>
      <p class="text-gray text-center mt-4 text-xl ">Même les pandas en boivent !</p>
    <div class=" w-20 justify-start">
      <img class="logo3" src="resources/views/panda.png" alt="logo du site"/>
    </div>
    <ul class="hidden sm:flex flex-1 justify-end items-center gap-12 uppercase ">
      <form action ="/" method="get">
        @csrf
        <button class="cursor-pointer">Home</button>
      </form>
      @if (Auth::check()) 
      <form action ="/profil" method="get">
        @csrf
        <button class="cursor-pointer">Profil</button>
      </form>
      @endif
      <form action ="/products" method="get">
        @csrf
        <button class="cursor-pointer">Shop</button>
      </form>
      <form action ="/login" method="get">
        @csrf
        <button class="cursor-pointer">Login</button>
      </form>      
    </ul>
    <div class="flex sm:hidden flex-1 justify-end">
      <i class="fa-regular fa-bars"></i>
    </div>

  </nav>



</header>
<div class="containeur mx-auto bg-pink1 p-4"></div>

@yield('content')
<footer>
            <div class="social">
              <a href="https://www.instagram.com/?hl=fr"><img src="/resources/views/instagram.png" alt="Img instagram" width=40px></a> 
              <a href="https://fr.linkedin.com/" ><img src="/resources/views/linkedin.png" width=40px></a>
              <a href="https://twitter.com/?lang=fr" ><img src="/resources/views/twitter.png" width=40px> </a>
              <a href="https://www.facebook.com/"><img src="/resources/views/facebook.png" width=40px></a>
          </div>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="/home">Home</a></li>
              <li class="list-inline-item"><a href="#">Services</a></li>
              <li class="list-inline-item"><a href="#">About</a></li>
              <li class="list-inline-item"><a href="#">Terms</a></li>
              <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Bubble My Tea © 2021</p>
        
    </div>
    </footer>

</body>

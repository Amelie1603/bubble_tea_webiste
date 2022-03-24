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
      <form action ="/home" method="get"><button class="cursor-pointer">Home</button></form>
      <form action ="/profil" method="get"><button class="cursor-pointer">Profil</button></form>
      <form action ="/login" method="get"><button class="cursor-pointer">Shop</button></form>
      <form action ="/login" method="get"><button class="cursor-pointer">Login</button></form>
      @csrf
    </ul>
  
    <div class="flex sm:hidden flex-1 justify-end">
      <i class="fa-regular fa-bars"></i>
    </div>

  </nav>



</header>
<div class="containeur mx-auto bg-pink1 p-4"></div>

@yield('content')
</body>
</html>

  
               
               
       
          


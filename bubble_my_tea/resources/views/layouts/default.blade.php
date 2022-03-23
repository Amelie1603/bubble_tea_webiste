<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <meta name="description" content="--XXXXXXX--"/>
    <meta name="keywords" content="HTML CSS JAVASCRIPT"/>
    <meta name="author" content="--XXXXXXX--"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" type="text/css" href="resources/css/app.css"/>
    <link rel="icon" type="image/x-icon" href="resources/views/logo2.png">
    <title>Bubble My Tea</title>
  </head>
  <body>
      <nav>
          <div class="text">         
                <h1>Bubble My Tea</h1>
                <p class="slogan">Même les pandas en boivent</p>
                <img class="logo" src="resources/views/logo2.png" alt="logo du site" />
                <img class="logo2" src="resources/views/bambou-2.png" alt="logo du site"/>
          </div>
          
          <div class="navigation">

            <form action ="/home" method="get"><button class="commandebutton">Home</button></form>
             @csrf
             <form action ="/login" method="get"><button class="commandebutton">Mes commandes</button></form>
             @csrf
             <form action ="/profil" method="get"><button class="comptebutton">Mon compte</button></form>
            @csrf
            <form action ="/login" method="get"><button class="commanderbutton">Commander</button></form>
             @csrf
             <form action ="/login" method="get"><button class="loginbutton">Login</button></form>
            @csrf
          </div>
          <section>
          </section>
      </nav>
      @yield('content')
  </body>
</html>


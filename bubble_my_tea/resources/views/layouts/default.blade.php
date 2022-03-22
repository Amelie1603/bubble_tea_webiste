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
    <title>Bubble My Tea</title>
  </head>
  <body>
      <nav>
          <div class="text">         
                <h1>Bubble My Tea</h1>
                <p class="slogan">Même les pandas en boivent</p>
                <form action ="/welcome" method="get"><button class="imglogo"><img class="logo" src="resources/views/logo2.png" alt="logo du site" /></form>
          </div>
          
          <div class="navigation">
            
             <form action ="/login" method="get"><button class="commandebutton">Mes commandes</button></form>
             @csrf
             <form action ="/login" method="get"><button class="comptebutton">Mon compte</button></form>
            @csrf
            <form action ="/login" method="get"><button class="commanderbutton">Commander</button></form>
             @csrf
             <form action ="/login" method="get"><button class="loginbutton">Login</button></form>
            @csrf
          </div>
      </nav>
      @yield('content')
  </body>
</html>


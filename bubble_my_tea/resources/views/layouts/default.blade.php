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
            
             <form action ="/order" method="get"><button class="commandebutton">Mes commandes</button></form>

            <form action ="/" method="get"><button class="commandebutton">Home</button></form>
             @csrf
             @if (Auth::check()) 
                <form action ="/login" method="get"><button class="commandebutton">Mes commandes</button></form>
                @csrf 
                <form action ="/profil" method="get"><button class="comptebutton">Mon compte</button></form>
                @csrf
             @endif
            <form action ="/products" method="get"><button class="commanderbutton">Commander</button></form>
             @csrf
             <form action ="/login" method="get"><button class="loginbutton">Login</button></form>
            @csrf
          </div>
          <section>
          </section>
      </nav>
      @yield('content')

      
  </body>
  
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
 
</html>


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

    <body class="bodylogin">

  <nav>
    <div class="text">         
          <h1>Bubble My Tea</h1>
          <p class="slogan">Même les pandas en boivent</p>
          <img class="logo" src="resources/views/logo2.png" alt="logo du site" />
    </div>
    
    <div class="navigation">
      
        <form action ="/login" method="get"><button class="commandebutton">Mes commandes</button></form>
        @csrf
        <form action ="/login" method="get"><button class="comptebutton">Mon compte</button></form>
        @csrf
        <form action ="/login" method="get"><button class="commanderbutton">Commander</button></form>
        @csrf
        <form action ="/" method="get"><button class="loginbutton">Home</button></form>
        @csrf
    </div>
   
  </nav>
 
  <div class="login-wrapper">
    <h1 class="h1login">login</h1>
    <form id="login" class="login" method="POST">
      @csrf
      <div>
        <label for="mail">e-mail</label>
        <input type="mail" name="mail" id="mail" placeholder="Enter your e-mail" required>
      </div>
      <div>
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
      </div>
      
      <button class="submit" type="submit">login</button>
      
     
    
      </form>
      <p>
        New Here ?  <form action ="/sign" method="get"><button class="signbutton">Sign up</button></form>
      </p>
  </div>
</body>
<style>

</style>

</html>
<?php 

session_start();




if($_COOKIE['setconnected']){
  $_SESSION['connected'] = true;

  header('Location: ./page/showroom.php');
}



if($_SESSION['connected']){

header('Location: ./page/showroom.php');


}
 ?>





<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="./asset/tim.ico"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>minislam</title>
    <link rel="stylesheet" href="./page/style/style.css">
  </head>
  <body>
    <form class="container" action="src/connection_traitement.php" method="post">
        <div   class="Username contain">
          <p>se connecter </p>
          <label>Identifiant</label>
          <input  class="input " type="text" name="identifiant" value="">
        </div>

        <div class="Password contain ">
          <label>mot de passe </label>
          <input type="password" name="mdp" value="">
        <?php 
        if($_SESSION['wrong_credential']){
          ?>
          <p class="wrong_credential">Mauvais mot de passe ou Indentifiants</p>

          <?php 
        }


        ?>
        </div>



      <input class="submit" type="submit" name="" value="submit"/>

    </form>
      <a  class="create" href="./page/create_account.php">Créer un compte</a>


<div class="div-cookies">
  
<p class="cookies"> Ce site utilise des cookies : en poursuivant votre navigation vous acceptez l'utilisation des cookies</p>

  
</div>

  </body>
</html>

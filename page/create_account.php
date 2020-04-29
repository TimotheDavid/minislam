

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="../asset/tim.ico"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <title>create account</title>
  </head>
  <body>

<form class="container" action="../src/create_account_traitement.php" method="post">
        <div   class="Username contain">
          <p>créer un compte</p>
          <label>Identifiant</label>
          <input  class="input " type="text" name="Identifiant" value="">
        </div>

        <div class="Password contain ">
          <label>Mot de passe</label>
          <input type="password" name="mdp" value="">
        </div>



      <input class="submit" type="submit" name="" value="créer"/>

    </form>
    <a  class="create" href="../index.php">Se connecter</a>




  </body>
</html>
<?php  

require('../src/connection.php');

if(isset($_POST['submit'])){


  $Identifiant = $_POST['Identifiant'];
  $mot_de_passe = $_POST['mdp'];

  $req = $db -> prepare('INSERT INTO USER VALUES(,:identifiant,:mdp");');

        $exec = $req -> execute(array(
            "identifiant" => $identifiant,
            "mdp" => $mdp
        ));
  if($query){
    echo "ok";
  }




}

?>

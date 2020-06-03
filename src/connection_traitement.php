<?php
session_start();
require('connection.php');

if (isset($_POST['identifiant']) and isset($_POST['mdp'])) {
  // code...
	$_SESSION['wrong_credential'] = false;



$identifiant= $_POST['identifiant'];
$mot_de_passe = $_POST['mdp'];

$req = $db -> query("SELECT * FROM USER WHERE identifiant ='$identifiant'");
$data = $req -> fetch();

$data_identifiant = $data['identifiant'];
$data_mot_de_passe = $data['mdp'];


if(($data_identifiant == $identifiant) AND ($data_mot_de_passe == $mot_de_passe)){
	$_SESSION['connected'] = true;
	
  header('Location: ../page/showroom.php');



}else{
	$_SESSION['wrong_credential'] = true;
	header('Location: ../index.php');

  
}
}

 ?>

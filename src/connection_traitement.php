<?php
session_start();
require('connection.php');

print_r($_POST);
if (isset($_POST['identifiant']) and isset($_POST['mdp'])) {
  // code...




$identifiant= $_POST['identifiant'];
$mot_de_passe = $_POST['mdp'];

$req = $db -> query("SELECT * FROM USER WHERE identifiant ='$identifiant'");
$data = $req -> fetch();

$data_identifiant = $data['identifiant'];
$data_mot_de_passe = $data['mdp'];

echo $data_identifiant;
echo $data_mot_de_passe;

if(($data_identifiant == $identifiant) AND ($data_mot_de_passe == $mot_de_passe)){
	$_SESSION['connected'] = true;
	
  header('Location: ../page/showroom.php');



}else{
  echo 'nop';
}
}

 ?>

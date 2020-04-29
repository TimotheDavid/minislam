<?php  

require('connection.php');

if(!empty($_POST['Identifiant']) and !empty($_POST['mdp'])){

	$Identifiant = $_POST['Identifiant'];
	$mot_de_passe = $_POST['mdp'];

	$req = $db->prepare('INSERT INTO USER(identifiant,mdp) VALUES(:Identifiant,:mdp);');


	 $query = $req -> execute(array(
		':Identifiant'=> $Identifiant,
		':mdp' => $mot_de_passe
	));

	if($query){
		
		header('Location: ../index.php');

		
	}

}







?>
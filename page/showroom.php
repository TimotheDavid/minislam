


<?php 

session_start();
require('../src/connection.php');

if(!empty($_SESSION['connected'])){

$req = $db-> query('SELECT * FROM SHOWROOM');


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="../asset/tim.ico"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./style/style.css">
	
	<title></title>
</head>
<body>

<a href="../src/deconnexion.php"><button class="deco">se deconnecter</button></a>

<div class="containing">
 
<?php

while($result = $req -> fetch()){

	$nom_legume = $result['nom_legume'];
	$poids_legume = $result['poids_legume'];
	$prix = $result['prix'];
	$quantite = $result['quantite'];


?>

	
		
	<div class="panier">

		<h1><?php echo $nom_legume; ?></h1>

		<ul>
			<li>poids : <?php  echo $poids_legume; ?></li>
			<li>prix : <?php echo $prix ; ?> </li>
			<li>quantite :  <?php echo $quantite;  ?></li>
		</ul>	




		
	</div>



	


<?php 
		
	setcookie("RTFM","bien vu , bail et au revoir", time()+300);
	setcookie('setconnected',true,time()+(60*60*24),'/');
?>

<script type="text/javascript">
	localStorage.setItem('KISS','finish bravo tu es en bas')

#B61313


</script>

<?php 	


	}
?>
</div>

<?php 
}else{
	header('Location: ../page/error.php');
}

 ?>





</body>
</html>

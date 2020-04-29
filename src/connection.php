<?php

try{

$db = new PDO(
	'mysql:host=localhost;dbname=minislam;charser=utf-8','tim','timdav' );


}
catch(PDOException $e)
{
	die('Erreur : '.$e-> getMessage());


}




























 ?>

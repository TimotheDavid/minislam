<?php 

session_start();
session_destroy();
unset($_SESSION['connected']);
setcookie('setconnected',false, time()+3600,'/');


header('Location:../index.php');









 ?>
<?php 
 require_once('client.php');

$client1= new Client("id1","RUDY@hotmail.fr", date('d/m/Y', time()));
$client2= new  Client("id2","jojo@hotmail.fr", date('d/m/Y', time()));

$monTableau =[
$client1,$client2];
return $monTableau;

 ?>
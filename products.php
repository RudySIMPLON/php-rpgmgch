
<?php 
require_once("vegetale.php");
require_once("cloth.php");

$legumes1= new Vegetale("1","carotte","5euro","RDC","10/02/2017");

$legumes2= new Vegetale("2","tomate","3euro","algerie","11/02/2017");


$cloth1= new Cloth("1","chaussure","105euro","NIKE");
$cloth2= new Cloth("2","caleçcon","5euro","pierre cardin");
$cloth3= new Cloth("3","sweat","25euro","Armani");





$TAbleau=[$legumes1,$legumes2,$cloth1,$cloth2,$cloth3];

return $TAbleau;




 ?>
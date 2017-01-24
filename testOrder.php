<?php 
require_once("client.php");
require_once ("Product.php");
$product=require_once("products.php");

$client1 =require_once("useurse.php");
// var_dump($client1[0]);
var_dump($product[0]);
$produit1=$product[0];
$client1->buy($produit1);

?>
 <li>Identifiant client : 
        <?= $client1->GetId() ?></li>
        <li>Montant de la facture : <?= $client1->getBillAmount(); ?> </li>


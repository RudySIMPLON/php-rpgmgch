<?php 
$product= require_once ("products.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>Listes des produits </h1>



<?php foreach ($product as $product):?>
<table>
<tr>
<td><?=$product->GetId()?><td>
<td><?=$product->Getname()?><td>
<td><?=$product->Getprice()?><td>
<td><?=(method_exists($product, 'getProductorName') ? $product->GetProductorName() : null) ?></td>
<td><?=(method_exists($product, 'GetexpireAt') ? $product->GetexpireAt() : null) ?></td>
<td><?=(method_exists($product, 'getBrand') ? $product->getBrand() : null) ?></td>

</tr>
	
	

<?php endforeach;?>
</table>
	
</body>
</html>
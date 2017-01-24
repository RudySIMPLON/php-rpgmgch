<?php 
require_once ("Product.php");


class Vegetale extends Product {

private $productorName="";
private $expireAt="";


public function __construct($id,$name,$price,$productorName,$expireAt){

 $this->productorName=$productorName;
 $this->expireAt=$expireAt;
 parent::__construct($id,$name,$price);
}

public function GetProductorName(){
	return $this->productorName;
}
public function GetexpireAt(){
			$dateNow = time();
			
			$soFresh = time() - (strtotime('-1 day'));
			if ($dateNow - strtotime($expireAt) < $soFresh) {
				return true;
			} else {
				return false;
			}

	return $this->expireAt;
}



}









?>
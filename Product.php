<?php 

class Product {

private $id="";
private $name="";
private $price="";

public function __construct($id,$name,$price){

	$this->id=$id;
	$this->name=$name;
    $this->price=$price;
}

public function GetId(){
	return $this->id ;
}

public function Getname(){
	return $this->name;
}
public function Getprice(){
	return $this->price;
}




}

 ?>
<?php 
require_once('user.php');

class Client extends User {
    private $billAmount="";
    private $cart= [];

    public function __conctruct($billAmount,$cart){
    	$this->billAmount = $this->billAmount + $product->getPrice();
    	$this->cart=$cart;
    	
    }

    public function getCart(){
        return $this->cart;
    }
    public function addProductToCart($product){
        array_push($this->cart,$product);

    }

    public function getBillAmount(){
        return $this->billAmount;
    }



	public function buy($product){
		$this->addProductToCart($product);
		$this->getBillAmount($product);
		return ;
    }
}
       
 ?>
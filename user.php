<?php

class User
{
	private $_id;
	private $_email;
	private $_createdAt;


public function __construct($id, $email, $createdAt)
{
	$this->id =$id;
	$this->email=$email;
	$this->createdAt=$createdAt;
}

public function getId(){
	return $this->id;
}

public function getEmail(){
	return $this->email;
}
public function getCreatedAt(){
	return $this->createdAt;
}

// public function setID($id){
// 	$this->_id= $id;
// }
// public function setEmail($email){
// 	$this->_email= $email;
// }
// public function setCreatedAt($createdAt){
// 	$this->_createdAt= $createdAt;
}


 ?>
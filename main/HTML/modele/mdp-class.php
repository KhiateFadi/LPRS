<?php
class mdp{
  private $_email;

public function __construct($email){
  $this->setEmail($email);
}


public function setEmail($email){
  //if(is_string ($email)){
$this->_email = $email ;
  //}
//else {
  //echo"t nul";
//}
}
public function getEmail(){
  return $this->_email;
}
}




 ?>

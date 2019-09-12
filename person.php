<?php
Class Person{
 
 public $name;
 public $age;
public function __construct($name)
{
	# code...
	$this->name = $name;
}
  //Setters  and getters uses for security purpose.
public function getAge()
{
	return $this->age * 365;
}
public function setAge($age){
   if($age<18){
   	throw new Exception("Error Processing Request", 1);
   	  
   }
	$this->age = $age;
}
}

$ruben = New Person('Ruben');
$ruben->setAge(30);
var_dump($ruben->getAge());

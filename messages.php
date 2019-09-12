<?php
 // for business we need persons after hire they became staffs 
 Class Person{
protected $name;
public function __construct($name)
{

	# code...
	$this->name=$name;
}

 }

 Class Business{
    // For Running business we need staffs for create construct method
  protected $staff;
    public function __construct(Staff $staff){

       $this->staff=$staff;
    }
 	public function hire(Person $person){

 		// To hire person for bussiness
 		$this->staff->add($person);
 	}

 	public function getstaffmembers(){
 		return $this->staff->getmembers(); //getting members values
 	}

 }
 Class Staff{
 	
 	public function __construct($members=[]){
     $this->members=$members;
 	}
  
 	public function add(Person $person){
 		
 		$this->members[]= $person;
 	}
 	public function getmembers(){

 		return $this->members; //fetching all members
 	}

 }

 $ruben = New Person('Ruben');
 $staff = New Staff([$ruben]);
 $business = New Business($staff);

 $business->hire(new Person('Mythili'));

 var_dump($business->getstaffmembers());
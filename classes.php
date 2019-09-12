<?php
    
    class Task{
    	public $description;
    	public $completed = false;
         //Special name
    	public function __construct($description){
          // Automatically triggred  on instation

    		$this->description = $description;

    	}
      public function completed(){
        return $this->completed = true;
      }
    	public function is_completed(){

         return $this->completed;
    	}
}
//$Task = new Task('Eat') // New Task Object
    	$Task = [
      new Task('Eat'),
      new Task('Sleep'),
      new Task('Dinner'),
      ]; 
      $Task[0]->completed();
      var_dump($Task); 
     // $Task->completed(); //Completed task
    	// Checking task

      

    




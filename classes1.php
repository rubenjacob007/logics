<?php
Class Task{
	public $description;//Access Modifiers and variable
	public $title;
	public $completed = false;
	public function __construct($description,$title)
	{
		//Construct is special method that calls value

		$this->description=$description;
		$this->title = $title;

	}
	public function completed(){
      $this->completed = true;
	}
}

$task = New Task('Go the shop','Buy Vegetables');
$task->completed();
var_dump($task);

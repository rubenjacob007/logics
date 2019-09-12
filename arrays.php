<?php
   
  /*class arrays_functions{
    
    public $title;
    public $published;

     public function __construct($title,$published)
     {
     	$this->title = $title;
     	$this->published = $published;
     	# code...
     }



   }
*/

   require('Task.php');
   

require('function_laracasts.php');

$pdo = connect_to_db();
$tasks = query($pdo);
 
  /* $posts = [new arrays_functions('mythili',true),
new arrays_functions('karishma',false)

];*/

$unpublished = array_filter($tasks,function($tasks){

return $tasks->completed;

});

var_dump($unpublished);
/*//print_r($unpublished);
foreach($unpublished as $item) {
    echo $item->title."<br/>";                  
            
              
}*/

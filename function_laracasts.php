<?php
function connect_to_db(){
try {  
  return new PDO("mysql:host=localhost;dbname=laracasts_learning",'root','');  
         //return new PDO($config['connection'].'dbname='.$config['dbname'],$config['username'],$config['password']); 
    }
    catch(PDOException $e) {  

     die($e->getMessage());
    }  
}
function query($pdo)
{
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchall(PDO::FETCH_CLASS,'Task');
}
  /*function eligable_to_vote($age){

  	if($age>=21){
  		echo "eligable_to_vote";
  	}else {
  		# code...

    	echo "not_eligable_to_vote";
  	}


  }*/


/*
    eligable_to_vote(22);


    $state = 'New York';

function state_values($state){
    switch ($state) {
        case 'New York':
            echo "State is $state";
            $status = array("abbr" => "NY", "code" => "03");
            return $status;
            break;
        case 'California':
            echo "State is $state";
            $status = array("abbr" => "CA", "code" => "06");
            return $status;
            break;
        case 'Washington':
            echo "State is $state";
            $status = array("abbr" => "WA", "code" => "05");
            return $status;
            break;
    }
}*/

# Call the function
//$answer = state_values($state);

//print_r(state_values($state));

//echo $answer['abbr'];
/*echo $status['code'];*/

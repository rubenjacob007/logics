<?php

class LogToFile{

	public function execute($message){

		var_dump("You having logging into File:".$message);
	}
}
class LogToPdo{

	public function execute($message){

		var_dump("You having logging into Pdo:".$message);
	}
}
class LogToDatabase{

	public function execute($message){

		var_dump("You having logging into Database:".$message);
	}
}
/**
 * 
 */
class LoggerController
{
	protected $logger;
	function __construct($logger)
	{
		# code...
		$this->logger = $logger;
	} 

public function show(){

	$user = 'Sesha';

$this->logger->execute($user);

}

}

$controller = new LogToDatabase(new LogToDatabase);

$controller->show();
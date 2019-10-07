<?php
	function connectToDatabase()
	{
		try{
			$pdo = new PDO('mysql:host=127.0.0.1;dbname=test'
				,'root','root');
		}catch(PDOexception $exception){
			echo $e->getmessage();
		}
		return $pdo;	
	}
?>
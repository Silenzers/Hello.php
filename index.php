<?php
	Require("function.php");
	$pdo = connectToDatabase();
	
	$statement = $pdo->prepare('SELECT*FROM students');
	$statement -> execute();
	$result = $statement -> fetchAll(PDO::FETCH_OBJ);
	var_dump($result);
	Require("index.views.php");

?>

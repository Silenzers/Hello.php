<?php
require('funtion.php');
$pdo=connectToDatabase();
if (isset($_POST['submit'])) {
	# code...
	$statement = $pdo->prepare('INSERT INTO students (first_name, last_name, age, gender, 
		values(:first_name, :last_name, :age, :gender)');
	$statement.execute([
		'first_name' -> $_POST('first_name'),
		'last_name' -> $_POST('last_name'),
		'age' -> $_POST('age'),
		'gender' -> $_POST('gender')
	]);

}
header('location:index.php');

?>


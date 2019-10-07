<!DOCTYPE html>
<html>
<head>
	<title> View </title>
</head>
<body>
	<h1>Students</h1>
	<a href="/create-students.php">Add student</a>
	<table>>
		<thead>
			<tr>First name</tr>
			<tr>Last name</tr>
			<tr>Age</tr>
			<tr>Gender</tr>
		</thead>
		<body>
			<?php foreach($students as $student): ?>
				<tr>
					<td><?=$student->first_name ?></td>
					<td><?=$student->last_name ?></td>
					<td><?=$student->ag ?></td>
					<td><?=$student->gender ?></td>
				</tr>
			<?php endforeach; ?>
		</body>
	</table>
</body>
</html>
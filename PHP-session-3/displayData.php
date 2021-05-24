<!DOCTYPE html>
<html>
<head>
	<title>ITI | All data</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<table border="2">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>Country</th>
			<th>Gender</th>
			<th>Skills</th>
			<th>Username</th>
			<th>Password</th>
			<th>Department</th>
		</tr>

		<?php
			try{
				//connect
				$dbRef = new PDO("mysql:host=localhost;dbname=users",  //db type
						 "root",							   //db username
						 "");								   //db password
				//query
				$stds = $dbRef->query("select * from students")->fetchAll(PDO::FETCH_ASSOC);
				foreach ($stds as $std) {
					$id = array_shift($std);
					echo '<tr>';
					foreach ($std as $value) {
						echo "<td>{$value}</td>";
					}
					echo "<td class='last'><a href='edit.php?id={$id}'>Edit</a></td>";
					echo "<td class='last'><a href='delete.php?id={$id}'>Delete</a></td>";
					echo "<td class='last'><a href='view.php?id={$id}'>View</a></td>";
					echo '</tr>';
				}
			}
			catch(PDOException $e){
				echo "in catch <br>";
				echo $e->getMessage();
			}
		?>

	</table>

	<button class="last">
		<a href="index.php">Back</a>
	</button>
</body>
</html>
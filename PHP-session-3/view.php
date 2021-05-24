<!DOCTYPE html>
<html>
<head>
	<title>ITI | ID[<?php echo $_GET['id']?>]</title>
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
				$std = $dbRef->query("select * from students where id={$_GET['id']}")->fetch(PDO::FETCH_ASSOC);
				
				array_shift($std);
				echo '<tr>';
				foreach ($std as $value) {
					echo "<td>{$value}</td>";
				}
				echo '</tr>';
			}
			catch(PDOException $e){
				echo "in catch <br>";
				echo $e->getMessage();
			}
		?>

	</table>

	<button class="last">
		<a href='displayData.php'>Back</a>
	</button>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>ITI | All data</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<table border="2">
		<?php session_start(); echo "<center><legend><h1>Hello, {$_SESSION['name']}</h1></legend></center>"; ?>
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
				require_once("DB.php");

				//connect
				$dbm = new dbManager();

				//query
				$stds = $dbm->doQuery("select * from students", true); 
							//doQuery(query, bool associative array)

				//close
				unset($dbm);

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
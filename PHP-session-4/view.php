<!DOCTYPE html>
<html>
<head>
	<title>ITI | ID[<?php echo $_GET['id']?>]</title>
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
				$std = $dbm->doQuery("select * from students where id={$_GET['id']}", true, false);
							//doQuery(query, bool associative array, bool fetchAll or fetch)

				//close
				unset($dbm);

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
<!DOCTYPE html>
<html>
<head>
	<title>ITI | Data</title>
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
			$file = fopen("data.txt", "r");
			$arr = [];
			while(!feof($file)){
				array_push($arr, fgets($file));
			}
			array_pop($arr);
			foreach($arr as $data){
				$fdata = explode('-', $data);
				echo "<tr>";
				foreach($fdata as $field){
					echo "<td>". $field . "</td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>
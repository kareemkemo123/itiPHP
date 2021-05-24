<?php
	
	$data = $_POST;
	array_pop($data);

	try{
		//connect
		$dbRef = new PDO("mysql:host=localhost;dbname=users",  //db type
						 "root",							   //db username
						 "");								   //db password

		//query
		$query = "insert into students set ";
		foreach($data as $field=>$val){
			if(gettype($val) != 'array' && $field != 'dept'){
				$query = $query . "`{$field}`='{$val}',";
			}
			elseif(gettype($val) == 'array'){
				$val = implode(',', $val);
				$query = $query . "`{$field}`='{$val}',";
			}
			else{
				$query = $query . "`{$field}`='{$val}';";
			}
		}
		$dbRef->query($query);

		header("location:displayData.php");
	}
	catch(PDOException $e){
		echo "in catch <br>";
		echo $e->getMessage();
	}

?>
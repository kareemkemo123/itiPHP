<?php 
	try{
		//connect
		$dbRef = new PDO("mysql:host=localhost;dbname=users",  //db type
						 "root",							   //db username
						 "");								   //db password

		//query
		$query = "delete from students where id={$_GET['id']};";

		$dbRef->query($query);

		header("location:displayData.php");
	}
	catch(PDOException $e){
		echo "in catch <br>";
		echo $e->getMessage();
	}
?>
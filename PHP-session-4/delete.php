<?php 
	try{
		require_once("DB.php");

		//connect
		$dbm = new dbManager();

		//query
		$query = "delete from students where id={$_GET['id']};";

		$dbm->doQuery($query);

		header("location:displayData.php");
	}
	catch(PDOException $e){
		echo "in catch <br>";
		echo $e->getMessage();
	}
?>
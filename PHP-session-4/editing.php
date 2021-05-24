<?php
	$id = $_GET['id'];

	try{
		require_once("DB.php");

		//connect
		$dbm = new dbManager();

		//query
		$newData = $_POST;
		array_pop($newData);
		$query = "update students set ";
		foreach ($newData as $field => $val) {
			if(gettype($val) != 'array' && $field != 'dept'){
				$query = $query . "`{$field}`='{$val}',";
			}
			elseif(gettype($val) == 'array'){
				$val = implode(',', $val);
				$query = $query . "`{$field}`='{$val}',";
			}
			else{
				$query = $query . "`{$field}`='{$val}' where id=".intval($id);
			}
		}
		$dbm->doQuery($query);

		header("location:displayData.php");
	}
	catch(PDOException $e){
		echo "in catch <br>";
		echo $e->getMessage();
	}
?>
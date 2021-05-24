<?php
	$data = $_POST;
	array_pop($data);
	// preparing data
	$validateArr = [];
	foreach ($data as $key => $value) {
		if($key == 'country' || $key == 'gender' || $key == 'skills' || $key == 'password'){
			continue;
		}
		else{
			$validateArr[$key] = $value;
			$data[$key] = stripcslashes(htmlspecialchars(trim($value)));
		}
	}
	unset($validateArr['address']);
	unset($validateArr['username']);
	unset($validateArr['dept']);
	// validation
	$errors = [];
	foreach ($data as $key => $value) {
		if( is_array($value) ? is_null($value) : !strlen($value) ){
			$errors[$key] = "$key is not valid";
		}
	}
	
	foreach ($validateArr as $field => $val){
		if($field != 'email'){
			for ($i = 0; $i < strlen($val); $i++) {
				$char = $val[$i];
				if( !((ord($char) >= 65 && ord($char) <= 90) || (ord($char) >= 97 && ord($char) <= 122)) ){
					$errors[$field] = "$field is not valid";
					break;
				}
			}

		}
		else{
			if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
				$errors[$field] = "$field is not valid";
			}
		}
	}
	if(count($errors) != 0){
		$errors = json_encode($errors);
		header("location:index.php?errors={$errors}");
		exit;
	}

	//session
	session_start();
	$_SESSION['name'] = $data['fname'] . ' ' . $data['lname'];

	try{
		require_once("DB.php");

		//connect
		$dbm = new dbManager();

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
		$dbm->doQuery($query);

		header("location:displayData.php");
	}
	catch(PDOException $e){
		echo "in catch <br>";
		echo $e->getMessage();
	}

?>
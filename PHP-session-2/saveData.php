<?php
	$fData = fopen("data.txt", "a+");

	array_pop($_POST);
	foreach($_POST as $attr => $val){
		
		if($attr != 'dept' && gettype($val) != 'array'){
			fwrite($fData, $val.'-');
		}
		elseif (gettype($val) == 'array' && $attr != 'dept') {
			foreach ($val as $value) {
				fwrite($fData, ' '.$value);
			}
			fwrite($fData, '-');
		}
		else
			fwrite($fData, $val."\n");
	}

	header("Location:disData.php");
?>
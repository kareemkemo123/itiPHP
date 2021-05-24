<?php

	// echo "<div>";
	// foreach ($_POST as $i => $j) {
	// 	if($i == 'submit'){
	// 		break;
	// 	}
	// 	elseif(gettype($_POST[$i]) == 'Array'){
	// 		echo 'Your ' . $i . ' is ';
	// 		for ($l = 0; $l < $_POST[$i]->length; $l++) {
	// 			if($l != $_POST[$i]->length - 1)
	// 				echo $_POST[$i][$l] . ', ';
	// 			else {
	// 				echo $_POST[$i][$l];
	// 			}
	// 		}
	// 	}
	// 	else{
	// 		echo 'Your ' . $i . ' is ' . var_dump($_POST[$i])[1];
	// 	}
	// 	echo '<br>';
	// }
	// echo "</div>";
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
?>
<?php
	try{
		//connect
		$dbRef = new PDO("mysql:host=localhost;dbname=users",  //db type
				 "root",							   //db username
				 "");								   //db password
		//query
		$std = $dbRef->query("select * from students where id={$_GET['id']}")->fetch(PDO::FETCH_ASSOC);
	}
	catch(PDOException $e){
		echo "in catch <br>";
		echo $e->getMessage();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ITI | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="container">
		<form method="post" action="editing.php?id=<?php echo $_GET['id'];?>">
			<label>
				<span>First Name: </span>
				<input type="text" name="fname" value="<?=$std['fname']?>">
			</label>
			<label>
				<span>Last Name: </span>
				<input type="text" name="lname" value="<?=$std['lname']?>">
			</label>
			<label id="addrContainer">
				<span>Address: </span>
				<textarea name="address" cols="20" rows="5" value="<?=$std['address']?>"> 
				</textarea>
			</label>
			<label>
				<span>Country: </span>
				<select name="country">
					<option value="none" selected hidden disabled>Select Country</option>
					<script type="text/javascript">
						var countries = [ 
							{"name": "Afghanistan", "code": "AF"}, 
							{"name": "land Islands", "code": "AX"}, 
							{"name": "Albania", "code": "AL"}, 
							{"name": "Algeria", "code": "DZ"}, 
							{"name": "American Samoa", "code": "AS"}, 
							{"name": "AndorrA", "code": "AD"}, 
							{"name": "Angola", "code": "AO"}, 
							{"name": "Anguilla", "code": "AI"}, 
							{"name": "Antarctica", "code": "AQ"}, 
							{"name": "Antigua and Barbuda", "code": "AG"}, 
							{"name": "Argentina", "code": "AR"}, 
							{"name": "Armenia", "code": "AM"}, 
							{"name": "Aruba", "code": "AW"}, 
							{"name": "Australia", "code": "AU"}, 
							{"name": "Austria", "code": "AT"}, 
							{"name": "Azerbaijan", "code": "AZ"}, 
							{"name": "Bahamas", "code": "BS"}, 
							{"name": "Bahrain", "code": "BH"}, 
							{"name": "Bangladesh", "code": "BD"}, 
							{"name": "Barbados", "code": "BB"}, 
							{"name": "Belarus", "code": "BY"}, 
							{"name": "Belgium", "code": "BE"}, 
							{"name": "Belize", "code": "BZ"}, 
							{"name": "Benin", "code": "BJ"}, 
							{"name": "Bermuda", "code": "BM"}, 
							{"name": "Bhutan", "code": "BT"}, 
							{"name": "Bolivia", "code": "BO"}, 
							{"name": "Bosnia and Herzegovina", "code": "BA"} 
						];
						for (var i = 0; i < countries.length; i++) {
							document.write('<option value="' + countries[i]['code'] + '">' + countries[i]['name'] + '</option>');
						}
					</script>
				</select>
			</label>
			<label>
				<span>Gender: </span>
				Male
				<input type="radio" name="gender" value="male">
				Female
				<input type="radio" name="gender" value="female">
			</label>
			<label>
				<span>Skills: </span>
				HTML
				<input type="checkbox" name="skills[]" value="HTML">
				CSS
				<input type="checkbox" name="skills[]" value="CSS">
				Javascript
				<input type="checkbox" name="skills[]" value="JS">
				Mysql
				<input type="checkbox" name="skills[]" value="Mysql">
				PHP
				<input type="checkbox" name="skills[]" value="PHP">
			</label>
			<hr>
			<label>
				<span>Username: </span>
				<input type="text" name="username" value="<?=$std['username']?>">
			</label>
			<label>
				<span>Password: </span>
				<input type="password" name="password" value="<?=$std['password']?>">
			</label>
			<label>
				<span>Department: </span>
				<input type="text" name="dept" value="<?=$std['dept']?>">
			</label>
			<input type="submit" name="submit" value="Update" class="last">
			<input type="reset" name="reset" value="Reset" class="last">
		</form>
	</div>
</body>
</html>
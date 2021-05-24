<?php
	if(isset($_GET['errors'])){
		$errors = json_decode($_GET['errors'], true);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ITI | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
		.error{
			color: red;
			width: 30%;
		}
	</style>
</head>
<body>
	<div class="container">
		<form method="post" action="saveData.php">
			<label>
				<span>First Name: </span>
				<input type="text" name="fname">
				<?php 
					if(isset($errors['fname'])){
						echo "<span class='error'> **{$errors['fname']}</span>";
					}
				?>
			</label>
			<label>
				<span>Last Name: </span>
				<input type="text" name="lname">
				<?php 
					if(isset($errors['lname'])){
						echo "<span class='error'> **{$errors['lname']}</span>";
					}
				?>
			</label>
			<label id="addrContainer">
				<span>Address: </span>
				<textarea name="address" cols="20" rows="5" value=""> 
				</textarea>
				<?php 
					if(isset($errors['address'])){
						echo "<span class='error'> **{$errors['address']}</span>";
					}
				?>
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
				<?php 
					if(isset($errors['country'])){
						echo "<span class='error'> **{$errors['country']}</span>";
					}
				?>
			</label>
			<label>
				<span>Gender: </span>
				Male
				<input type="radio" name="gender" value="male">
				Female
				<input type="radio" name="gender" value="female">
				<?php 
					if(isset($errors['gender'])){
						echo "<span class='error'> **{$errors['gender']}</span>";
					}
				?>
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
				<?php 
					if(isset($errors['skills'])){
						echo "<span class='error'> **{$errors['skills']}</span>";
					}
				?>
			</label>
			<hr>
			<label>
				<span>Username: </span>
				<input type="text" name="username">
				<?php 
					if(isset($errors['username'])){
						echo "<span class='error'> **{$errors['username']}</span>";
					}
				?>
			</label>
			<label>
				<span>Password: </span>
				<input type="password" name="password">
				<?php 
					if(isset($errors['password'])){
						echo "<span class='error'> **{$errors['password']}</span>";
					}
				?>
			</label>
			<label>
				<span>Department: </span>
				<input type="text" name="dept">
				<?php 
					if(isset($errors['dept'])){
						echo "<span class='error'> **{$errors['dept']}</span>";
					}
				?>
			</label>
			<input type="submit" name="submit" value="Submit" class="last">
			<input type="reset" name="reset" value="Reset" class="last">
		</form>
		<button class="last"><a href="displayData.php">Display All</a></button>
	</div>
</body>
</html>
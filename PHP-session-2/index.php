<!DOCTYPE html>
<html>
<head>
	<title>ITI | PHP</title>
	<style type="text/css">
		label{
			display: block;
			margin: 10px;
		}
		label span{
			display: inline-block;
			width: 100px;
		}
		.last{
			padding: 10px;
			margin: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<form method="post" action="saveData.php">
			<label>
				<span>First Name: </span>
				<input type="text" name="fname">
			</label>
			<label>
				<span>Last Name: </span>
				<input type="text" name="lname">
			</label>
			<label id="addrContainer">
				<span>Address: </span>
				<textarea name="addr" cols="20" rows="5" value=""> 
				</textarea>
			</label>
			<label>
				<span>Country: </span>
				<select name="co">
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
				<input type="text" name="username">
			</label>
			<label>
				<span>Password: </span>
				<input type="password" name="password">
			</label>
			<label>
				<span>Department: </span>
				<input type="text" name="dept">
			</label>
			<input type="submit" name="submit" value="Submit" class="last">
			<input type="reset" name="reset" value="Reset" class="last">
		</form>
	</div>
</body>
</html>
<!-- code for backend -->
<?php
include("include./config.php");
include("include./user_details.php");
?>

<!-- ------------------------------------------------------------------------------------------------ -->

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("include./head.php"); ?>
	<title>User details</title>
</head>

<body>
	<div class="container" align="center">
		<h1>Enter your details</h1>
		<form action="" id="signform" method="POST">
			<label for="firstname">Firstname*</label><br>
			<input type="text" name="firstname" class="inputbox" required><br>
			<label for="lastname">Lastname*</label><br>
			<input type="text" name="lastname" class="inputbox" required><br>
			<label for="Phonenumber">Phonenumber*</label><br>
			<input type="tel" name="phonenumber" class="inputbox" pattern="[0-9]{3}[0-9]{4}[0-9]{3}" required><br>
			<label for="dob">Date of Birth*</label><br>
			<input type="date" name="dateofbirth" class="inputbox" required><br>
			<label for="Gender" required>Gender*</label><br>
			<input type="radio" name="gender" value="male"> Male<br>
			<input type="radio" name="gender" value="female"> Female<br>
			<input type="radio" name="gender" value="other"> Other
			<button class="button" name="submit" type="submit">Submit</button>
		</form>
	</div>
</body>


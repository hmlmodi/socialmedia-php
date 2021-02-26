<!-- code for backend -->
<?php
include("include./config.php");
include("include./backend_user_details.php");
?>

<!-- ------------------------------------------------------------------------------------------------ -->

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include./head.php'); ?>
	<title>User details</title>
</head>

<body>
	<div class="container" align="center">
		<h1>Enter your details</h1>
		<form action="" id="signform" method="POST">
			<label for="firstname">Firstname</label><br>
			<input type="text" name="firstname" class="inputbox"><br>
			<label for="lastname">Lastname</label><br>
			<input type="text" name="lastname" class="inputbox"><br>
			<label for="Phonenumber">Phonenumber</label><br>
			<input type="number" name="phonenumber" class="inputbox"><br>
			<label for="dob">Date of Birth</label><br>
			<input type="date" name="dateofbirth" class="inputbox"><br>
			<label for="Gender">Gender</label><br>
			<input type="radio" name="gender" value="male"> Male<br>
			<input type="radio" name="gender" value="female"> Female<br>
			<input type="radio" name="gender" value="other"> Other
			<button class="button" name="submit" type="submit">Submit</button>
		</form>
	</div>
</body>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User details</title>
	<link rel="stylesheet" href="./styles./styles.css">
</head>

<body>
	<div class="container" align="center">
		<h1>Enter your details</h1>
		<form action="./insert.php" id="signform" method="POST">
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
			<button class="button" name = "submit"type="submit">Submit</button>
			
		</form>
	</div>
</body>





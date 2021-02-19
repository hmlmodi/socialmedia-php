<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signup</title>
	<link rel="stylesheet" href="./styles./styles.css">
</head>

<body>
	<div class="container" align="center">
		<h1>Sign up</h1>
		<form action="./register.php" id="signform" method="POST">
			<label for="Email">Email</label><br>
			<input type="email" name="username" placeholder="Enter Email" class="inputbox"><br>
			<label for="password">Password</label><br>
			<input type="password" name="password" class="inputbox"><br>
			<button class="button" type="submit">Submit</button>

		</form>
	</div>


</body>

</html>
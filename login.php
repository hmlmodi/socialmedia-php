<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	<link rel="stylesheet" href="./styles./styles.css">
</head>

<body>
	<div class="container" align="center">
		<h1>login</h1>
		<form action="" id="loginform" method="POST">
			<label for="Email">Email</label><br>
			<input type="email" name="username" placeholder="Enter Email" class="inputbox"><br>
			<label for="password">Password</label><br>
			<input type="password" name="password" class="inputbox"><br>
			<div>Forgot password?</div><br>
			<button class="button" name = "submit"type="submit">Submit</button>
			<a href="./signup.php" title="Go to signup page">New user?Signup</a>
			
		</form>
	</div>
	

</body>

</html>
<!-- ----------------------------------------------------------------------------------- -->

<?php
	if(isset($_POST["submit"]))
	{

		include("config.php");


		$name = $_POST["username"];
		$password = $_POST["password"];
		$pass = md5($password);
		$query = "SELECT * FROM login WHERE userName = '$name' AND password = '$pass'";
		$result = mysqli_query($connection, $query);
		$num = mysqli_num_rows($result);
		echo $num;

		if (!$num == 1) {
			header("location:login.php");
		} else {
			header("location:welcome.php");
		}
	}	
?>


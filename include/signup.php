<?php
if (isset($_POST["submit"])) {
	$name = $_POST["username"];
	$password = $_POST["password"];
	// $error = "Username already taken!";
	$error = "Please Enter valid credentials!";
	$pass = md5($password);
	$query = "SELECT * FROM `login` WHERE userName ='$name'";
	$result = mysqli_query($connection, $query);
	$num = mysqli_num_rows($result);
	if ($num == 1) {
		$_SESSION["error"] = $error;
		header("location: signup.php");
	} else {
		if (empty($name)) {
			header("location: signup.php");
		} elseif (empty($password)) {
			header("location: signup.php");
		} else {
			$emailErr = "Email is required";
			$reg = "INSERT INTO `login`(`userName`, `password`) VALUES ('$name','$pass')";
			mysqli_query($connection, $reg);
			$_SESSION['name1'] = $name;
			$_SESSION['pass1'] = $pass;
			header("location:user_details.php");
		}
	}
}

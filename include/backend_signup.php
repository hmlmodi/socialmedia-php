<?php
if (isset($_POST["submit"])) {
	$name = $_POST["username"];
	$password = $_POST["password"];
	$error = "Username already taken!";
	$pass = md5($password);
	$query = "SELECT * FROM `login` WHERE userName ='$name'";
	$result = mysqli_query($connection, $query);
	$num = mysqli_num_rows($result);
	if ($num == 1) {
		$_SESSION["error"] = $error;
		header("location: signup.php");
	} else {
		$reg = "INSERT INTO `login`(`userName`, `password`) VALUES ('$name','$pass')";
		mysqli_query($connection, $reg);
		$_SESSION['name1'] = $name;
		$_SESSION['pass1'] = $pass;
		header("location:user_details.php");
	}
}
?>
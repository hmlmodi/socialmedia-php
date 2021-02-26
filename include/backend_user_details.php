<?php
if (isset($_POST["submit"])) {
	$name1 = $_SESSION['name1'];
	$pass1 = $_SESSION['pass1'];

	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$phonenumber = $_POST["phonenumber"];
	$dateofbirth = $_POST["dateofbirth"];
	$gender = $_POST["gender"];

	$idquery = "SELECT `id` FROM `login` WHERE userName ='$name1'&& password='$pass1'";
	$hml = mysqli_query($connection, $idquery);
	$row = $hml->fetch_assoc();
	$floginid = implode(',', $row);
	// var_dump($floginid);
	$_SESSION['floginid1'] = $floginid;
	$query = "INSERT INTO `user` (`loginId`, `firstName`, `lastName`, `phoneNumber`, `dob`, `gender`) VALUES ('$floginid', '$firstname','$lastname', '$phonenumber', '$dateofbirth','$gender');";
	$result = mysqli_query($connection, $query);
	header("location:welcome.php");
}
?>
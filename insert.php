
<?php


include("config.php");


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$phonenumber = $_POST["phonenumber"];
$dateofbirth = $_POST["dateofbirth"];
$gender = $_POST["gender"];



$query = "INSERT INTO `user` (`firstName`, `lastName`, `phoneNumber`, `dob`, `gender`) VALUES ('$firstname','$lastname', '$phonenumber', '$dateofbirth','$gender');";

$result = mysqli_query($connection, $query);
header("location:welcome.php")

?>


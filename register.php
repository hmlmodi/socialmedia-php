<?php
include("./config.php");

$name = $_POST["username"];
$password = $_POST["password"];
$pass = md5($password);
$query = "SELECT * FROM `login` WHERE userName ='$name'";
$result = mysqli_query($connection, $query);
$num = mysqli_num_rows($result);
if ($num == 1) {
    echo "username already used";
} else {
    $reg = "INSERT INTO `login`(`userName`, `password`) VALUES ('$name','$pass')";
    mysqli_query($connection, $reg);
    echo "Registration succesfull";
    header("location:user_details.php");
}

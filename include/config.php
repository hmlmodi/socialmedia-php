<?php
session_start();

$servername = "localhost";
$username = "loginpage";
$password = "";
$dbname = "socialmedia_db";

$connection = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($connection, $dbname);

?>







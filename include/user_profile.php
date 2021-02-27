<?php
$floginid = $_SESSION['floginid1'];
// var_dump($floginid);
$selectquery = "SELECT `firstName`, `lastName`, `phoneNumber`, `dob`, `gender` FROM `user` WHERE loginId='$floginid'";
$result = mysqli_query($connection, $selectquery);
$row = mysqli_fetch_array($result);
?>
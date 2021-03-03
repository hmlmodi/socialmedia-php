<?php
$loginid = $_POST['loginid'];
// var_dump($loginid);
$selectquery = "SELECT `firstName`, `lastName` FROM `user` WHERE loginId='$loginid'";
$result = mysqli_query($connection, $selectquery);
$row = mysqli_fetch_array($result);
$_SESSION['loginid'] = $loginid;
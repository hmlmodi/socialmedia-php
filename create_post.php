<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>

    <title>Create profile </title>

</head>
<?php include('navbar.php'); ?>

<body>



    <div class="container" align="center">
        <form action="" id="signform" method="POST">
            <label for="profileimage">Select your Image</label><br>
            <input type="file" name="profileimage" id="profileImg"><br>
            <label for="bio">Bio</label><br>
            <textarea name="bio" id="bio" cols="30" rows="5"></textarea><br>
           <button class="button" name = "submit"type="submit">Submit</button>
        </form>



</body>

</html>
<?php
if(isset($_POST["submit"])){
include("config.php");


$profileimage = $_POST["profileimage"];
$bio = $_POST["bio"];



$query = "INSERT INTO `post`(`image`, `imageBio`) VALUES ('$profileimage','$bio')";

$result = mysqli_query($connection, $query);
}
?>
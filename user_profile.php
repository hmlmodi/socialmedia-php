<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>
    <title>User profile</title>
</head>
<?php include('navbar.php'); ?>
<?php include('config.php'); ?>
<?php include("./backend_user_profile.php"); ?>

<!-- ----------------------------------------------------------------------------------------------------- -->

<body>
    <div class="container" align="center">
        <form action="./insert.php" id="signform" method="POST">
            <label for="firstname">Firstname:<td><?php echo $row["firstName"]; ?></td></label><br>
            <label for="lastname">Lastname:<td><?php echo $row["lastName"]; ?></td></label><br>
            <label for="Phonenumber">Phonenumber:<td><?php echo $row["phoneNumber"]; ?></td></label><br>
            <label for="dob">Date of Birth:<td><?php echo $row["dob"]; ?></td></label><br>
            <label for="Gender">Gender:<td><?php echo $row["gender"]; ?></td></label><br>

        </form>
        <a href="">your photos</a><br>
        <a href="">follower</a><br>
        <a href="">setting</a><br>




</body>

</html>
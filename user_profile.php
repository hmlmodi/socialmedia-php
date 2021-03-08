<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include./head.php'); ?>
    <title>User profile</title>
</head>
<?php include("include./navbar.php"); ?>
<?php include("include./config.php"); ?>
<?php include("include./user_profile.php"); ?>

<!-- ----------------------------------------------------------------------------------------------------- -->

<body>
    <!-- <div class="container" align="center"> -->
    <div class="profilecontainer">
        <div class="col">
            <a href="./user_post.php"><button type="button" class="btn btn-dark">Your post</button></a>
            <a href="./user_follower.php"><button type="button" class="btn btn-dark">follower</button></a>
            <!-- <a href="./edit_profile.php"><button type="button" class="btn btn-dark">setting</button></a> -->
            <a href="./edit_profile.php"><button type="button" class="btn btn-dark">Edit profile</button></a>
        </div>
        <table class="table border">
            <th>Profile</th>
            <th>Info</th>
            <form action="./insert.php" id="signform" method="POST">
                <tr>
                    <td>
                        <label for="firstname">Firstname:
                    <td><?php echo $row["firstName"]; ?></td></label>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="lastname">Lastname:
                    <td><?php echo $row["lastName"]; ?></td></label>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Phonenumber">Phonenumber:
                    <td><?php echo $row["phoneNumber"]; ?></td></label>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">Date of Birth:
                    <td><?php echo $row["dob"]; ?></td></label>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Gender">Gender:
                    <td><?php echo $row["gender"]; ?></td></label>

                    </td>
                </tr>
            </form>

        </table>
    </div>



</body>

</html>
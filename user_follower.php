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
        <a href="./user_post.php"><button type="button" class="btn btn-dark">Your post</button></a>
        <a href="./user_follower.php"><button type="button" class="btn btn-dark">follower</button></a>
        <!-- <a href="./edit_profile.php"><button type="button" class="btn btn-dark">setting</button></a> -->
        <a href="./edit_profile.php"><button type="button" class="btn btn-dark">Edit profile</button></a>

        <table class="table border">
            <th>Profile</th>


            <?php
                $floginid = $_SESSION['floginid1'];

                $valid = "SELECT `followerId` FROM `follower` WHERE userId='$floginid'";
                $listquery = mysqli_query($connection, $valid);
                //  var_dump($row);

                while ($num = mysqli_fetch_array($listquery, MYSQLI_ASSOC)) {
                    $fol = $num["followerId"];
                    // var_dump($num);
                    $postquery = "SELECT `userName` FROM `login` WHERE id='$fol'";
                    $result = mysqli_query($connection, $postquery);


                ?> 


                    <?php while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td>
                                <><?php 
                                $select = $row["userName"];
                                $fquery = "SELECT 'userName' FROM `login` WHERE userName ='$select'";"?><br>

                                Bio:<br>
                                
                            </td>
                        </tr>
                <?php

                    }
                } ?>




































            <!-- --------------------------------------------------- -->


            <?php

            $floginid = $_SESSION['floginid1'];
            $valid = "SELECT `followerId` FROM `follower` WHERE userId='$floginid'";
            $listquery = mysqli_query($connection, $valid);
            //  var_dump($row);

            while ($num = mysqli_fetch_array($listquery, MYSQLI_ASSOC)) {
                $fol = $num["followerId"];
                $postquery = "SELECT `userName` FROM `login` WHERE id='$fol'";
                $result = mysqli_query($connection, $postquery);
                var_dump($result);
            
// $result = mysqli_query($connection, $friendsquery);

            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            
            ?>
                <tr>
                    <td>
                        <div><?php echo $row["userName"]; ?>
                        </div>
                        <div> <?php
                                $_SESSION['row'] = $row;
                                $select = $row["userName"];
                                $listquery = "SELECT `id` FROM `login` WHERE userName ='$select'";
                                $listqueryimp = mysqli_query($connection, $listquery);
                                $row = $listqueryimp->fetch_assoc();
                                $frdprofileid = $row["id"];
                                // $_SESSION['floginid1'] = $floginid;
                                ?></div>
                    </td>
                    <td>
                        <form action='friends_profile.php' method='post'>

                            <input type="hidden" name='loginid' value='<?php echo $frdprofileid ?>' />
                            <button class="btn btn-primary" type="submit">View profile</button>
                        </form>

                    </td>
                </tr>
            <?php
            }
            } ?>

        </table>
    </div>


</body>

</html>
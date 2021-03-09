<?php
include("include./config.php");
include("include./user_friends_profile.php");
// include("./follow.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('include./head.php'); ?>
    <script src="jquery.js"></script>
    <title>friends pofile</title>

</head>
<?php include('include./navbar.php'); ?>


<body>
    <div class="profilecontainer" id="follower">
        <table class="table table-bordered">
            <thead>
                <th>Profile</th>
                <div class="container" align="center">
                    <!-- <form action="" id="followerform" method="POST"> -->
                    <tr>
                        <td>
                            <label for="firstname">Firstname:
                                <?php echo $row["firstName"]; ?></label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="lastname">Lastname:
                                <?php echo $row["lastName"]; ?></label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            $floginid = $_SESSION['floginid1'];
                            // $_SESSION['loginid1'] = $loginid;
                            $likequery = "SELECT  `followerId`, `userId` FROM follower WHERE followerId='$loginid' and userId ='$floginid'";
                            $like = mysqli_query($connection, $likequery);
                            if (mysqli_num_rows($like) == 1) {
                            ?>
                                <button class="unfollow" id="<?php echo $loginid ?>" name="follow">unfollow</button>
                                <button class="follow hide " id="<?php echo $loginid ?>" name="follow">follow</button><br>
                            <?php
                            } else { ?>
                                <button class="follow" id="<?php echo $loginid ?>" name="unfollow">follow</button>
                                <button class="unfollow hide " id="<?php echo $loginid ?>" name="unfollow">unfollow</button><br>
                            <?php   } ?>

                            <!-- <button type="button" name="follow_button" id="follow_button" class="btn btn-success">follow</button> -->
                        </td>
                    </tr>
                    </form>

            </thead>
        </table>


    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".follow").on("click", function(e) {
                var followerid = $(this).attr('id')
                $post = $(this);
                console.log("hello");
                $.ajax({
                    url: "./follow.php",
                    type: "post",
                    data: {
                        'follow': 1,
                        'followerid': followerid
                    },
                    success: function(response) {
                        $post.addClass('hide'),
                            $post.siblings().removeClass('hide');

                    }
                })
            })
        });

        $(document).ready(function() {
            $(".unfollow").on("click", function(e) {
                var followerid = $(this).attr('id')
                $post = $(this);
                $.ajax({
                    url: "./follow.php",
                    type: "post",
                    data: {
                        'unfollow': 1,
                        'followerid': followerid
                    },
                    success: function(response) {
                        $post.addClass('hide');
                        $post.siblings().removeClass('hide');
                    }
                })
            })
        });
    </script>
</body>
</html>
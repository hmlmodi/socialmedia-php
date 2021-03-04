<?php
include("include./config.php");
include("include./user_friends_profile.php");
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
                    <form action="follow.php" id="followerform" method="POST">
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
                                <button type="button" name="follow_button" id="follow_button" class="btn btn-success">follow</button>
                            </td>
                        </tr>
                    </form>

            </thead>
        </table>
        

    </div>

</body>


</html>
<script type="text/javascript">
    $(document).ready(function() {
        $("#follow_button").on("click", function(e) {
            $.ajax({
                url: "follow.php",
                type: "post",
                success: function(data) {
                    $("#followerform").html(data);

                }
            })
        })
    });
    
    
</script>









































<!-- function follow_unfollow() {
    var action = "follow_unfollow";
    $.ajax({
        url = "follow.php",
        method: "post",
        data: {
            action: action
        },
        success: function(data) {
            $("#fetch_data").html(data);
        }
    });
}
$(document).on("click",".action_button",function()
{   
var loginid = $(this).data($loginid);
var action = $(this).data("action");

$.ajax({
        url = "follow.php",
        method: "post",
        data: {
           loginid:$loginid ,action: action
        },
        success: function(data) {
            follow_unfollow();
        }


    }
});


});   -->
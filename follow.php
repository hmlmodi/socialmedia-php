<?php
include("include./config.php");
$loginid = $_SESSION['loginid'];
$floginid = $_SESSION['floginid1'];
$valid = "SELECT * FROM `follower` WHERE userId='$floginid' and followerId='$loginid'";
$result = mysqli_query($connection, $valid);
$num = mysqli_num_rows($result);
if ($num == 1) {
    echo "already followed";
} else {
    $follow = "INSERT INTO `follower`(`userId`, `followerId`) VALUES ('$floginid','$loginid')";
    $query = mysqli_query($connection, $follow);

}
?>




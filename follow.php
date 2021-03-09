<?php
include("include./config.php");
// $loginid = $_SESSION['loginid'];
$floginid = $_SESSION['floginid1'];
// var_dump($loginid);
// $postid = $_POST['followerid'];
// var_dump($postid);

// $valid = "SELECT * FROM `follower` WHERE userId='$floginid' and followerId='$loginid'";
// $result = mysqli_query($connection, $valid);
// $num = mysqli_num_rows($result);
if (isset($_POST['follow'])  && $postid = $_POST['followerid']) {
    echo "already followed";
    // } else {
    $follow = "INSERT INTO `follower`(`userId`, `followerId`) VALUES ('$floginid','$postid')";
    $query = mysqli_query($connection, $follow);
    exit();
}

if (isset($_POST['unfollow'])  && $postid = $_POST['followerid']) {
    // echo "already followed";
    // } else {
    $follow = "DELETE FROM `follower` WHERE userId='$floginid' AND followerId='$postid'";
    $query = mysqli_query($connection, $follow);

    exit();
}

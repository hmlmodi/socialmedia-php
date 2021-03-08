
<?php
// include("include./config.php");
$floginid = $_SESSION['floginid1'];

if (isset($_POST['liked']) && !empty($_POST['liked'] && $postid = $_POST['postid'])) {
    

    $addlike = "INSERT INTO `post_likes`(`postId`, `userId`) VALUES ($postid,$floginid)";

    $addquery = mysqli_query($connection, $addlike);
    $countquery = "SELECT COUNT(1) FROM post_likes";
    $count = mysqli_query($connection, $countquery);
    $cnt = mysqli_num_rows($count);
    echo $cnt;
    echo "liked";
    exit();
}

if(isset($_POST['unliked']) && !empty($_POST['unliked'] && $postid = $_POST['postid'])) {
    echo "unliked";
    

    $unlike = "DELETE FROM `post_likes` where postId='$postid' and userId='$floginid';";

    $unlikequery = mysqli_query($connection, $unlike);
    $countquery = "SELECT COUNT(1) FROM post_likes";
    $count = mysqli_query($connection, $countquery);
    $cnt = mysqli_num_rows($count);
    echo $cnt;
    exit();
}




?>
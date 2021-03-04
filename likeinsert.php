
<?php
if (isset($_POST['liked']) && !empty($_POST['liked'])) {
    $addlike = "INSERT INTO `post_likes`(`postId`, `userId`) VALUES ($postid,$floginid)";

    $addquery = mysqli_query($connection, $addlike);
    $countquery = "SELECT COUNT(1) FROM post_likes";
    $count = mysqli_query($connection, $countquery);
    $cnt = mysqli_num_rows($count);
     echo $cnt;
    echo "hello0";
    }
 ?>
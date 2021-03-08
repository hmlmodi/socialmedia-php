<?php
$floginid = $_SESSION['floginid1'];

$valid = "SELECT `followerId` FROM `follower` WHERE userId='$floginid'";
$listquery = mysqli_query($connection, $valid);
//  var_dump($row);

while ($num = mysqli_fetch_array($listquery, MYSQLI_ASSOC)) {
    $fol = $num["followerId"];
    // var_dump($num);
    $postquery = "SELECT `id`, `image`, `imageBio` FROM `post` WHERE  userId='$fol'";
    $result = mysqli_query($connection, $postquery);


?>


    <?php while ($row = mysqli_fetch_array($result)) {
        $postid = $row["id"];
        $_SESSION['postid'] = $postid;
    ?>
        <tr>
            <td>
                <img src="images/<?php echo $row['image'] ?>" width="300"><br>
                <?php $likequery = "SELECT `id`, `postId`, `userId` FROM post_likes WHERE postId ='$postid' and userId ='$floginid'";
                $like = mysqli_query($connection, $likequery);
                // var_dump($like);
                if (!mysqli_num_rows($like) == 1) {
                ?>
                    <button class="like fa fa-thumbs-o-up btn-danger "  id="postlike" name="postlike">like</button>
                <?php
                } else { ?>


                    <button class="like fa fa-thumbs-o-up btn-danger " id="postunlike" name="postunlike">unlike</button>
                <?php   } ?>
                <a href="commentbox">comment</a>
                <input name="commentbox" type="text">
                Bio:
                <?php
                echo

                    $row['imageBio'] ?>

            </td>
        </tr>
<?php


    }
}

?>


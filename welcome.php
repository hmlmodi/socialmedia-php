<?php
include("include./config.php");
include("likeinsert.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <script ></script> -->
    <?php include('include./head.php'); ?>
    <script src="jquery.js"></script>
    <title>Homepage</title>
</head>
<!-- <h1 align="center">Welcome</h1> -->
<?php include('include./navbar.php'); ?>

<body>
    <div class="profilecontainer">
        <table id="tablelike" name="tablelike" class="table table-bordered">
            <thead>
                <th>Profile</th>
            </thead>
            <tbody>
                <!--  include("include./newsfeed.php")  -->

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
                                if (!mysqli_num_rows($like) == 1) {
                                ?>
                                    <button class="unlike  btn-danger " id="<?php echo $postid ?>" name="postlike">unlike</button>
                                    <button class="like  btn-danger  hide " id="<?php echo $postid ?>" name="postlike">like</button><br>
                                <?php
                                } else { ?>
                                    <button class="like  btn-danger " id="<?php echo $postid ?>" name="postunlike">like</button>
                                    <button class="unlike  btn-danger hide " id="<?php echo $postid ?>" name="postunlike">unlike</button><br>
                                <?php   } ?>
                                <input class="hidden" name="commentbox" type="text" placeholder="Add a comment">
                                <button class="btn btn-secondary btn-sm comment" type="submit">Post comment</button> <br>
                                Bio:
                        <?php
                        echo  $row['imageBio'];
                    }
                } ?>

                            </td>
                        </tr>
    </div>

    <script type="text/javascript">
        console.log("hello");
        $(document).ready(function() {
            $(".like").toggleClass
            // document.getElementById("")
            $(".like").on("click", function(e) {
                var postid = $(this).attr('id')
                $post = $(this);
                $.ajax({
                    url: "./welcome.php",
                    type: "post",
                    data: {
                        'liked': 1,
                        'postid': postid
                    },
                    success: function(response) {
                        $post.addClass('hide');
                        $post.siblings().removeClass('hide');
                    }
                })
            })
        });
        $(document).ready(function() {
            // document.getElementById("")
            $(".unlike").on("click", function(e) {
                var postid = $(this).attr('id')
                $post = $(this);
                $.ajax({
                    url: "./welcome.php",
                    type: "post",
                    data: {
                        'unliked': 1,
                        'postid': postid
                    },
                    success: function(response) {
                        // $post.parent().find('span.likes_count').text(response + " likes");
                        $post.addClass('hide');
                        $post.siblings().removeClass('hide');
                        //  console.log("data",data);
                        //  $("#").html(data);

                    }
                })
            })
        });
        // $(document).ready(function() {
        //     $(".comment").on("click", funtioen(e)) {
        //         var postid = $(this).attr('id')
        //         $post = $(this);
        //         $.ajax({
        //             url: "./welcom.php",
        //             type: post,
        //             data: {
        //                 "comment": 1,
        //                 "postid": postid
        //             },
        //             success: function(response) {}
        //         })
        //     }



        // });
    </script>


</body>

</html>

<?php



?>

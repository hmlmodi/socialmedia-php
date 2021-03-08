
<?php 
	// connect to the database
	$con = mysqli_connect('localhost', 'root', '', 'like');

	if (isset($_POST['liked'])) {
		$postid = $_POST['postid'];
		$result = mysqli_query($con, "SELECT * FROM posts WHERE id=$postid");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($con, "INSERT INTO likes (userid, postid) VALUES (1, $postid)");
		mysqli_query($con, "UPDATE posts SET likes=$n+1 WHERE id=$postid");

		echo $n+1;
		exit();
	}
	if (isset($_POST['unliked'])) {
		$postid = $_POST['postid'];
		$result = mysqli_query($con, "SELECT * FROM posts WHERE id=$postid");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($con, "DELETE FROM likes WHERE postid=$postid AND userid=1");
		mysqli_query($con, "UPDATE posts SET likes=$n-1 WHERE id=$postid");
		
		echo $n-1;
		exit();
	}

	// Retrieve posts from the database
	$posts = mysqli_query($con, "SELECT * FROM posts");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Like and unlike system</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<!-- display posts gotten from the database  -->
		<?php while ($row = mysqli_fetch_array($posts)) { ?>

			<div class="post">
				<?php echo $row['text']; ?>

				<div style="padding: 2px; margin-top: 5px;">
				<?php 
					// determine if user has already liked this post
					$results = mysqli_query($con, "SELECT * FROM likes WHERE userid=1 AND postid=".$row['id']."");

					if (mysqli_num_rows($results) == 1 ): ?>
						<!-- user already likes post -->
						<span class="unlike fa fa-thumbs-up" data-id="<?php echo $row['id']; ?>"></span> 
						<span class="like hide fa fa-thumbs-o-up" data-id="<?php echo $row['id']; ?>"></span> 
					<?php else: ?>
						<!-- user has not yet liked post -->
						<span class="like fa fa-thumbs-o-up" data-id="<?php echo $row['id']; ?>"></span> 
						<span class="unlike hide fa fa-thumbs-up" data-id="<?php echo $row['id']; ?>"></span> 
					<?php endif ?>

					<span class="likes_count"><?php echo $row['likes']; ?> likes</span>
				</div>
			</div>

		<?php } ?>


<!-- Add Jquery to page -->
<script src="jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('.like').on('click', function(){
			var postid = $(this).data('id');
			    $post = $(this);
			$.ajax({
				url: 'index.php',
				type: 'post',
				data: {
					'liked': 1,
					'postid': postid
				},
				success: function(response){
					$post.parent().find('span.likes_count').text(response + " likes");
					$post.addClass('hide');
					$post.siblings().removeClass('hide');
				}
			});
		});

		// when the user clicks on unlike
		
		
		
	});
</script>
</body>
</html>







<!-- ------------------------------------------- -->
<div class="container-fluid">
     <div class="row">
       <?php
       $qry = "select * from `post_list`";
       $res = mysqli_query($con, $qry);
       if(mysqli_num_rows($res) > 0) {
         while($row = mysqli_fetch_object($res)) {
           $likes = array_filter(explode(',', $row->likes), function($value) { return $value !== ''; });
           $dislikes = array_filter(explode(',', $row->dislikes), function($value) { return $value !== ''; });
         ?>
           <div class="col-md-3">
             <div class="mtb-post">
               <form action="" method="post" id="<?php echo $row->id;?>">
                 <input type="hidden" name="post_id" id="post_id" value="<?php echo $row->id;?>">
                 <img class="img-fluid" src="images/<?php echo $row->image;?>">
                 <div class="post-info">
                   <div class="caption"><a href="<?php echo $row->link;?>" target="_blank"><h1><?php echo $row->title;?><h1></a></div>
                   <div class="excerpt"><?php echo $row->excerpt;?></div>
                   <div class="like-dislike">
                     <div class="like"><div class="counter"><?php echo sizeof($likes);?></div></div>
                     <div class="dislike"><div class="counter"><?php echo sizeof($dislikes);?></div></div>
                     <div class="clearfix"></div>
                   </div>
                 </div>
                 <div class="clearfix"></div>
               </form>
             </div>
           </div>
         <?php
         }
       }
       ?>
     </div>
     </div>
jQuery and Ajax – Like Dislike R








<!-- ********************************* -->
<script>
$(document).ready(function() {
     $('.like, .dislike').click(function() {
       var action = $(this).attr('button');
       var post_id = $(this).parent().parent().parent().find("#post_id").val();
       $.ajax({
         url: 'check-session.php',
         method: 'post',
         success: function(data){
           if(data != '') {
             $.ajax({
               url: 'update-choice.php',
               method: 'post',
               data:{action:action, post_id:post_id},
               success: function(resp){
                 resp = $.trim(resp);
                 if(resp != '') {
                   resp = resp.split('|');
                   $('form#'+post_id+' .like .counter').html(resp[0]);
                   $('form#'+post_id+' .dislike .counter').html(resp[1]);
                 }
               }
             });
           } else {
             $('#popUpWindow').modal('show');
           }
         },
       });
     });
});
</script>





<!-- *////////////-**--/-////////////////////////////////////////////////////////////////
 -->
 <?php session_start(); ?>
<?php include('db.php');?>
<?php
if(isset($_POST) && !empty($_POST)) {
  $action = trim($_POST['action']);
  $post_id = trim($_POST['post_id']);
  if($action != "" && $post_id != "") {
    try {
      $qry = "select * from `post_list` where `id`=$post_id";
      $res = mysqli_query($con, $qry);
      if(mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_object($res);
        $likers = array_filter(explode(',', $row->likes), function($value) { return $value !== ''; });
        $dislikers = array_filter(explode(',', $row->dislikes), function($value) { return $value !== ''; });
        $like_count = count($likers);
        $dislike_count = count($dislikers);
        if($action == 'like') {
          if(!in_array($_SESSION['sess_user_id'], $likers)) {
            array_push($likers, $_SESSION['sess_user_id']);
            $like_count += 1;
          }
          $index = array_search(''.$_SESSION['sess_user_id'].'', $dislikers);
          if($index !== false) {
            unset($dislikers[$index]);
            $dislike_count -= 1;
          }
        } else if($action == 'dislike') {
          if(!in_array($_SESSION['sess_user_id'], $dislikers)) {
            array_push($dislikers, $_SESSION['sess_user_id']);
            $dislike_count += 1;
          }
          $index = array_search($_SESSION['sess_user_id'], $likers);
          if($index !== false) {
            unset($likers[$index]);
            $like_count -= 1;
          }          
        }
        $qry = "update `post_list` set `likes`='".implode(',', $likers)."', `dislikes`='".implode(',', $dislikers)."' where `id`=$post_id";
        mysqli_query($con, $qry);
        if(mysqli_affected_rows($con) == 1) {
          echo $like_count.'|'.$dislike_count;
        }
      }
    } catch (Exception $e) {
      echo "Error : " .$e->getMessage();
    }
  }
}
?>
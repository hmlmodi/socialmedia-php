<?php
include("include./config.php");
include("likeinsert.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
<!-- <script ></script> -->
	<?php include('include./head.php'); ?>
	
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
              <?php include("include./newsfeed.php")?> 
	</div>

</body>
</html>
<script type="text/javascript" src="jquery.js">
	    $(document).ready(function() {
        $("#postlike").on("click", function(e) {
            $.ajax({
                url: "welcome.php",
				type: "post",
				data:{'liked': 1},
                success: function(data) {
                     $("#").html(data);

                }
            })
        })
    });
    

</script>


<?php
include("include./config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('include./head.php'); ?>

    <title>Homepage</title>

</head>
<!-- <h1 align="center">Welcome</h1> -->
<?php include('include./navbar.php'); ?>


<body>
    <div class="profilecontainer">
        <table class="table table-bordered">
            <thead>
                <th>Profile</th>
            </thead>
            <tbody>
              <?php include("include./newsfeed.php")?> 
    </div>
</body>


</html>
<?php
include("include./config.php");

$floginid = $_SESSION['floginid1'];
$postquery = "SELECT `image`, `imageBio` FROM `post` WHERE userId=$floginid";
$result = mysqli_query($connection, $postquery);



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('include./head.php'); ?>

    <title>Your photos</title>

</head>
<?php include('include./navbar.php'); ?>


<body>
    <div class="profilecontainer">
        <table class="table table-bordered">
            <thead>
                <th>Profile</th>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td>
                            <img src="images/<?php echo $row['image'] ?>" width="300"><br>
                            Bio:<br>
                            <?php echo $row['imageBio'] ?>
                        </td>
                    </tr>
                <?php } ?>
    </div>
</body>


</html>
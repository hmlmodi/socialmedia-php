<?php
include("include./config.php");

$floginid = $_SESSION['floginid1'];
$postquery = "SELECT `image`, `imageBio` FROM `post` WHERE userId=$floginid";
$result = mysqli_query($connection, $postquery);
// $user = mysqli_fetch_all($result,MYSQLI_ASSOC);
$user = $result->fetch_assoc();

// var_dump($user);
//    echo $row['photo'];
$xml = $user['image'];
//  var_dump($xml);
$target = "images/" . $user['image'];
// echo $target;



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('include./head.php'); ?>

    <title>Create profile </title>

</head>
<?php include('include./navbar.php'); ?>


<body>
    <?php foreach ($user as $user) : ?>

        <img src="<?php echo $target; ?>" />
    <?php endforeach ?>

</body>


</html>
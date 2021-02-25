<?php
include("config.php");
$floginid = $_SESSION['floginid1'];
$postquery = "SELECT `image`, `imageBio` FROM `post` WHERE userId=$floginid";
$result=mysqli_query($connection,$postquery);
// $user = mysqli_fetch_all($result,MYSQLI_ASSOC);
$user= $result->fetch_assoc();

// var_dump($user);
//    echo $row['photo'];
$xml= $user['image'];
 var_dump($xml);

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?php include('head.php'); ?>
        
        <title>Create profile </title>
        
    </head>
    <?php include('navbar.php'); ?>
    
    
    <body>
    <?php foreach($user as $user): ?> 
        
        <img src="images/<?php echo ($user['image']); ?>" />
     <?php endforeach ?> 
    
    </body>
    
    
    </html>
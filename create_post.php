<!-- --------------------------------------------------------------------------------
 -->
<?php
include("config.php");

if (isset($_POST['upload'])) {

    $bio = $_POST["bio"];
    $profileimagename = time() . "_" . $_FILES["profileimage"]["name"];
    $target = "images/" . $profileimagename;
    $floginid = $_SESSION['floginid1'];

    if (move_uploaded_file($_FILES["profileimage"]["tmp_name"], $target)) {

        $query = "INSERT INTO `post`(`userId`,`image`, `imageBio`) VALUES ('$floginid','$profileimagename','$bio')";
        mysqli_query($connection, $query);

        
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>

    <title>Create profile </title>

</head>
<?php include('navbar.php'); ?>

<body>
    <div class="container" align="center">
        <form action="" id="signform" enctype="multipart/form-data" method="POST">
            <h1>
                <div class="text-center">Create Post</div>
            </h1>
            <img src="images/placeholder.jpg" onclick="triggerclick()" id="profiledisplay">
            <div class="text-center">Select your photo</div>
            <input type="file" name="profileimage" id="profileimage" onchange="displayImage(this)" style="display: none;"><br>
            <label for="bio">Bio</label><br>
            <textarea name="bio" id="bio" cols="30" rows="5"></textarea><br>
            <button class="button" name="upload" type="submit">upload</button>
        </form>
        <!-- <img src="C:\Users\Hemil Modi\Downloads\123.jpg" alt="HTML5 Icon" style="width:128px;height:128px"> -->
        <script src="scripts.js"></script>
</body>


</html>
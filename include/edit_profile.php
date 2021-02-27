<?php
if (isset($_POST["submit"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phonenumber = $_POST["phonenumber"];
    $dateofbirth = $_POST["dateofbirth"];
    $gender = $_POST["gender"];


    // var_dump($floginid);
    $floginid = $_SESSION['floginid1'];
    $updatequery = "UPDATE `user` SET `firstName`='$firstname',`lastName`='$lastname',`phoneNumber`='$phonenumber',`dob`='$dateofbirth',`gender`='$gender' WHERE loginId='$floginid'";
    $result = mysqli_query($connection, $updatequery);
    header("location:user_profile.php");
}
?>
<?php
if (isset($_POST["submit"])) {
    $name = $_POST["username"];
    $password = $_POST["password"];
    $error1 = "Please enter correct username or password!";
    $pass = md5($password);
    $query = "SELECT * FROM login WHERE userName = '$name' AND password = '$pass'";
    $result = mysqli_query($connection, $query);
    $num = mysqli_num_rows($result);
    echo $num;
    if (!$num == 1) {
		$_SESSION["error1"] = $error1;
        header("location:login.php");
    
    } else {


        $idquery = "SELECT `id` FROM `login` WHERE userName ='$name'&& password='$pass'";
        $hml = mysqli_query($connection, $idquery);
        $row = $hml->fetch_assoc();
        $floginid = implode(',', $row);
        // var_dump($floginid);
        $_SESSION['floginid1'] = $floginid;
        header("location:welcome.php");
    }
}

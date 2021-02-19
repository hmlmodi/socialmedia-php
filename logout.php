<?php
        session_start();
        session_destroy();


        header("location:login.php");



?>















<!-- <?php
			session_start();
			if (isset($_SESSION["user_taken"]))
				echo $_SESSION["user_taken"];
            ?>
            













            $error = '<p> user name already taken</p>';
    $_SESSION["username"] = $error;
    header("location:signup.php"); -->
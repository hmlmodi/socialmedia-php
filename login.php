<!-- code for backend -->
<?php
include("include./config.php");
include("include./login.php");
?>


<!-- ----------------------------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("include./head.php"); ?>
</head>

<body>
	<div class="container" align="center">
		<h1>login</h1>
		<div style="color:red">
			<?php
			if (isset($_SESSION["error1"])) {
				$error1 = $_SESSION["error1"];
				echo "<span>$error1</span>";
			}
			?></div>
		<form action="" id="loginform" method="POST">
			<label for="Email">Email</label><br>
			<input type="email" name="username" placeholder="Enter Email" class="inputbox"><br>
			<label for="password">Password</label><br>
			<input type="password" name="password" class="inputbox"><br>
			<a href="">Forgot password?</a><br>

			<button class="button" name="submit" type="submit">Submit</button>
			<a href="./signup.php" title="Go to signup page">New user?Signup</a>
		</form>
	</div>
</body>

</html>
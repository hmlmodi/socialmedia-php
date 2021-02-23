<!-- code for backend -->
<?php
include("./config.php");
include("./backend_signup.php");
?>

<!----------------------------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('head.php'); ?>
</head>

<body>
	<div class="container" align="center">
		<h1>Sign up</h1>
		<div style="color:red">
			<?php
			if (isset($_SESSION["error"])) {
				$error = $_SESSION["error"];
				echo "<span>$error</span>";
			}
			?></div>
		<form action="" id="signform" method="POST">
			<label for="Email">Email</label><br>
			<input type="email" name="username" placeholder="Enter Email" class="inputbox"><br>
			<label for="password">Password</label><br>
			<input type="password" name="password" class="inputbox"><br>
			<button class="button" type="submit" name="submit">Submit</button>
		</form>
	</div>
</body>

</html>
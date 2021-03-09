<!-- code for backend -->
<?php
include("include./config.php");
include("include./signup.php");
?>

<!----------------------------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("include./head.php"); ?>
</head>

<body>
	<div class="container" align="center"  style="margin-top: 100px;">
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
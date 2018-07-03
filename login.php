<?php
include("loginserv.php");// Include loginserv for checking username and password
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css"></link>
</head>
<body>
	<div class="container">
	<img src= "image14.png">
	<form>
	<div class="form-input">
	<input type="text" name="username"
	placeholder="Enter Username">
	</div>
	<div class="form-input">
	<input type="password" name="password"
	placeholder="Enter Password">
	</div>
	<input type="submit" name="submit"
	value="LOGIN" class="btn-login"><br>
	<a href="#">Forget Password?</a>
<p>
</p>
	<a href id="yvvv"="#">Create a new Account?</a>
	</form>
	</div>
<!-- Error Message -->
<span><?php echo $error; ?></span>

</body>
</html>
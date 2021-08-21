<?php
include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Registartion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>REGISTRATION</h2>
	</div>
	<form method="post" action="index.php">
		<?php include('errors.php'); ?> 
		<div class = "input-group">
			<label>User Name</label>
			<input type="text" name="username" value="<?php echo $username; ?>" >
		</div>
		<div class = "input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class = "input-group">
			<label>Password</label>
			<input type="password" name="password_1" >
		</div>
		<div class = "input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2" >
		</div>
		<div class = "input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already have an account? <a href="login.php">Sign In</a>
		</p>
	</form>


</body>
</html>
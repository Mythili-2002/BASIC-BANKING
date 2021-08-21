<?php 
include('server.php'); 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>LOGIN</h2>
	</div>
	<form method="post" action="login.php">
		<?php include('errors.php'); ?> 
		<div class = "input-group">
			<label>User Name</label>
			<input type="text" name="username" >
		</div>
		<div class = "input-group">
			<label>Password</label>
			<input type="password" name="password" >
		<div class = "input-group">
			<button type="submit" name="login" class="btn">LOG IN</button>
		</div>
		<p>
			Not have an account? <a href="index.php">Sign Up</a>
		</p>
	</form>


</body>
</html>
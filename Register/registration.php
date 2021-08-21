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
	<form method="post" action="summa.php">
		<div class = "input-group">
			<label>User Name</label>
			<input type="text" name="username" value="" placeholder="username" required="">
		</div>
		<div class = "input-group">
			<label>Email</label>
			<input type="text" name="email" value="" placeholder="email" required="">
		</div>
		<div class = "input-group">
			<label>Password</label>
			<input type="password" name="password_1" required="">
		</div>
		<div class = "input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2" required="" >
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
<?php
     session_start();
     $username="";
     $email ="";
     $db = mysqli_connect('localhost','root','myth@123','register');
     if(isset($_POST['register']))
     {
     	$username = mysqli_real_escape_string($db,$_POST['username']);
     	$email = mysqli_real_escape_string($db,$_POST['email']);
     	$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
     	$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
     	if($password_1 != $password_2)
     	{
     		echo '<script>alert("Incorrect Password")</script>';
     	}
     	$password = md5($password_1);
     	$sql = "INSERT INTO users (username, email, password ) VALUES ('$username', '$email', '$password')";
     	mysqli_query($db,$sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in successfully";
        header("Refresh:0;url=home.php");
     
     }
?>
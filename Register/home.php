<?php
include('server.php');
    if (empty($_SESSION['username']))
    {
    	header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.content
		{
			width: 30%;
			margin: 0px auto;
			padding: 20px;
			border: 1px solid white;
			background: steelblue;
			border-radius: 0px 0px 10px 10px;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>HOME PAGE</h2>
	</div>
	<div class="content" style="text-align : center; padding-top: 10px; padding-bottom: 10px;">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php 
					    echo $_SESSION['success'];
					    unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php if(isset($_SESSION["username"])): ?>
			

			<p> Welcome <strong> <?php echo $_SESSION['username']; ?></strong></p>
		
			<p><a href="home.php?logout='1'" style="color: red;">LOGOUT</a></p>
		<?php endif ?>

	</div>
	
</body>
</html>
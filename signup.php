<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="fire.png" sizes="16x16" type="image/png">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>signup.student</title>
	<script src="jquery-3.3.1.js"></script>
</head>
<body>
	<div class="box">
		<img src="avatar.png" class="avatar">
			<h1>Sign Up</h1>
				<form action="signup.php" method="post">
					<center>
                    <?php include('errors.php')?>
						<input type="text" name="name" placeholder="Your full name..." >
						<input type="password" name="password_1" placeholder="Password" >
						<input type="password" name="password_2" placeholder="Confirm Password" >
						<input type="text" name="telephone" placeholder="Telephone">
						<input type="text" name="email" placeholder="email@example.com">
						<input type="text" name="id" placeholder="National ID/Birth cert No" > <!-- we can also autogenerate -->			
						<input type="submit" name="register" value="Sign Up"><br>
						<a href="student_login.php">Already have an account?</a>
					</center>
				</form>
			</div>
</body>
</html>


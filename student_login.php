<?php include('server.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="fire.png" sizes="16x16" type="image/png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>login.student</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
	<div class="box">
		<img src="avatar.png" class="avatar">
			<h1>Log in</h1>
				<form action="student_login.php" method="POST">
					<p>Student Number</p>
					<input type="text" name="student_id" placeholder="Student ID" required="required">
					<p>Password</p>
					<input type="password" name="student_password" placeholder="Password" required="required"><br>
					<input type="submit" name="" value="Login"><br>
					<a href="#">Forgot password?</a>
					<a href="signup.php">Create an account?</a>
				</form>
	</div>
</body>
</html>
<?php
$db = mysqli_connect('localhost', 'root', '', 'uniassist');

if(isset($_POST['submit'])){
$student_id = $_POST['student_id'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE student_id='$student_id' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(!$row=mysqli_fetch_assoc($result)){
  die('Invalid Username or Password!<br><br>');
}
else{
  echo"Login Successful!<br><br>";
}

 header ("Location: student/viewprofile.php");}
?>
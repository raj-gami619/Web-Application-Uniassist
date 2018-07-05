

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="fire.png" sizes="16x16" type="image/png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>login.admin</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
	<div class="box">
		<img src="avatar.png" class="avatar">
			<h1>Log in</h1>
				<form action="admin_login.php" method="POST">
					<p>Identification Number</p>
					<input type="text" name="admin_id" placeholder="National ID" required="required">
					<p>Password</p>
					<input type="password" name="admin_password" placeholder="password" required="required"><br>
					<input type="submit" name="" value="Login"><br>
					<a href="#">Forgot password?</a>
				</form>
	</div>
</body>
</html>

<?php
$db = mysqli_connect('localhost', 'root', '', 'uniassist');
if(isset($_POST['submit'])){
$admin_id = $_POST['admin_id'];
$password = $_POST['admin_password'];

$sql = "SELECT * FROM admins WHERE admin_id='$admin_id' AND admin_password='$password'";
$result = mysqli_query($conn, $sql);
if(!$row=mysqli_fetch_assoc($result)){
die('Invalid Username or Password!<br><br>');
#echo "Invalid Username or Password!<br>";
}
else{
  echo"LOGGED IN WITH ADMIN PRIVILEGES!<br><br>";
}
  	  header('Location: addcollege.php');
}

?>
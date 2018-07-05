<?php
$name = "";
$telephone = "";
$email = "";
$id = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'uniassist');

if(isset($_POST['register'])){
		$name = mysql_real_escape_string($_POST['name']);
		$password_1 = mysql_real_escape_string($_POST['password_1']);
		$password_2 = mysql_real_escape_string($_POST['password_2']);
		$telephone = mysql_real_escape_string($_POST['telephone']);
		$email = mysql_real_escape_string($_POST['email']);
		$id = mysql_real_escape_string($_POST['id']);
		
		if(empty($name)){
			array_push($errors, "Name is required");
		}
		
		if(empty($telephone)){
			array_push($errors, "Telephone is required");
		}
		
		if(empty($email)){
			array_push($errors, "Email is required");
		}
		
		if(empty($id)){
			array_push($errors, "ID is required");
		}
		
		if($password_1 != $password_2){
			array_push($errors, "The two passwords do not match");	
		}
		
		if(count($errors) == 0){
			$password = md5($password_1);
			$sql = "INSERT INTO users (name, password, telephone, email, id) 
								VALUES($name, $password, $telephone, $email, $id)";
			mysqli_query($db, $sql);
			
			header("Location: login.php");
			}
	}
?>
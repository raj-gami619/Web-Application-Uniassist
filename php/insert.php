<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "masomo");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$first_name = $mysqli->real_escape_string($_REQUEST['f_name']);
$last_name = $mysqli->real_escape_string($_REQUEST['l_name']);
$password = $mysqli->real_escape_string($_REQUEST['password']);
$cpassword = $mysqli->real_escape_string($_REQUEST['c_password']);
$telephone = $mysqli->real_escape_string($_REQUEST['telephone']);
$username = $mysqli->real_escape_string($_REQUEST['user_name']);
$email = $mysqli->real_escape_string($_REQUEST['e_mail']);
$idno = $mysqli->real_escape_string($_REQUEST['numberof_id']);
$dob = $mysqli->real_escape_string($_REQUEST['date_of_birth']);
 
// attempt insert query execution
$sql = "INSERT INTO create_account (f_name, l_name, password, c_password, telephone, user_name, e_mail, numberof_id, date_of_birth) VALUES ('$first_name', '$last_name', '$password', '$cpassword', '$telephone', '$username', '$email', '$idno', '$dob',)";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>
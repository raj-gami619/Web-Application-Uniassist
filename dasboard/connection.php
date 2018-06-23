<?php
$connect = mysql_connect("localhost", "root", "", "dbname");
$number = count($_POST["name"]);

if($number > 1){
	for($i = 0; $i < number; $i++){
		if(trim($_POST["name"] [$i] ) != ''){
			$sql = "INSERT INTO tblname(name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i]."')";
				mysqli_query($connect, $sql);
		}
	}
	echo "Data Submited Successfully";
}else{
	echo "Enter Course";
}
?>
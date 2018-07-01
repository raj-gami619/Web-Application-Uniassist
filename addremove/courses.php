<?php
$connect = mysqli_connect("localhost","root","","course");
$number = count($_POST["course"]);
if($number > 1){
	for($i=0; $i<$number; $i++){
		if(trim($_POST["course"][$i]) !=''){
			$sql = "INSERT INTO courses(course_name) VALUES ('".mysqli_real_escape_string($connect, $_POST["course"][$i]."')";
			mysql_query($connect, $sql);
		}
	}
	echo "Course(s) added successfully";
}else{
	echo "Enter course(s)";
}
?>
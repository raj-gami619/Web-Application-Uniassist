<?php
$connect = new PDO("mysql:host=localhost;dbname=uniassist", "root", "");

function fill_unit_select_box($connect){
	$output = '';
	$query = "SELECT * FROM cutoff ORDER BY course_name ASC";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach ($result as $vrow) {
		$output .='option value="'.$row["course_name"].'">'.$row["course_name"].'</option>'; 
	}
	return $output;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>addcutoff.admin</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="fire.png" sizes="16x16" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<header>
		<div class="row">
			<ul class="main-nav">
				<li><a href="addcollege.php">ADD COLLEGE</a></li>
				<li class="active"><a href="cutoff.php">ADD CUTOFF</a></li>
				<li><a href="vcollege.php">VIEW COLLEGE</a></li>
				<li><a href="vstudent.php">VIEW STUDENT</a></li>
				<li><a href="feed.php">VIEW FEEDBACK</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
	</header>
	<div class="box">
		<h1>Add Cutoff Marks</h1>
			<form method="POST" id="insert_form">
			<div class="table-responsive">
				<table cellspacing="17px;" class="table table-bordered" id="item_table">
					<tr>
                    	<th>College Name</th>
						<th>Faculty</th>
						<th>Cutoff Points</th>
						<th>Course Name</th>
						<th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span>+</button></th>
					</tr>
				</table><br>
				<div align="center">
					<input type="submit" name="submit" class="btn btn-info" value="Submit">
				</div>
			</div>
		</form>
	</div>
</body>
</html>
<script>
	$(document). ready(function(){
		$(document).on('click', '.add', function(){
			var html = '';
			html +='<tr>';
			html += '<td><input type="text" name="college_name[]" class="form-control college_name" /></td>';
			html += '<td><input type="text" name="faculty[]" class="form-control faculty" /></td>';
			html += '<td><input type="text" name="cut_off[]" class="form-control cut_off" /></td>';
			html += '<td><input type="text" name="course_name[]" class="form-control course_name"/></td>';
			html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';

			$('#item_table').append(html);
		});

		$(document).on('click', '.remove', function(){
			$(this).closest('tr').remove();
		});
	});
</script>
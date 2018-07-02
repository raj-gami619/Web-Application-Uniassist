<?php
$connect = new PDO("mysql:host=localhost;dbname=course", "root", "");

function fill_unit_select_box($connect){
	$output = '';
	$query = "SELECT * FROM dbtest ORDER BY course_name ASC";
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
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<center>
			<h2>Courses</h2><br>
			<h3>Enter Course Details</h3><br>
		</center>
		<form method="POST" id="insert_form">
			<div class="table-responsive">
				<table class="table table-bordered" id="item_table">
					<tr>
						<th>Department/Faculty</th>
						<th>Cutoff Points</th>
						<th>Course Name</th>
						<th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
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
			html += '<td><input type="text" name="cut_off[]" class="form-control cut_off" /></td>';
			html += '<td><select name="course_name[]" class="form-control course_name"><option value="">Select Course</option><?php echo fill_unit_select_box($connect); ?></select></td>';
			html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';

			$('#item_table').append(html);
		});

		$(document).on('click', '.remove', function(){
			$(this).closest('tr').remove();
		});
	});
</script>
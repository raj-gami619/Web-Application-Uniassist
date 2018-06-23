<!DOCTYPE html>
<html>
	<head>
		<title>administrator</title>
		<link rel="icon" href="fire.png" sizes="16x16" type="image/png">
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="admin.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="admin.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  	<a href="#">Add College</a>
		  	<a href="#">View College</a>
		  	<a href="#">View Student</a>
		  	<a href="#">View Feedback</a>
		  	<a href="#">Logout</a>
		</div>
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
		<div>
			<form action="" method="">
				<p>College Name</p>
				<input type="text" name="" required="required">
				<p>College Address</p>
				<input type="text" name="" required="required">
				<p>City</p>
				<input type="text" name="" required="required" placeholder="Location">
				<p>Contact Number</p>
				<input type="text" name="" required="required">
			</form>
			<form name="add_course" id="add_course">
				<table class="table table-bordered" id="dynamic">
					<tr>
						<td>
							<input type="text" name="name[]" id="name" placeholder="Courses Offered" class="form-control name_list">
						</td>
						<td>
							<button type="button" name="add" id="add" class="btn btn-success ">Add More</button>
						</td>
					</tr>
				</table>
			</form>
			<input type="submit" name="" value="Submit">
		</div>
	</body>
</html> 
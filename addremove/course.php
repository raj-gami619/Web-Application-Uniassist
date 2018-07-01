<!DOCTYPE html>
<html>
<head>
	<title>addcourse.admin</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<h2 align="center">Add course</h2>
			<div class="form-group">
				<form name="add_course" id="add_course">
					<table class="table table-bordered" id="dynamic_field">
						<tr>
							<td><input type="text" name="course[]" id="course" class="form-conrtol name_list" placeholder="Enter course"></td>
							<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
						</tr>
					</table>
					<input type="button" name="submit" id="submit" value="Submit" class="btn btn-success">
				</form>
			</div>
	</div>
</body>
</html>
<script>
	$(document).ready(function(){
		var i = 1;
		$('add').click(function(){
			i++;
			$('dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="course[]" id="course" class="form-conrtol name_list" placeholder="Enter course"></td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>')
		});
		$(document).on('click','.btn_remove', function(){
			var button_id = $(this).attr("id");
			$("#row"+button_id+"").remove();
		});
		$('#submit').click(function(){
			$.ajax({
				url:"corses.php",
				method:"POST",
				data:$('#add_course').serialize(),
				success:function(data){
					alert(data);
					$('#add_course')[0].reset();
				}
			});
		});
	});
</script>
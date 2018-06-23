function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
}

$(document).ready(function(){
	var i = 1;
	$('#add').click(function(){
		i++;
		$('#dynamic').append('<tr id="row'+i+'"><td><input type="text" name="name[]" id="name" placeholder="Courses Offered" class="form-control name_list"></td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});

	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id");
		$('#row'+button_id+'').remove();
	});

	$('#submit').click(function(){
		$.ajax({
			url:"connetion.php",
			method:"POST",
			data:$('#add_course').serialize(),
			success:function(data){
				alert(data);
				$('#add_course')[0].reset();
			}
		});
	});
});


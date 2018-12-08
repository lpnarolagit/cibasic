<!DOCTYPE html>
<html>
	<head>
		<title>Student Add Form</title>
	</head>
	<body>
		<?php
			echo form_open('http://cibasic.com/Stud_Controller/add_student');
			echo form_label('Roll No : ');
			echo form_input(array('id'=>'roll_no', 'name'=>'roll_no'));
			echo "<br/>";
			
			echo form_label('Name : ');
			echo form_input(array('id'=>'name', 'name'=>'name'));
			echo "<br/>";
			
			echo form_submit(array('id' => 'submit', 'value'=> 'Add'));
			echo form_close();
		?>
	</body>
</html>
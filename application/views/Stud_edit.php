<!DOCTYPE html>
<html>
	<head> <title>Edit Student</title></head>
	<body>
		<!-- <form method="" action=""> -->
			<?php
				echo form_open('Stud_Controller/update_student');
				echo form_hidden('old_roll_no', $old_roll_no);
				echo form_label('Roll No: ');
				echo form_input(array('id' => 'roll_no', 'name'=> 'roll_no', 'value' => $records[0]->roll_no));
				echo "<br/>";
				
				echo form_label('Name: ');
				echo form_input(array('id' => 'name', 'name' => 'name', 'value' => $records[0]->name));
				echo "<br/>";
				
				echo form_submit(array('name' => 'submit', 'value' => 'Update'));
				echo form_close();
			?>
		<!-- </form> -->
	</body>
</html>
<?php

?>
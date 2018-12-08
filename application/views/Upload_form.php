<html>
	<head>
		<title> Upload form </title>
	</head>
	<body>
		<?php echo $error; ?>
		<?php echo form_open_multipart('upload/do_upload') ?>
		<form action="" method="">
			<input type="file" name="userfile" size="20" />
			<br/> <br/>
			<input type="submit" value="Upload" />
		</form>
	</body>
</html>
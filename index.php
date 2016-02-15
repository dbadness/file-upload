<!DOCTYPE>
<html>
	<head>
		<title>Uploading a File!</title>
	</head>
	<body>
		<?php
			if($_GET)
			{
				if($_GET['file-error'])
				{
					echo "<p style='color:red;'>Please upload a .csv file.</p>";
				}
			}
		?>
		<h1>Upload a file and make some messages!</h1>
		<h4>Upload a CSV .txt file (with at least 30 rows) with email, name, and ZIP code fields to make messages based on the below template:</h4>
		<form action='/processor.php' method='post' enctype='multipart/form-data'>
			<textarea name='template' style='resize:none;width:200px;height:100px;'>Hi @@name. I'm reaching out from my email, @@email, to see if you're around @@zip today in order to meet. Let me know and thanks! Alex</textarea>
			<br>
			<br>
			<input type='file' name='file'><br><br>
			<input type='submit' value='Generate Messages!'>
		</form>
		<br><br><a href='http://mailsy.dev'>Mailsy Dev</a>
	</body>
</html>
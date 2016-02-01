<!DOCTYPE>
<html>
	<head>
		<title>Uploading a File!</title>
	</head>
	<body>
		<h1>Upload a file and make some messages!</h1>
		<h4>Upload a CSV .txt file (with at least 30 rows) with email, name, and ZIP code fields to make messages based on the below template:</h4>
		<form method='post' action='/processor.php'>
			<textarea name='template' disabled style='resize:none;width:500px;height:200px;'>Hi @@name,

I'm reaching out from my email, @@email, to see if you're around @@zip today in order to meet.

Let me know and thanks!
Alex</textarea>
			<br>
			<input type='file' name='file'><br><br>
			<input type='submit' value='Generate Messages!'>
		</form>
	</body>
</html>
<?php
	
	$path = $_FILES['file']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	if($ext != 'csv')
	{
		header('Location: /index.php?file-error=true');
		die;
	}

	// get the contents of the text file and put it into an array
	$file = file_get_contents($_FILES['file']['tmp_name']);
	$rows = array_map('str_getcsv', file($_FILES['file']['tmp_name']));

	$template = $_POST['template'];

	foreach($rows as $row)
	{
		$message = str_replace('@@name', $row[0], $template);
		$message = str_replace('@@email', $row[1], $message);
		$message = str_replace('@@zip', $row[2], $message);

		echo $message.'<br><br>';
	}
?>
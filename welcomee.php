<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
<?php
	if(isset($_POST['submit']))
	{ 
		$name = $_POST['name'];
		echo "WELCOME"$name;
	}
	
?>
</body>
</html>
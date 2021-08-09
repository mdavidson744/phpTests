<?php 
//Episode 4 Variables & Constants

$name = 'Mark';	
$age = 22;
//echo $name;
define('NAME', 'John');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tutorial 2 file</title>
</head>
<body>
	<h1>User Profile page</h1>
	<div><?php echo $name;?></div>
	<div><?php echo $age;?></div>
	<div>constant test: <?php echo NAME;?>
	
</body>
</html>
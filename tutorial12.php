<?php 
//Episode 14 - Variable Scope

//local Scope
//e.g.1
function myFunc(){
	$price = 10;
	echo $price;
}
myFunc();

echo '<br />';

function myFuncTwo($age){
echo $age;
}
myFuncTwo(25);

echo '<br />';

//global scope
$name = 'mario';

function sayHello(){
	global $name;
	$name = 'yoshi';
	echo "hello $name";
}
sayHello();
echo '<br />';

function sayBye($name){
$name = 'wario';
	echo "bye $name";
}
sayBye($name);

echo '<br />';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>tutorial 12 file</title>
</head>
<body>

	
</body>
</html>
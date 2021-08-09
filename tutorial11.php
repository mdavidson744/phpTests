<?php 
//Episode 13 - Functions

//simple function with no parameter
function sayHello(){
	echo "good morning, Yoshi";
}
sayHello(); 

echo '<br />';

//function with parameters
function sayHelloPar($name){
	echo "good morning, $name";
}
sayHelloPar("Mario");

echo '<br />';

//using default values in Functions
function formatProduct($product){
	return "{$product['name']} costs &pound{$product['price']} to buy <br />";
	//use {} to let php know that this is all a variable
	//- not just the product part
}
$formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
echo $formatted;

echo '<br />';

//using multiple arguments/parameters

function sayHelloMul($name = 'shaun', $time = 'morning'){
	echo "good $time $name";
}
sayHelloMul();

echo '<br />';
sayHelloMul('yoshi', 'night');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tutorial 11 file</title>
</head>
<body>

	
</body>
</html>
<?php 
//Episode 11 Conditional Statements

//conditional statement types
$price = 20;
echo 'Conditional statement types: ' . '<br />';
if ($price < 10) {
	echo 'the condition is met';
}
elseif ($price < 30){
	echo 'elseif condition met';
}
else {
	echo 'the condition is not met'; 
}
echo '<br />';
//using conditional Statements
echo 'Using conditional statements: ' . '<br />';
$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
];

//price < 15
echo 'products where price < 15' . '<br />';
foreach($products as $product){
	if ($product['price'] < 15){
		echo $product['name'] . '<br />';
	}
}

//price < 15 and > 2
echo 'products where price < 15 & price > 2' . '<br />';
foreach($products as $product){
	if ($product['price'] < 15 && $product['price'] > 2){
		echo $product['name'] . '<br />';
	}
}

//price > 20 OR < 10
echo 'products where price > 20 or price < 10' . '<br />';
foreach($products as $product){
	if ($product['price'] > 20 || $product['price'] < 10){
		echo $product['name'] . '<br />';
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tutorial 9 file</title>
</head>
<body>
<hr />
	<div>
		<ul>
			<?php foreach ($products as $product){ ?>
			<?php if($product['price'] > 15){ ?>
			<li><?php echo $product['name']; ?></li>
			<?php } ?>
			<?php } ?>
		</ul>
	</div>
</body>
</html>
<?php 
//Episode 9 Loops

$ninjas = ['shaun', 'ryu', 'yoshi'];

echo 'For loop' . '<br />';

 //for loop

for($i = 0; $i < count($ninjas); $i++){
	echo $ninjas[$i] . '</br>';
}

//foreach loop

echo 'Foreach loop: '.'<br />';
Foreach ($ninjas as $ninja) {
	echo $ninja . '</br>';
}

//loops with associative arrays (inside an indexed array)
echo '<br />' . 'Associative array loops' . '<br />';

$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
];

foreach($products as $product) {
	echo $product['name'] . ' - ' . $product['price'];
	echo '<br />';
}

//while loop
echo '<br />' . 'While loop' . '<br />';

$i = 0; //initialising i

while ($i < count($products)){
	echo $products[$i]['name'];
	echo '<br />';
	$i++;
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tutorial 7 file</title>
</head>
<body>
<h1>Products</h1>
<ul>
	<?php foreach($products as $product) {?>
		
		<h3><?php echo $product['name']; ?></h3>
		<p>&pound <?php echo $product['price']; ?></p>

	<?php } ?>
</ul>
	
</body>
</html>
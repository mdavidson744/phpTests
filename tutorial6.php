<?php 
//Episode 8 Multidimensional Arrays

$blogs = [
	['mario party', 'mario', 'lorem', 30],
	['mario kart cheats', 'toad', 'lorem', 25],
	['zelda hidden chests', 'link', 'lorem', 50]
];

//associative Multidimensional Arrays

$blogsAssociative = [
	['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
	['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
	['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
];

print_r($blogs);
print_r($blogs[1]);
print_r($blogs[1][1]);

echo 'associative: ';
echo $blogsAssociative[2]['author'];

echo 'count: ';
echo count($blogsAssociative);

//add
$blogsAssociative[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];
print_r($blogsAssociative);

//remove
$popped = array_pop($blogsAssociative);
print_r($blogsAssociative);

echo 'Popped array element: ';
print_r($popped);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tutorial 6 file</title>
</head>
<body>
	
</body>
</html>
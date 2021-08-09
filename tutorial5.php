<?php 
//episode 7 Arrays

// indexed Arrays
echo 'Hey, these are examples of indexed arrays: ';

$peopleOne = ['Mark', 'Victoria', 'Stephen'];

echo $peopleOne[0];

$ages = [20, 30, 40, 50];
print_r($ages);

$peopleOne[1] = 'Katrina';
print_r($peopleOne);

//add to array
$ages[] = 55;
print_r($ages);

array_push($ages, 60);
print_r($ages);

echo 'Merged Array: ';
//merge Arrays
$mergedArray = array_merge($peopleOne, $ages);
print_r($mergedArray);

//associative arrays

echo 'Hey, these are examples of associative arrays: ';
$ninjasOne = ['Shaun' => 'black', 'Mario' => 'orange', 'Luigi' => 'brown'];
echo $ninjasOne['Mario'];
print_r($ninjasOne);

$ninjasTwo = array('Bowser'=>'green', 'Peach'=>'yellow');
print_r($ninjasTwo);

//add to associative array
$ninjasTwo['Toad'] = 'pink';
print_r($ninjasTwo);

//override content
$ninjasTwo['Peach'] = 'pink';
print_r($ninjasTwo);

//count
echo 'Count for ninjas One: ';
echo count($ninjasOne);

//merge
echo 'Merged Ninjas array: ';
$mergedNinjasArray = array_merge($ninjasOne, $ninjasTwo);
print_r($mergedNinjasArray);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tutorial 5 file</title>
</head>
<body>
</body>
</html>
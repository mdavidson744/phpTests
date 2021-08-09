<?php 
//Episode 10 Booleans and Comparisons


// comparisons booleans (true or false)
echo true;

echo '<br />' . 'Numbers: ';

//numbers
echo '<br />' . '5 < 10. true so should output 1: ';
echo 5 < 10;
echo '<br />' . '5 == 10. should be false so empty: ';
echo 5 == 10; // should be empty
echo '<br />' . '5 > 10. should be false so empty: ';
echo 5 > 10; // should be empty
echo '<br />' . '10 = 10. true so should output 1: ';
echo 10 == 10;
echo '<br />' . '5 != 10. true so should output 1: ';
echo 5 != 10;
echo '<br />' . '5 <= 5. true so should output 1: ';
echo 5 <= 5;

//strings
echo '<br />' . 'Strings:';
echo '<br />' . 'shaun < yoshi. It checks if s comes before y. true so should output 1: ';
echo 'shaun' < 'yoshi'; //s comes before y so should be true
//refer to ASCII table for string ASCII decimal values which is what actually determines this order.

// loose vs strict equal comparison
echo '<br />' . 'Loose vs strict comparisons: ';
echo '<br />' . 'Loose comparisons: ';
echo '<br />' . '5 (int) == 5 (string): ';
echo 5 == '5'; //loose comparison - takes no consideration to data type so this will return true
echo '<br />' . 'Strict comparisons: ';
echo '<br />' . '5 (int) === 5 (string): ';
echo 5 === '5';

//proving that true == 1;
echo '<br />' . 'Proving that true == 1 with a loose comparison: ';
echo true == '1';
echo '<br />' . 'and that false == null (empty string): ';
echo false == '';


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tutorial 8 file</title>
</head>
<body>

	
</body>
</html>
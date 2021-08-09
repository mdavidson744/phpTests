<?php 
//refers to #34 - Ternary Operators

$score = 20;
//old method
if($score < 40){
    echo 'true';
} else {
    echo 'false';
}

echo '<br />' . 'New method: ' . '<br />';

//new method - ternary operators
echo $score < 40 ? 'true' : 'false';
?>

<!DOCTYPE html>
<html>
<head>
    <title>tutorial 13 ternary operators</title>
</head>
<body>
    <h1><?php echo $score < 40 ? 'true' : 'false'; ?></h1>
</body>
</html>
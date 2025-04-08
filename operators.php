<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title of the Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    
    
<?php
   
// Arithmetic Operators
echo 5**2;

?>
<?php
// Assignment Operators
$x = 100;
$x /= 20;

echo $x;

?>

<?php
// Comparison Operators
$x = 5;
$y = 10;

if ($x <> $y) {
    echo "true";
} else {
    echo "false";
}
?>

<?php
// Increment/Decrement Operators
$x = 10;
echo $x--;
echo $x;
?>

<?php
// Logical Operators   
$x = 20;
$y = 20;

if ($x == $y xor 1==1) { 
    echo "true";
}
?>
  
</body>

</html>
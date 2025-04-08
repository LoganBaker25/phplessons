<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title of the Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    

<?php
// Conditional Statements
$condition = 3; 

if ($condition === 1) {
    echo "Lebron is the best player in the NBA!";
} elseif ($condition === 2) {
    echo "Lebron will never retire!";
} elseif ($condition === 3) {
    echo "Lebron is the Goat!";
} elseif ($condition === 4) {
    echo "Lebron s underrated!";
} else {
    echo "None of the conditions are true!";
}
 
?>
<?php
// Switch Statement
 $x = 1;
 switch ($x) {
    case 1:
        echo "Case 1: The answer is 1.";
        break;
    case 2:
        echo "Case 2: The answer is 2.";
        break;
    case 3:
        echo "Case 3: The answer is 3.";
        break;
    case 4:
        echo "Case 4: The answer is 4.";
        break;
    default:
        echo " There is no Answer.";
        break;
}
?>
</body>

</html>
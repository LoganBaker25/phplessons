<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title of the Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    
    
<form method="GET">
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator">
        <option value="None">None</option>
        <option value="Add">Add</option>
        <option value="Subtract">Subtract</option>
        <option value="Multiply">Multiply</option>
        <option value="Divide">Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>

<p>The answer is:</p>
<?php
if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operation = $_GET['operator'];

    switch ($operation) {
        case "None":
            echo "You need to select an operator.";
            break;
        case "Add":
            echo $result1 + $result2;
            break;
        case "Subtract":
            echo $result1 - $result2;
            break;
        case "Multiply":
            echo $result1 * $result2;
            break;
        case "Divide":
            if ($result2 != 0) {
                echo $result1 / $result2;
            } else {
                echo "Division by zero is not allowed.";
            }
            break;
        default:
            echo "Invalid operator.";
            break;
    }
}
?>
</body>
</html>
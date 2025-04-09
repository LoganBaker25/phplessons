<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-lakers-purple { background-color: #552583; }
        .text-lakers-gold { color: #FDB927; }
        .navbar-lakers { background-color: #552583; }
        .navbar-lakers .navbar-brand, .navbar-lakers .nav-link { color: #FDB927; }
        .container { background-color: #F7F7F7; padding: 20px; border-radius: 8px; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-lakers-purple">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP Examples</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-lakers-gold" href="index.php">Conditionals</a></li>
                    <li class="nav-item"><a class="nav-link text-lakers-gold" href="datatypes.php">Data Types</a></li>
                    <li class="nav-item"><a class="nav-link text-lakers-gold" href="calculator.php">Calculator</a></li>
                    <li class="nav-item"><a class="nav-link text-lakers-gold" href="operators.php">Operators</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="loops.php">Loops</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lakers-gold" href="arrays.php">arrays</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lakers-gold" href="functions.php">functions</a> 
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-lakers-gold">Calculator Example</h2>
        <form method="GET">
            <input type="text" name="num1" class="form-control mb-2" placeholder="Number 1">
            <input type="text" name="num2" class="form-control mb-2" placeholder="Number 2">
            <select name="operator" class="form-select mb-2">
                <option value="None">None</option>
                <option value="Add">Add</option>
                <option value="Subtract">Subtract</option>
                <option value="Multiply">Multiply</option>
                <option value="Divide">Divide</option>
            </select>
            <button type="submit" name="submit" class="btn btn-lakers-purple text-lakers-gold">Calculate</button>
        </form>

        <h3 class="mt-3 text-lakers-gold">The answer is:</h3>
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
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

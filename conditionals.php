<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals and Switch Statements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP Examples</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Conditionals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datatypes.php">Data Types</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calculator.php">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="operators.php">Operators</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loops.php">Loops</a> 
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Conditional Statements Example</h2>
        <?php
        $condition = 3;

        if ($condition === 1) {
            echo "Lebron is the best player in the NBA!";
        } elseif ($condition === 2) {
            echo "Lebron will never retire!";
        } elseif ($condition === 3) {
            echo "Lebron is the Goat!";
        } elseif ($condition === 4) {
            echo "Lebron is underrated!";
        } else {
            echo "None of the conditions are true!";
        }
        ?>

        <h2 class="mt-4">Switch Statement Example</h2>
        <?php
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
                echo "There is no Answer.";
                break;
        }
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

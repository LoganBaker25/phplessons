<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators Example</title>
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
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-lakers-gold">Operators Example</h2>
        
        <h4 class="text-lakers-gold">Arithmetic Operators</h4>
        <?php echo 5 ** 2; ?>
        
        <h4 class="text-lakers-gold">Assignment Operators</h4>
        <?php 
        $x = 100;
        $x /= 20;
        echo $x;
        ?>
        
        <h4 class="text-lakers-gold">Comparison Operators</h4>
        <?php
        $x = 5;
        $y = 10;
        if ($x <> $y) {
            echo "true";
        } else {
            echo "false";
        }
        ?>
        
        <h4 class="text-lakers-gold">Increment/Decrement Operators</h4>
        <?php
        $x = 10;
        echo $x--;
        echo $x;
        ?>

        <h4 class="text-lakers-gold">Logical Operators</h4>
        <?php
        $x = 20;
        $y = 20;
        if ($x == $y xor 1 == 1) {
            echo "true";
        }
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

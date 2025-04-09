<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Lakers' Gold and Black Theme */
        .navbar-lakers {
            background-color: #552583; /* Lakers Purple */
        }

        .navbar-lakers .navbar-brand,
        .navbar-lakers .nav-link {
            color: #FDB927; /* Lakers Gold */
        }

        .navbar-lakers .navbar-toggler-icon {
            background-color: #FDB927; /* Lakers Gold */
        }

        .navbar-lakers .nav-link:hover {
            color: #FFFFFF; /* White on hover */
        }
    </style>
</head>
<body>

    <!-- Navbar with Lakers Gold and Black Theme -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-lakers">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lakers PHP Examples</a>
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
                    <li class="nav-item">
                        <a class="nav-link text-lakers-gold" href="arrays.php">arrays</a> 
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>PHP Loops Example</h2>

        // While loop
        <?php
        $x = 1;
        while ($x <= 5) {
            echo "Lebron undisputed<br>";
            $x++;
        }
        ?>
        <br>
        // Do while loop
        <?php
        $x = 1;
        do {
            echo "Lebron is the Goat<br>";
            $x++;
        } while ($x <= 5);
        ?>
        <br>
        // For loop
        <?php
        for ($x = 1; $x <= 5; $x++) {
            echo "Lebron is the best player in the NBA<br>";
        }
        ?>
        <br>
        // Foreach loop
        <?php
        $arr = array("Lebron", "Kobe", "Jordan", "Magic", "Shaq");
        foreach ($arr as $player) {
            echo "$player is a legend<br>";
        }
        ?>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>

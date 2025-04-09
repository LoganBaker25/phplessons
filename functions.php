<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Lakers Colors */
        .bg-lakers-purple {
            background-color: #552583; /* Lakers Purple */
        }

        .text-lakers-gold {
            color: #FDB927; /* Lakers Gold */
        }

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

        .container {
            background-color: #F7F7F7; /* Light background for content */
            border-radius: 8px;
            padding: 20px;
        }

        .content {
            background-color: #F0E5A6; /* Light Goldish background */
            border-radius: 8px;
            padding: 15px;
        }

        h2 {
            color: #FDB927; /* Lakers Gold */
        }
        
        .result {
            background-color: #6a3d9a; /* Purple shade */
            color: #FDB927; /* Lakers Gold */
            padding: 10px;
            border-radius: 5px;
            font-size: 18px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-lakers">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP Lakers Examples</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-lakers-gold" href="index.php">Conditionals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lakers-gold" href="datatypes.php">Data Types</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lakers-gold" href="calculator.php">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lakers-gold" href="operators.php">Operators</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lakers-gold" href="loops.php">Loops</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lakers-gold" href="functions.php">functions</a> 
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-lakers-gold">PHP Function Example (50% Calculator)</h2>
        <p>Here are the results of applying the function to different numbers:</p>
        
        <div class="content">
            <?php
            function newCalc($x) {
                $newnr = $x * 0.50;
                echo "<div class='result'>Here is 50% of what you wrote: ". $newnr . "</div>";
            }

            $x = 20;
            newCalc($x);
            echo "<br>";
            $a = 200;
            newCalc($a);
            ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>

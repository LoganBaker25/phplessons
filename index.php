<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conditionals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- External CSS -->
</head>
<body>

    <?php include_once __DIR__ . '/includes/header.php'; ?>

    <div class="container mt-4">
        <h2 class="text-lakers-gold">Conditional Statements Example</h2>

        <?php
        $condition = 3;
        $message = '';

        if ($condition === 1) {
            $message = "Lebron is the best player in the NBA!";
        } elseif ($condition === 2) {
            $message = "Lebron will never retire!";
        } elseif ($condition === 3) {
            $message = "Lebron is the Goat!";
        } elseif ($condition === 4) {
            $message = "Lebron is underrated!";
        } else {
            $message = "None of the conditions are true!";
        }

        echo "<p>$message</p>";
        ?>

        <h2 class="mt-4 text-lakers-gold">Switch Statement Example</h2>

        <?php
        $x = 1;
        $switchMessage = '';

        switch ($x) {
            case 1:
                $switchMessage = "Case 1: The answer is 1.";
                break;
            case 2:
                $switchMessage = "Case 2: The answer is 2.";
                break;
            case 3:
                $switchMessage = "Case 3: The answer is 3.";
                break;
            case 4:
                $switchMessage = "Case 4: The answer is 4.";
                break;
            default:
                $switchMessage = "There is no Answer.";
                break;
        }

        echo "<p>$switchMessage</p>";
        ?>
    </div>

    <footer>
        <p>Los Angeles Lakers</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

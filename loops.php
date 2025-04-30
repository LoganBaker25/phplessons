<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Link to the style.css file -->
</head>
<body>

    <?php include_once __DIR__ . '/includes/header.php'; ?>

    <div class="container mt-4">
        <h2 class="text-lakers-gold">Loops</h2>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "Count: $i<br>";
        }
        ?>
        
    </div>

    <footer>
        <p>Los Angeles Lakers</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

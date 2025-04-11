<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Functions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>
    <div class="container mt-4">
        <h2 class="text-lakers-gold">Functions</h2>
        <?php
        function greet($name) {
            return "Hello, $name!";
        }
        echo greet("Lebron");
        ?>
    </div>
</body>
</html>

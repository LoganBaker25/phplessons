<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Types</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include_once __DIR__ . '/includes/header.php'; ?>

    <div class="container mt-4">
        <h2 class="text-lakers-gold">Data Types</h2>
        <?php
        $name = "Lebron";
        $age = 39;
        $isGoat = true;
        echo "$name is $age years old. GOAT? " . ($isGoat ? "Yes" : "No");
        ?>
        <?php include 'header.php'; ?>
    </div>

</body>
</html>

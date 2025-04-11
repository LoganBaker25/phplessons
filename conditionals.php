<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conditionals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>
    <div class="container mt-4">
        <h2 class="text-lakers-gold">Conditional Statements</h2>
        <?php
        $condition = 3;
        if ($condition === 1) echo "Lebron is the best player!";
        elseif ($condition === 2) echo "Lebron will never retire!";
        elseif ($condition === 3) echo "Lebron is the GOAT!";
        elseif ($condition === 4) echo "Lebron is underrated!";
        else echo "None of the conditions are true!";
        ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include_once __DIR__ . '/includes/header.php'; ?>

    <div class="container mt-4">
        <h2 class="text-lakers-gold">Arrays</h2>
        <?php
        $players = ["Lebron", "AD", "Reaves"];
        foreach ($players as $player) {
            echo "$player<br>";
        }
        ?>
    </div>

</body>
</html>

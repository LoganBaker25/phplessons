<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS -->
</head>
<body>

    <?php include_once __DIR__ . '/includes/header.php'; ?>

    <div class="container mt-4">
        <h2 class="text-lakers-gold">Calculator</h2>

        <?php
        $result = '';
        $errorMessage = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
            $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
            $operation = $_POST['operation'];

            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 == 0) {
                        $errorMessage = 'Cannot divide by zero!';
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    $errorMessage = 'Invalid operation.';
            }
        }
        ?>

        <form method="POST" class="calculator-form">
            <input type="number" name="num1" step="any" placeholder="Number 1" required>
            <input type="number" name="num2" step="any" placeholder="Number 2" required>
            <select name="operation" required>
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            <button type="submit">Calculate</button>
        </form>

        <?php if ($errorMessage): ?>
            <p class="text-danger mt-3"><?php echo $errorMessage; ?></p>
        <?php elseif ($result !== ''): ?>
            <p class="mt-3">Result: <strong><?php echo $result; ?></strong></p>
        <?php endif; ?>
    </div>

    <footer>
        <p>Los Angeles Lakers</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

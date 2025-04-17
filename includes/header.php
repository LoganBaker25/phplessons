<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = 'LebronDaGoat'; // You can change this to any username
}
?>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">PHP Examples</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="conditionals.php">Conditionals</a></li>
                <li class="nav-item"><a class="nav-link" href="datatypes.php">Data Types</a></li>
                <li class="nav-item"><a class="nav-link" href="calculator.php">Calculator</a></li>
                <li class="nav-item"><a class="nav-link" href="operators.php">Operators</a></li>
                <li class="nav-item"><a class="nav-link" href="loops.php">Loops</a></li>
                <li class="nav-item"><a class="nav-link" href="arrays.php">Arrays</a></li>
                <li class="nav-item"><a class="nav-link" href="functions.php">Functions</a></li>
                <li class="nav-item"><a class="nav-link" href="cookie.php">Cookies</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Logged-in Message -->
<div class="container mt-3">
    <div class="alert alert-success" role="alert">
        You are logged in as <strong><?php echo $_SESSION['username']; ?></strong>
    </div>
</div>

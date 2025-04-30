<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  if (isset($_SESSION['userId'])){
    echo "You are logged in ";
  }
  else{
    echo "You are not logged in";
  }
  ?>
<form action="signup-includes/login.inc.php" method="POST">
  <input type="text" name="mailuid" placeholder="Username/E-mail..">
  <br>
  <input type="password" name="pwd" placeholder="Password">
  <br>
  <button type="submit" name="login-submit">Login</button>
  <br>
</form>
<a> Don't have an account? <a href="signup.php">Sign up</a></a>
<form action="signup-includes/logout.inc.php" method="POST">
  <button type="submit" name="logout-submit">Logout</button>
  <br>
</form>
</body>
</html>
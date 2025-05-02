
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Bootstrap demo</title>
  </head>
  <body>
<form action="includes/signup.inc.php" method="POST">
  <input type="text" name="first" placeholder="Firstname">
  <br>
  <input type="text" name="last" placeholder="Lastname">
  <br>
  <input type="text" name="email" placeholder="E-mail">
  <br>
  <input type="text" name="uid" placeholder="Username">
  <br>
  <input type="password" name="pwd" placeholder="Password">
  <br>
  <button type="submit" name="submit">Sign Up</button>
  <br>
</form>

<?php
    include "includes/header.php";

?>
   
</body>
</html>
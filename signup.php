
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php include('includes/header.php'); ?>
</head>
<body>
    <?php
    // Check for errors
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo 'Please fill in all fields!';
        }
        else if ($_GET['error'] == "invalidmailuid") {
            echo 'Invalid username and email!';
        }
        else if ($_GET['error'] == "invaliduid") {
            echo 'Invalid username!';
        }
        else if ($_GET['error'] == "invalidmail") {
            echo 'Invalid email';
        }
        else if ($_GET['error'] == "passwordcheck") {
            echo 'Passwords do not match!';
        }
        else if ($_GET['error'] == "usertaken") {
            echo 'Username already taken!';
        }
    }

    // Check for successful signup
    else if (isset($_GET['signup']) && $_GET['signup'] == "success") {
        echo '<p style="color: green;">You have signed up successfully!</p>';
    }
    ?>

    <form action="signup-includes/signup.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat Password">
        <button type="submit" name="signup-submit">Sign Up</button>
    </form>

</body>
</html>

<?php
include 'includes/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
w
    $conn->close();
}
?>

<form method="POST" action="contact.php">
    <label>Name:</label>
    <input type="text" name="name" required><br>

    <label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Message:</label>
    <textarea name="message" required></textarea><br>

    <input type="submit" value="Send">
</form>

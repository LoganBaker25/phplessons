<?php
include 'includes/conn.php';  // This will include the database connection file

$sql = "SELECT username FROM users LIMIT 1";  // Change the query as needed
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data
    $row = $result->fetch_assoc();
    echo "Username: " . $row["username"];
} else {
    echo "No users found.";
}

$conn->close();
?>

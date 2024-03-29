<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User authenticated, redirect to dashboard or homepage
        header("Location: index.php");
        exit();
    } else {
        // Invalid credentials, display an error message
        echo "Invalid username or password.";
    }
}
?>

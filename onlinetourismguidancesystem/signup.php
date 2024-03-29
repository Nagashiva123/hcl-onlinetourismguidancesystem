<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // New user registered successfully, redirect to login page
        header("Location: index.html"); // Assuming your login page is index.html
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

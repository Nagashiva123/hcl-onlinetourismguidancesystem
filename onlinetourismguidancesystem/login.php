<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform your login authentication here, e.g., check credentials against a database
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Example: Check if email and password are valid (this is just for demonstration purposes)
    if ($email == "example@example.com" && $password == "password") {
        // Redirect to index.html upon successful login
        header("Location: index.html");
        exit(); // Ensure script execution stops after redirection
    } else {
        // Handle invalid credentials (e.g., display error message)
        echo "Invalid email or password. Please try again.";
    }
} else {
    // Handle non-POST requests (optional)
    echo "Invalid request method.";
}
?>

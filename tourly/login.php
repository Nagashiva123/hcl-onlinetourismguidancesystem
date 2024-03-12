<?php
include("database.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
   
    <style>
        body {
            background-image: url("hero-banner.jpg");
            font-family: Arial, sans-serif;
            
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }
        .form-container h2 {
            margin-top: 0;
            text-align: center;
        }
        .form-container form {
            display: flex;
            flex-direction: column;
        }
        .form-container form input[type="text"],
        .form-container form input[type="password"],
        .form-container form input[type="email"],
        .form-container form select {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-container form input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-container form input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-container .create-account {
            margin-top: 20px;
            text-align: center;
        }
        .form-container .create-account a {
            color: #007bff;
            text-decoration: none;
        }
        .form-container .phone-inputs {
            display: flex;
            align-items: center; /* Align items vertically */
        }
        .form-container .phone-inputs select {
            flex: 1;
            margin-right: 5px;
            width: 30%;
        }
        .form-container .phone-inputs input[type="text"] {
            flex: 2;
            margin-left: 5px;
            width: 70%;
        }
    </style>
</head>
<body>
    <div class="form-container" id="login-form">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login" name="login">
        </form>
        <div class="create-account">
            <p>Don't have an account? <a href="#" onclick="toggleForms()">Create one</a></p>
        </div>
    </div>

    <div class="form-container" style="display:none;" id="create-account-form">
        <h2>Create Account</h2>
        <form action="login.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            
            <input type="text" name="username" placeholder="New Username" required>
            <input type="password" name="password" placeholder="New Password" required>
            <input type="password" name="confirm-password" placeholder="Confirm Password" required>
            <div class="phone-inputs">
                <select name="country-code" id="country-code" required onchange="updatePhoneNumberLength()">
                    <option value="">Select Country Code</option>
                    <option value="+1">+1 (USA)</option>
                    <option value="+91">+91 (India)</option>
                    <!-- Add more options as needed -->
                </select>
                <input type="text" name="phone-number" id="phone-number" placeholder="Phone Number" required>
            </div>
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <input type="submit" value="Create Account" name="signup">
        </form>
    </div>

    <script>
        // Function to toggle between login and create account forms
        function toggleForms() {
            var loginForm = document.getElementById("login-form");
            var createAccountForm = document.getElementById("create-account-form");

            loginForm.style.display = loginForm.style.display === "none" ? "block" : "none";
            createAccountForm.style.display = createAccountForm.style.display === "none" ? "block" : "none";
        }

        // Function to update phone number length based on country code
        function updatePhoneNumberLength() {
            var countryCode = document.getElementById("country-code").value;
            var phoneNumberInput = document.getElementById("phone-number");
            var maxLength = 15; // Default maximum length for phone number

            // Update maximum length based on country code
            switch (countryCode) {
                case "+1": // USA
                    maxLength = 12;
                    break;
                case "+91": // India
                    maxLength = 10;
                    break;
                // Add more cases for other country codes as needed
            }

            phoneNumberInput.maxLength = maxLength;
        }
        let generatedOTP;

        function generateOTP() {
            // Generate a random 6-digit OTP
            generatedOTP = Math.floor(100000 + Math.random() * 900000);
            console.log("Generated OTP:", generatedOTP);

            // Show the generated OTP in a pop-up window
            alert("Generated OTP: " + generatedOTP);
        }

        function verifyOTP(event) {
            event.preventDefault();
            const enteredOTP = document.getElementById("otp").value;
            if (enteredOTP === generatedOTP.toString()) {
                document.getElementById("message").textContent = "OTP verified successfully!";
            } else {
                document.getElementById("message").textContent = "Incorrect OTP. Please try again.";
            }
        }
   
    <?php
try{
// Check if form is submitted
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Account
if(isset($_POST['signup'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirm-password'];
    $countrycode = $_POST['country-code'];
    $phonenum = $_POST['phone-number'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Account created successfully";
    } else {
        echo "Error creating account: " . $conn->error;
    }
}

// Login
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        $_SESSION['username'] = $username;
        echo "Login successful. Welcome, $username!";
    } else {
        // Login failed
        echo "Invalid username or password";
    }
}
}
$conn->close();
?>

catch(mysqli_sql_exception){

}
mysqli_close($conn);
?>
 </script>
    </script>
</body>
</html>

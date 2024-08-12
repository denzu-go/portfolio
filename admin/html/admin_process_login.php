<?php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    // Hardcoded credentials for demonstration purposes
    $validUsername = "username";
    $validPassword = "thepasswordisP@ssw0rd";

    // Check if provided credentials match the valid credentials
    if ($inputUsername === $validUsername && $inputPassword === $validPassword) {
        // Admin authentication successful, set session and redirect to the admin dashboard
        session_start();
        $_SESSION['admin_id'] = 1;

        header("Location: index.php");
        exit;
    } else {
        // Display an error message if credentials are incorrect
        echo "Invalid username or password.";
    }
}

?>

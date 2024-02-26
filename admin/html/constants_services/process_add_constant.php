<?php
include '../../../database/connection.php'; // Include your database connection script

// Check if the form data is received
if (isset($_POST['iconInput']) && isset($_POST['titleInput']) && isset($_POST['textInput'])  && isset($_POST['linkInput']) ) {
    // Collect form data
    $iconInput = $_POST['iconInput'];
    $titleInput = $_POST['titleInput'];
    $textInput = $_POST['textInput'];
    $linkInput = $_POST['linkInput'];

    // Insert the new client into the database
    $sqlInsertOutput = "INSERT INTO constants_services (icon, title, text, link) VALUES ('$iconInput', '$titleInput', '$textInput', '$linkInput')";
    if ($conn->query($sqlInsertOutput) === TRUE) {
        // If insertion is successful, return a success message
        echo 'Client added successfully';
    } else {
        // If there's an error with the insertion, return an error message
        echo 'Error adding client: ' . $conn->error;
    }
} else {
    // If form data is not received, return an error message
    echo 'Error: Form data not received.';
}

// Close the database connection
$conn->close();
?>

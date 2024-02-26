<?php
include '../../../database/connection.php'; // Include your database connection script

// Check if the form data is received
if (isset($_POST['iconInput']) && isset($_POST['textInput']) && isset($_POST['linkInput']) ) {

    $iconInput = $_POST['iconInput'];
    $textInput = $_POST['textInput'];
    $linkInput = $_POST['linkInput'];

    // Insert the new client into the database
    $sqlInsertOutput = "INSERT INTO constants_contacts (icon, text, link) VALUES ('$iconInput', '$textInput', '$linkInput')";
    if ($conn->query($sqlInsertOutput) === TRUE) {
        echo 'Client added successfully';
    } else {
        echo 'Error adding client: ' . $conn->error;
    }
} else {
    // If form data is not received, return an error message
    echo 'Error: Form data not received.';
}

// Close the database connection
$conn->close();
?>

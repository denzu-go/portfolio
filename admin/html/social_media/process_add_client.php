<?php
include '../../../database/connection.php'; // Include your database connection script

// Check if the form data is received
if (isset($_POST['clientName']) && isset($_POST['clientVisibility'])) {
    // Collect form data
    $clientName = $_POST['clientName'];
    $clientVisibility = $_POST['clientVisibility'];

    // Insert the new client into the database
    $sqlInsertClient = "INSERT INTO social_media_clients (client_name, is_visible, date_added) VALUES ('$clientName', $clientVisibility, NOW())";
    if ($conn->query($sqlInsertClient) === TRUE) {
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

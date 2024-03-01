<?php
include '../../../database/connection.php'; // Include your database connection script

// Check if the form data is received
if (isset($_POST['iconInput']) && isset($_POST['nameInput']) && isset($_POST['positionInput'])  && isset($_POST['testimonyInput']) ) {
    // Collect form data
    $iconInput = $_POST['iconInput'];
    $iconInput =   $conn->real_escape_string($iconInput);

    $nameInput = $_POST['nameInput'];
    $nameInput =   $conn->real_escape_string($nameInput);

    $positionInput = $_POST['positionInput'];
    $positionInput =   $conn->real_escape_string($positionInput);

    $testimonyInput = $_POST['testimonyInput'];
    $testimonyInput =   $conn->real_escape_string($testimonyInput);

    // Insert the new client into the database
    $sqlInsertOutput = "INSERT INTO constants_testimonials (icon, name, position, testimony) VALUES ('$iconInput', '$nameInput', '$positionInput', '$testimonyInput')";
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

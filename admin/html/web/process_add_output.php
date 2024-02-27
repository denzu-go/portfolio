<?php
include '../../../database/connection.php'; // Include your database connection script

// Check if the form data is received
if (isset($_POST['linkInput']) && isset($_POST['newOutputVisibility']) && isset($_POST['editClientSelect']) ) {
    // Collect form data
    $linkInput = $_POST['linkInput'];
    $newOutputVisibility = $_POST['newOutputVisibility'];
    
    $editClientSelect = $_POST['editClientSelect'];

    if ($editClientSelect == '') {
        $edit_client_select = 0;
    } else {
        $edit_client_select = $editClientSelect;
    }

    // Insert the new client into the database
    $sqlInsertOutput = "INSERT INTO web_outputs (link, is_visible, client_id) VALUES ('$linkInput', $newOutputVisibility, $edit_client_select)";
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

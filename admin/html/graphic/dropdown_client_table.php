<?php
include "../../../database/connection.php";

// Initialize an empty array to hold JSON data
$json = array();

// Initialize the HTML content
$content = '<select class="form-select" id="editClientSelect">';

// Fetch client data from the database
$sql = "SELECT client_id, client_name FROM graphic_clients";
$result = $conn->query($sql);

// Check if there are any clients
if ($result->num_rows > 0) {
    // Add the default option "N/A"
    $content .= '<option value="">N/A</option>';

    // Append options for each client
    while ($row = $result->fetch_assoc()) {
        $content .= '<option value="' . $row['client_id'] . '">' . $row['client_name'] . '</option>';
    }
} else {
    // If no clients available, display a default option
    $content .= '<option value="">No clients available</option>';
}

// Close the select element
$content .= '</select>';

// Close the database connection
$conn->close();

// Add the HTML content to the JSON array
$json[] = array("content" => $content);

// Encode the JSON array and output it
echo json_encode($json);

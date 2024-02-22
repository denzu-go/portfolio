<?php
include "../../../database/connection.php";

// Get the value of the hidden input
$selectedClient = isset($_REQUEST['selectedClient']) ? $_REQUEST['selectedClient'] : null;

// Initialize an empty array to hold JSON data
$json = array();

// Initialize the HTML content
$content = '<select class="form-select" id="clientSelect">';

// Fetch client data from the database
$sql = "SELECT client_id, client_name FROM video_clients";
$result = $conn->query($sql);

// Check if there are any clients
if ($result->num_rows > 0) {
    // Initialize the default option
    $naSelected = ($selectedClient == 0) ? 'selected' : ''; // Check if $selectedClient is 0
    $content .= '<option value="" ' . $naSelected . '>N/A</option>';

    // Append options for each client
    while ($row = $result->fetch_assoc()) {
        $selected = ($row['client_id'] == $selectedClient) ? 'selected' : ''; // Check if client_id matches the outputId
        $content .= '<option value="' . $row['client_id'] . '" ' . $selected . '>' . $row['client_name'] . '</option>';
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

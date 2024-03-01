<?php
include '../../../database/connection.php';

if (isset($_POST['clientId']) && isset($_POST['clientName']) && isset($_POST['clientVisibility']) && isset($_POST['date_added_client'])) {
    $clientId = $_POST['clientId'];

    $clientName = $_POST['clientName'];
    $clientName =   $conn->real_escape_string($clientName);

    $clientVisibility = $_POST['clientVisibility'];
    $date_added_client = $_POST['date_added_client'];

    $sqlUpdateClient = "UPDATE video_clients SET client_name = '$clientName', is_visible = $clientVisibility, date_added = '$date_added_client' WHERE client_id = $clientId";
    $result = $conn->query($sqlUpdateClient);

    if ($result) {
        echo 'Changes saved successfully';
    } else {
        echo 'Error saving changes: ' . $conn->error;
    }
} else {
    echo 'Error: Form data not received.';
}
?>

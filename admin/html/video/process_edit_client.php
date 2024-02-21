<?php
include '../../../database/connection.php';

if (isset($_POST['clientId']) && isset($_POST['clientName']) && isset($_POST['clientVisibility'])) {
    $clientId = $_POST['clientId'];
    $clientName = $_POST['clientName'];
    $clientVisibility = $_POST['clientVisibility'];

    $sqlUpdateClient = "UPDATE video_clients SET client_name = '$clientName', is_visible = $clientVisibility WHERE client_id = $clientId";
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

<?php
include '../../../database/connection.php';

if (isset($_POST['client_id'])) {
    // Retrieve the client ID
    $client_id = $_POST['client_id'];

    $sqlDeleteClient = "DELETE FROM social_media_clients WHERE client_id = $client_id";
    $conn->query($sqlDeleteClient);
}

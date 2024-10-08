<?php
include '../../../database/connection.php';

if (isset($_POST['outputId']) && isset($_POST['link']) && isset($_POST['outputVisibility']) && isset($_POST['date_added_output']) && isset($_POST['clientSelect'])) {
    $outputId = $_POST['outputId'];

    $link = $_POST['link'];
    $link =   $conn->real_escape_string($link);

    $outputVisibility = $_POST['outputVisibility'];
    $date_added_output = $_POST['date_added_output'];

    // Assuming $_POST['clientSelect'] is set
    if ($_POST['clientSelect'] === '') {
        $clientSelect = 0;
    } else {
        $clientSelect = $_POST['clientSelect'];
    }

    $sqlUpdateOutput = "UPDATE brand_logo_outputs SET link = '$link', is_visible = $outputVisibility, client_id = $clientSelect, date_added = '$date_added_output' WHERE id = $outputId";
    $result = $conn->query($sqlUpdateOutput);

    if ($result) {
        echo 'Changes saved successfully';
    } else {
        echo 'Error saving changes: ' . $conn->error;
    }
} else {
    echo 'Error: Form data not received.';
}

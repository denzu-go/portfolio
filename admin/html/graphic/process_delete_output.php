<?php
include '../../../database/connection.php';

if (isset($_POST['output_id'])) {
    // Retrieve the client ID
    $output_id = $_POST['output_id'];

    $sqlDeleteOutput = "DELETE FROM graphic_outputs WHERE id = $output_id";
    $conn->query($sqlDeleteOutput);
}

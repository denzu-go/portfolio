<?php
include '../../../database/connection.php';

if (isset($_POST['id']) && isset($_POST['text'])) {
    $id = $_POST['id'];
    $text = $_POST['text'];

    $sqlUpdateOutput = "UPDATE constants_footer SET text = '$text' WHERE id = $id";
    $result = $conn->query($sqlUpdateOutput);

    if ($result) {
        echo 'Changes saved successfully';
    } else {
        echo 'Error saving changes: ' . $conn->error;
    }
} else {
    echo 'Error: Form data not received.';
}

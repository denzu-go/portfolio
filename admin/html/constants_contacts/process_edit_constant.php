<?php
include '../../../database/connection.php';

if (isset($_POST['constantId']) && isset($_POST['icon']) && isset($_POST['text']) && isset($_POST['link']) ) {

    $id = $_POST['constantId'];
    $icon = $_POST['icon'];
    $text = $_POST['text'];
    $link = $_POST['link'];

    $icon =   $conn->real_escape_string($icon);
    $text =   $conn->real_escape_string($text);
    $link =   $conn->real_escape_string($link);

    $sqlUpdateOutput = "UPDATE constants_contacts SET icon = '$icon', text = '$text', link = '$link' WHERE id = $id";
    $result = $conn->query($sqlUpdateOutput);

    if ($result) {
        echo 'Changes saved successfully';
    } else {
        echo 'Error saving changes: ' . $conn->error;
    }
} else {
    echo 'Error: Form data not received.';
}

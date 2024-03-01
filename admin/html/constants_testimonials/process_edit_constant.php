<?php
include '../../../database/connection.php';

if (isset($_POST['constantId']) && isset($_POST['icon']) && isset($_POST['name']) && isset($_POST['position']) && isset($_POST['testimony'])) {

    $id = $_POST['constantId'];
    $icon = $_POST['icon'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $testimony = $_POST['testimony'];

    $icon =   $conn->real_escape_string($icon);
    $name =   $conn->real_escape_string($name);
    $position =   $conn->real_escape_string($position);
    $testimony =   $conn->real_escape_string($testimony);

    $sqlUpdateOutput = "UPDATE constants_testimonials SET icon = '$icon', name = '$name', position = '$position', testimony = '$testimony' WHERE id = $id";
    $result = $conn->query($sqlUpdateOutput);

    if ($result) {
        echo 'Changes saved successfully';
    } else {
        echo 'Error saving changes: ' . $conn->error;
    }
} else {
    echo 'Error: Form data not received.';
}

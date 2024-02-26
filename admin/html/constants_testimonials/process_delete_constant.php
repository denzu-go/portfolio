<?php
include '../../../database/connection.php';

if (isset($_POST['id'])) {
    // Retrieve the client ID
    $id = $_POST['id'];

    $sqlDeleteClient = "DELETE FROM constants_testimonials WHERE id = $id";
    $conn->query($sqlDeleteClient);
}

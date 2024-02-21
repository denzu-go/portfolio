<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'portfolio_denzel';

// Create a connection
$conn = mysqli_connect($hostname, $username, $password, $database_name);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Store the database connection in the session
$_SESSION['db_connection'] = $conn;

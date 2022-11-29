<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "teste";

    $conn = new mysqli($servername, $username, $password, $database);
    return $conn;

    if (!$conn) {
        die('Not connected: ' . mysqli_connect_error());
    }
?>
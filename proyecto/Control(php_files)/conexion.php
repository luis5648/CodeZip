<?php

$servername = "localhost";
$username = "test";
$password = "123";
$dbname = "web";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

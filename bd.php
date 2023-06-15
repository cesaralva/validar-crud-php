<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "usuariosdb";

$conn = new mysqli($servername, $username, $password, $dbname,3306);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

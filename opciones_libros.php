<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener los libros
$sql = "SELECT ID, Nombre_del_libro FROM Libros";
$result = $conn->query($sql);

// Generar opciones dinámicamente desde la base de datos
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["ID"];
        $nombre = $row["Nombre_del_libro"];
        echo "<option value='$id'>$nombre</option>";
    }
} else {
    echo "<option value='' disabled>No se encontraron libros en la base de datos</option>";
}

$conn->close();
?>

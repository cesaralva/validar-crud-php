<?php

//include('bd.php');

// Obtener los datos del formulario
$libro = $_POST['libro'];
$persona = $_POST['persona'];
$fechaPrestamo = $_POST['fecha_prestamo'];
$fechaDevolucion = $_POST['fecha_devolucion'];
$estado = $_POST['estado'];


// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

// Insertar el préstamo en la base de datos
$query = "INSERT INTO Prestamos (ID_del_libro, Nombre_de_la_persona, Fecha_de_prestamo, Fecha_de_devolucion, Estado) VALUES ('$libro', '$persona', '$fechaPrestamo', '$fechaDevolucion', '$estado')";

if ($conn->query($query) === TRUE) {
    echo "Préstamo guardado exitosamente";
    
} else {
    echo "Error al guardar el préstamo: " . $conn->error;
}

$conn->close();
?>


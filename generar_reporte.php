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

// Consulta para obtener los préstamos
$sql = "SELECT * FROM Prestamos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["ID"];
        $libro = obtenerNombreLibro($conn, $row["ID_del_libro"]);
        $persona = $row["Nombre_de_la_persona"];
        $fechaPrestamo = $row["Fecha_de_prestamo"];
        $fechaDevolucion = $row["Fecha_de_devolucion"];
        $estado = $row["Estado"];

        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$libro</td>";
        echo "<td>$persona</td>";
        echo "<td>$fechaPrestamo</td>";
        echo "<td>$fechaDevolucion</td>";
        echo "<td>$estado</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No se encontraron préstamos</td></tr>";
}

$conn->close();

function obtenerNombreLibro($conn, $libroId) {
    $sql = "SELECT Nombre_del_libro FROM Libros WHERE ID = $libroId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["Nombre_del_libro"];
    } else {
        return "Desconocido";
    }
}
?>

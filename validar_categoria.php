<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoria = $_POST["categoria"];

    // Insertar la categoría en la base de datos
    $sql = "INSERT INTO Categoria (Nombre_categoria_libros) VALUES ('$categoria')";
    if ($conn->query($sql) === TRUE) {
        echo "Categoría ingresada exitosamente.";
        header("Location: formulario_Libros.php");
    } else {
        echo "Error al ingresar la categoría: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>

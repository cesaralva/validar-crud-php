<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $autor = $_POST["autor"];

    // Validar los datos ingresados (puedes agregar más validaciones según tus necesidades)

    if (!empty($nombre) && !empty($autor)) {
        // Los datos son válidos, guardar la categoría en la base de datos
       
        $sql = "INSERT INTO Libros ( Nombre_del_libro, Autor) VALUES ( '$nombre', '$autor')";
        


        
        if ($conn->query($sql) === TRUE) {
            echo "Categoría de libro guardada exitosamente";
            header("Location: formulario_prestamo.php");
            exit();
        } else {
            echo "Error al guardar la categoría de libro: " . $conn->error;
        }
    } else {
        echo "Por favor, completa todos los campos";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "Password123#@!";
    $dbname = "usuariosdb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    $sql = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$email', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario creado exitosamente";
        header("Location: formulario_login.php");
        exit(); 
    } else {
        echo "Error al crear el usuario: " . $conn->error;
    }

   
    $conn->close();
}
?>

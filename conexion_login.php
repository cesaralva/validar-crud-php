<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validar los datos ingresados (puedes agregar más validaciones según tus necesidades)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $dbpassword = "Password123#@!";
        $dbname = "usuariosdb";

        $conn = new mysqli($servername, $username, $dbpassword, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Consulta SQL para insertar el nuevo usuario
        $sql = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Nuevo usuario creado correctamente";
        } else {
            echo "Error al crear el usuario: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Correo electrónico inválido";
    }
}
?>

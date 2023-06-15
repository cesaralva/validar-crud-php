<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "usuariosdb";

$conn = new mysqli($servername, $username, $password, $dbname, 3306);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Verificar las credenciales en la base de datos
    $query = "SELECT * FROM usuarios WHERE email = '$email' AND contrasena = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Credenciales válidas, establecer sesión y redirigir al formulario de categoría de libros
        $_SESSION["email"] = $email;
        header("Location: formulario_categoria.php");
        exit();
    } else {
        // Credenciales inválidas, mostrar mensaje de error o redirigir al formulario de inicio de sesión nuevamente
        echo "Credenciales inválidas. Inténtalo de nuevo.";
    }
}
?>

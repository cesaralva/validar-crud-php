<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="css/usuario.css">
    <link rel="stylesheet" href="css/nadvar.css">
</head>

<body>
    <div class="container">
        <h2>Crear Usuario</h2>
        <form action="validar_usuario.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br><br>
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" required><br><br>
            <label for="password">Contraseña:</label>
            <input type="password" name="contrasena" required><br><br>
            <input type="submit" value="Crear usuario">
        </form>
    </div>
</body>

</html>
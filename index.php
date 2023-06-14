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

<header>
        <nav>
            <ul>
                <li><a href="index.php">Registro</a></li>
                <li><a href="formulario_login.php">Login</a></li>
                <li><a href="formulario_contacto.php">Contacto</a></li>
                <!-- Agrega más enlaces para otros formularios -->
            </ul>
        </nav>
    </header>



    
<div class="container">
        <h2>Crear Usuario</h2>
        <form action="conexion_registro.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br><br>
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" required><br><br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" value="Crear usuario">
        </form>
    </div>
</body>
</html>
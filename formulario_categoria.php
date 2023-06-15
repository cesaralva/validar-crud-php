<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Categoría de Libros</title>
    <link rel="stylesheet" href="css/categoria.css">
</head>
<body>
    <h2>Ingresar Categoría de Libros</h2>

    <form action="validar_categoria.php" method="POST">
        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria" required><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Categoría de Libros</title>
    <link rel="stylesheet" href="css/categoriaLibros.css">
</head>

<body>
    <h2>Ingresar Libros y Autores</h2>

    <form action="validar_Libros.php" method="POST">

    <label for="nombre">Nombre del Libro:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" required><br><br>
            <input type="submit" value="Guardar">
    </form>
</body>

</html>


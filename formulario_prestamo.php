<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Préstamo</title>
    <link rel="stylesheet" href="css/prestamo.css">
</head>
<body>
    <h2>Generar Préstamo</h2>

    <form action="validar_prestamo.php" method="POST">
        <label for="libro">Libro:</label>
        <select name="libro" id="libro" required>
            <?php include 'opciones_libros.php'; ?>
        </select>
        <br><br>

        <label for="persona">Nombre de la Persona:</label>
        <input type="text" id="persona" name="persona" required><br><br>

        <label for="fecha_prestamo">Fecha de Préstamo:</label>
        <input type="date" id="fecha_prestamo" name="fecha_prestamo" required><br><br>

        <label for="fecha_devolucion">Fecha de Devolución:</label>
        <input type="date" id="fecha_devolucion" name="fecha_devolucion" required><br><br>

        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" required><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>

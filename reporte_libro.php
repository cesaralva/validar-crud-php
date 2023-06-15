<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Préstamos de Libros</title>
    <link rel="stylesheet" href="css/reportelibro.css">
</head>
<body>
    <h2>Reporte de Préstamos de Libros</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Libro</th>
                <th>Persona</th>
                <th>Fecha de Préstamo</th>
                <th>Fecha de Devolución</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'generar_reporte.php'; ?>
        </tbody>
    </table>
</body>
</html>

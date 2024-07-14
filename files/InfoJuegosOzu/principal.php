<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Noticias - Principal</title>
</head>
<body>
    <header>
        <h1>NOTICIAS DE VIDEOJUEGOS</h1>
    </header>

    <section id="noticias">
        <?php

       

        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
                echo "<article>";
                echo "<h2>" . $row["titulo"] . "</h2>";
                echo "<p class='fecha'>" . $row["fecha_publicacion"] . "</p>";
                echo "</article>";
            }
        } else {
            echo "<p>No hay noticias disponibles.</p>";
        }
        $conn->close();
        ?>
    </section>

    <footer>
        <p>Noticias de Videojuegos 2024</p>
    </footer>
</body>
</html>

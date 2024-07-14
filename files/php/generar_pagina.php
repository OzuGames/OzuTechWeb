<?php
include 'cn.php';

if(isset($_POST['submit'])) {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $imagen = $_FILES['imagen']['name'];
    $url = $_POST['url'];

    move_uploaded_file($_FILES['imagen']['tmp_name'], "images/$imagen");

    // Insertar la noticia en la base de datos
    $sql = "INSERT INTO noticias (titulo, contenido, imagen, url) VALUES ('$titulo', '$contenido', '$imagen', '$url')";
    if ($conn->query($sql) === TRUE) {
        // Crear la página HTML
        $paginaHTML = "<!DOCTYPE html>\n";
        $paginaHTML .= "<html lang='es'>\n";
        $paginaHTML .= "<head>\n";
        $paginaHTML .= "<meta charset='UTF-8'>\n";
        $paginaHTML .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
        $paginaHTML .= "<link rel='stylesheet' href='estilos.css'>\n";
        $paginaHTML .= "<title>$titulo</title>\n";
        $paginaHTML .= "</head>\n";
        $paginaHTML .= "<body>\n";
        $paginaHTML .= "<header>\n";
        $paginaHTML .= "<h1>$titulo</h1>\n";
        $paginaHTML .= "</header>\n";
        $paginaHTML .= "<section>\n";
        $paginaHTML .= "<article>\n";
        $paginaHTML .= "<p>$contenido</p>\n";
        $paginaHTML .= "<img src='images/$imagen' alt='Imagen de la noticia'>\n";
        $paginaHTML .= "<p class='fecha'>" . date('Y-m-d H:i:s') . "</p>\n";
        $paginaHTML .= "</article>\n";
        $paginaHTML .= "</section>\n";
        $paginaHTML .= "<footer>\n";
        $paginaHTML .= "<p>&copy; " . date('Y') . " $titulo</p>\n";
        $paginaHTML .= "</footer>\n";
        $paginaHTML .= "</body>\n";
        $paginaHTML .= "</html>";

        // Guardar la página HTML en un archivo
        $nombreArchivo = "../InfoJuegosOzu/noticias/$url.html";
        file_put_contents($nombreArchivo, $paginaHTML);

        echo "Noticia y página creadas exitosamente";
    } else {
        echo "Error al agregar la noticia: " . $conn->error;
    }
}
?>

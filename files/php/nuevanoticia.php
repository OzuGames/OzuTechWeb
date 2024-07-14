<?php

session_start();
include ("cn.php");

date_default_timezone_set("Europe/London");


$titulo = $_POST["titulo"];
$textouno = $_POST['textouno'];
$textodos = $_POST['textodos'];
$fechapublicacion = $_POST['fechapublicacion'];
$img = $_POST['img'];
$etiqueta = $_POST['etiqueta'];
$timelec = $_POST['timelec'];



$consulta = "INSERT INTO noticias(Titulo, Textouno, Textodos, Fechapublicacion, img, Etiqueta, Timelec) VALUES ('$titulo', '$textouno', '$textodos', '$fechapublicacion', '$img', '$etiqueta', '$timelec')";
$insertar = mysqli_query($conexion, $consulta);



echo "<script> window.location.href = 'noticiaspublicadasadmin.php'</script>";





?> 
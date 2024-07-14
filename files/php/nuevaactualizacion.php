<?php

session_start();
include ("cn.php");

date_default_timezone_set("Europe/London");



$numerodeactualizacion = $_POST["numerodeactualizacion"];
$novedades = $_POST['novedades'];
$fechadelanzamiento = $_POST['fechadelanzamiento'];
$Comentarios = $_POST['comentarios'];
$Tipodeactualizacion = $_POST['tipodeactualizacion'];





$consulta = "INSERT INTO actualizaciones(Numerodeactualizacion, Novedades,	Fechadelanzamiento, Comentarios, Tipodeactualizacion) VALUES ('$numerodeactualizacion', '$novedades', '$fechadelanzamiento', '$Comentarios', '$Tipodeactualizacion')";

$insertar = mysqli_query($conexion, $consulta);



echo "<script> window.location.href = 'actualizacionesadmin.php'</script>";





?> 
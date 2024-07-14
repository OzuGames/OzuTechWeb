<?php
include ("cn.php");

$id = $_POST['id'];
$numerodeactualizacion = $_POST['numerodeactualizacion'];
$novedades = $_POST['novedades'];
$fechadelanzamiento = $_POST['fechadelanzamiento'];
$Comentarios = $_POST['comentarios'];



$editar = "UPDATE actualizaciones SET Numerodeactualizacion='$numerodeactualizacion', Novedades='$novedades', Fechadelanzamiento='$fechadelanzamiento', Comentarios='$comentarios' WHERE Idactualizacion='$id'";




$insertar = mysqli_query($conexion, $editar);

if ($insertar) {
     echo "<script>alert('SE HAN GUARDADO LOS CAMBIOS'); window.location='actualizacionesadmin.php';</script>";
} else {
    echo "<script>alert('ERROR EN LA EDICIÓN'); window.history.go(-1);</script>";
}



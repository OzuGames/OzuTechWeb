<?php

session_start();
include("cn.php");
$Id = $_GET["id"];
$EConsulta = "DELETE FROM actualizaciones WHERE Idactualizacion = $Id";
$Eliminar = mysqli_query($conexion, $EConsulta);
echo "<script>window.location.href='actualizacionesadmin.php';</script>";
?>
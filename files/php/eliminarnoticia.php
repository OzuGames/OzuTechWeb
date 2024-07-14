<?php

session_start();

include("cn.php");

$Id = $_GET["id"];



$EConsulta = "DELETE FROM noticias WHERE Idnoticia = $Id";



$Eliminar = mysqli_query($conexion, $EConsulta);



echo "<script>window.location.href='noticiaspublicadasadmin.php';</script>";



?>
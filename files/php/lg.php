<?php 

include("cn.php");



$contrasena=htmlspecialchars($_POST["contrasena"]);



$consulta="SELECT * FROM usuarios WHERE `Contrasena` = '$contrasena'";

$EConsulta = mysqli_query($conexion, $consulta);  



$filas = mysqli_num_rows($EConsulta);

if($filas >0){

    if ($usuario == "") {

        session_start();

        $_SESSION['usuario'] = $usuario;?>

        <script>window.location.href="../admin788782024711/adminprivate99998887445.php"</script>'; <?php

    } else{

      

      $consulta2="SELECT * FROM usuarios WHERE `Contrasena` = '$contrasena'";

    $EConsulta2 = mysqli_query($conexion, $consulta);  

    $row = $EConsulta2->fetch_array();{

        $Id = $row['id']; 

     }

   

    $_SESSION['id'] = $Id;

    

    }

    

}else{

    echo "CONTRASEÑA INCORRECTA - OZUTECH 2024";

    echo "

        <a href='../../index.php'>VOLVER A OZUTECH</a>

    ";

}







?>
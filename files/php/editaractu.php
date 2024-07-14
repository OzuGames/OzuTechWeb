<!DOCTYPE html>

            <html lang="en">

            <head>

                <meta charset="UTF-8">

                <meta http-equiv="X-UA-Compatible" content="IE=edge">

                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <title>EDITAR ACTUALIZACIÓN</title>

                <link rel="stylesheet" href="../css/estiloactualizacion.css">

            </head>

            <link rel="icon" href="../Img/Icono OzuGames.png">

            <body bgcolor="#58D68D">

                <center><h2>MODO EDICIÓN</h2> 
                <a href="operacionesactu.php"><font color="white">VOLVER</font></a>
                

                <br><br>

                <center>

                    <?php

    echo "<center>";

    include("cn.php");
    $id = $_GET["id"];
    $consulta = "SELECT * FROM actualizaciones WHERE Idactualizacion = '$id'";

    $resultado = mysqli_query($conexion, $consulta);

    if($resultado){

        while($row = $resultado->fetch_array()){

            $Idactualizacion = $row['Idactualizacion'];

            $Numerodeactualizacion = $row['Numerodeactualizacion'];

            $Novedades = $row['Novedades'];

            $Fechadelanzamiento = $row['Fechadelanzamiento'];

            $Comentarios = $row['Comentarios'];

            $Tipodeactualizacion = $row['Tipodeactualizacion'];

            $c1index = '../../index.php?usuario=';

            echo "</center>";?> 

            

                    <center>

                    <br><br>

                <form class="novedadesabiertas" action="procesar_edicion.php" method="post">

                     <h2><font color="yellow">EDITAR ACTUALIZACIÓN</font></h2>

                        <h5><font color="white">Motivo Actualización:</font></h5>
                        <input type="text" value="<?php echo $Numerodeactualizacion ;?>"><br><br>
                        <h5><font color="white">Descripción/Texto:</font></h5>
                        <input type="text" value="><?php echo $Novedades;?>"><br><br>
                        <h5><font color="white">Fecha:</font></h5>
                        <input type="text" value="<?php echo $Fechadelanzamiento;?>"><br><br>
                        <h5><font color="white">Comentarios:</font></h5>
                        <input type="text" value="<?php echo $Comentarios ;?>">
                        <br><br>
                        <input type="submit" value="Actualizar">
                            
                            

                
                

                

                </form></center>





            <?php

            }

    }

    ?>  

            </body>
  </html>
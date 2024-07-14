<?php header("Refresh:15");
session_start(); ?> 
<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>ACTUALIZACIONES</title>
                <link rel="stylesheet" href="../css/estiloactualizacion.css">
                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            </head>
            <link rel="icon" href="../img/IconoOzuTech.png">




            <body>
                <center><h2> <font color="Yellow" face="Roboto">ACTUALIZACIONES - OZUTECH</font> </h2> 

                <div class="botonvolver" >
                <a href="../../index.php"> <font color="white">VOLVER</font> </a></center>
                 </div>
                 <center><b><h4> <font color="white"> LAS ACTUALIZACIONES PROVOCARAN HASTA 10 MINUTOS DE INACTIVIDAD EN LA WEB, DISCULPEN LAS MOLESTIAS </font> </h4></b></center>



                <br><br>
                <center>
                    <?php
    echo "<center>";
    include("cn.php");
    $consulta = "SELECT * FROM actualizaciones";
    $resultado = mysqli_query($conexion, $consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $Idactualizacion = $row['Idactualizacion'];
            $Numerodeactualizacion = $row['Numerodeactualizacion'];
            $Novedades = $row['Novedades'];
            $Fechadelanzamiento = $row['Fechadelanzamiento'];
            $Comentarios = $row['Comentarios'];

    
            /**$usuario = $_GET["usuario"]; **/
            $c1index = '../../index.php?usuario=';
            echo "</center>";?> 

            
                    <center>
                    <br><br>
                <div class="novedadesabiertas" >
                     <font color="white" size="2"><h2><?php echo $Numerodeactualizacion ;?></h2></font> 
                    <div>
                        <p>
                            <b><h4> <font color="yellow">Texto - Novedades: </font> </h4><font color="white"> </b><?php echo $Novedades;?> </font><br>
                            <b><h4> <font color="yellow">Fecha de publicación:</font> </h4><font color="white"></b><?php echo $Fechadelanzamiento;?></font><br>
                            <b><h4> <font color="yellow">Más detalles: </font> </h4><font color="white"></b><?php echo $Comentarios ;?> </font> <br><br><br><br><br><br><br><br><br>
                           
                        </p>
                    </div>

                    

         
                </div></center>




            <?php
            }
    }
    ?>  

        

            <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
            <script src="../Scripts/click.js"></script>
            </body>
  </html>
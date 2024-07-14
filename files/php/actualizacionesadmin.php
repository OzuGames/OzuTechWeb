<?php header("Refresh:10");

session_start(); ?> 

<!DOCTYPE html>

            <html lang="en">

            <head>

                <meta charset="UTF-8">

                <meta http-equiv="X-UA-Compatible" content="IE=edge">

                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <title>ACTUALIZACIONES</title>

                <link rel="stylesheet" href="../css/estiloactualizacion.css">

            </head>

            <link rel="icon" href="../img/ICONO OZUTECH.jpg">

            <body bgcolor="#58D68D">

                <center><h2>ACTUALIZACIONES</h2> 
                <a href="../admin788782024711/adminprivate99998887445.php"><font color="white">VOLVER</font></a>
                <a href="operacionesactu.php"><h4> <font color="yellow">OPERACIONES ACTUALIZACIONES</font> </h4></a></center>
                

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

            $Tipodeactualizacion = $row['Tipodeactualizacion'];

            $c1index = '../../index.php?usuario=';

            echo "</center>";?> 

            

                    <center>

                    <br><br>

                <div class="novedadesabiertas" >

                     <font size="2"><h2><?php echo $Numerodeactualizacion ;?></h2></font> 

                    <div>

                        <p>

                            <b><h4>Novedades:</h4> </b><?php echo $Novedades;?> <br>
                            <b><h4>Fecha de lanzamiento: </h4></b><?php echo $Fechadelanzamiento;?><br>
                            <b><h4>Comentarios:</h4></b><?php echo $Comentarios ;?>  <br>

                             
                            <br><br>
                            <b><a href='finalizaractualizacion.php?id=<?php echo $Idactualizacion;?>'><h4> <font color="white">Finalizar actualización</font> </h4></a></b>
                            







                        </p>

                    </div>

                    

         

                </div></center>





            <?php

            }

    }

    ?>  

        

                <br><br><br><br><br>

                <center>

                   <!-- <a href="../../index.php">VOLVER</a> -->

                    

                

            </center>



            </body>

  </html>







<?php header("Refresh:10");

session_start(); ?> 

<!DOCTYPE html>

                <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>NOTICIAS PUBLICADAS</title>
                    <link rel="stylesheet" href="../css/estiloadminnoticia.css">
                </head>
                <link rel="icon" href="../img/ICONO OZUTECH.jpg">
                <body bgcolor="#58D68D">
                    <center><h2>NOTICIAS PUBLICADAS - ADMIN</h2> 
                    <a href="../admin788782024711/adminprivate99998887445.php"><font color="white">VOLVER</font></a>
                    <br><br>
                    <center>

                        <?php

    echo "<center>";

    include("cn.php");

    $consulta = "SELECT * FROM noticias";

    $resultado = mysqli_query($conexion, $consulta);

    if($resultado){

        while($row = $resultado->fetch_array()){

            $Idnoticia = $row['Idnoticia'];
            $Titulo = $row['Titulo'];
            $Textouno = $row['Textouno'];
            $Textodos = $row['Textodos'];
            $Fechapublicacion = $row['Fechapublicacion'];
            $Img = $row['Img'];
            $Etiqueta = $row['Etiqueta'];
            $Timelec = $row['Timelec'];
            $c1index = '../../index.php?usuario=';

            echo "</center>";?>

            

                    <center>

                    <br><br>

                <div class="novedadesabiertas">

                    <div>

                        <p>

                            <b><h4>Título:</h4> </b><?php echo $Titulo;?><br>
                            <b><h4>Etiqueta:</h4> </b><?php echo $Etiqueta;?><br>
                            <b><h4>Tiempo Lectura:</h4> </b><?php echo $Timelec;?><br>
                            <b><h4>Fecha:</h4></b><?php echo $Fechapublicacion;?><br>
                            <b><h4>img</h4></b><?php echo $Img;?><br>
                            <br>
                            <b><a href='eliminarnoticia.php?id=<?php echo $Idnoticia;?>'><h4> <font color="white">Eliminar Noticia</font></h4></a></b>
                            
                        </p>

                    </div>

                    

         

                </div></center>





            <?php

            }

    }

    ?>  

            </body>

  </html>







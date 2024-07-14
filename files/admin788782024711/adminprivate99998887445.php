<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" href="../img/ICONO OZUTECH.jpg">
    <title>ADMINISTRACIÓN</title>
</head>
<body>


<div class="actualizacionve" id="actualizacionve"> <!-- class="emergenciasve" id="emergenciasve" -->

<form action="../php/nuevaactualizacion.php" method="POST" id="actualizacionveform"> <!-- id="emergenciasveform" -->



<center>
                <!-- class="gteX" -->
            <div class="imgcerrar"><a href="javascript:cerrar()"><img src="../img/ximg.png" width="30px"></a></div>

               <h2 style="color: yellow;">NUEVA NOVEDAD</h2>

                

                <label for="numerodeactualizacion">MOTIVO DE NOVEDAD</label><br>
                    <br>
                <input type="text" name="numerodeactualizacion" class="actualizacionvei" id="numerodeactualizacion" placeholder="PON EL MOTIVO DE LA ACTUALIZACIÓN/NOVEDAD">  <!-- class="emergenciasvei" -->

                <br><br>

                <label for="novedades">TEXTO</label><br>
                <br>
                <textarea type="text" name="novedades" id="novedades" class="novedadesactu" placeholder="EXPLICAR BREVEMENTE LAS NUEVAS NOVEDADES QUE SERÁN PUBLICADAS"></textarea> <!-- class="emergenciashechos" -->

                <br><br>

                <label for="fechadelanzamiento">FECHA DE PUBLICACIÓN</label><br>
                <br>
                <input type="date" name="fechadelanzamiento" id="fechadelanzamiento" class="fechadelanzamiento"> <!-- class="emergenciaslocalizacion"-->

                <br><br>

                <label for="comentarios">MÁS DETALLES</label><br>
                    <br>
                <textarea value='' type="text" name="comentarios" id="comentarios"></textarea><br>

                <br>

                <button class="btn" type="submit" value="publicar" class="actualizacionvei"><a type="submit" value="publicar" class="actualizacionvei" style="text-decoration: none;" href="javascript:abririncidenciaycerrar()"><font color="black">PUBLICAR</font></a></button><br><br> <!-- class="emergenciasvei"-->

            </center>



        </form>

 </div>

 <!-- NUEVA NOTICIA -->


 <div class="noticiave" id="noticiave"> <!-- class="actualizacionve" id="actualizacionve" -->

<form action="../php/nuevanoticia.php" method="POST" id="noticiaveform"> <!-- id="emergenciasveform" -->



<center>
                <!-- class="gteX" -->
            <div class="imgcerrar"><a href="javascript:mal()"><img src="../img/ximg.png" width="30px"></a></div>

               <h2 style="color: yellow;">DATOS NOTICIA</h2>

                

                <label for="titulo">Título</label><br>
                    <br>
                <input type="text" name="numerodeactualizacion" class="noticiavei" id="titulo" placeholder="TÍTULO DE LA NOTICIA">  <!-- class="emergenciasvei" -->

                <br><br>
                <label for="fechadelanzamiento">FECHA DE PUBLICACIÓN</label><br>
                    <br>
                <input type="date" name="fechadelanzamiento" id="fechadelanzamiento" class="fechadelanzamiento"> <!-- class="emergenciaslocalizacion"-->
                

                <br><br>

                <label for="texto1">TEXTO</label><br>
                <br>
                <textarea type="text" name="texto1" id="texto1" class="novedadesactu" placeholder="ESCRIBE LA NOTICIA1"></textarea> <!-- class="emergenciashechos" -->

                <br><br>

                
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" accept="image/*1" required>

                    <br><br>

                    <label for="texto2">TEXTO2</label><br>
                <br>
                <textarea type="text" name="texto2" id="texto2" class="novedadesactu" placeholder="ESCRIBE LA NOTICIA2"></textarea> <!-- class="emergenciashechos" -->

                    <br><br>

                <label for="Timelec">Tiempo Lectura</label><br>
                    <br>
                <input type="text" name="numerodeactualizacion" class="noticiavei" id="titulo" placeholder="TIEMPO DE LECTURA APROXIMADO">  <!-- class="emergenciasvei" -->


                <br><br>

                <div id="tipodeactualizacion" name="tipodeactualizacion" class="TipoEmergencia">
                <label for="tipodeactualizacion">Etiquetas</label>
                <br><br>
                <select name="tipodeactualizacion" id="tipodeactualizacion" class="TipoEmergencia">
                    <option value=""></option>
                    <option value="Juegos Generales">Juegos Generales</option>
                    <option value="Juegos famosos">Juegos famosos</option>
                    <option value="Juegos más jugados">Juegos más jugados</option>
                    <option value="Juegos menos jugados">Juegos menos jugados</option>
                    <option value="Juegos de aventura">Juegos de aventura</option>
                    <option value="Juegos de terror">Juegos de terror</option>
                    <option value="Juegos de misterio">Juegos de misterio</option>
                    <option value="Juegos de diversión">Juegos de diversión</option>
                    <option value="Juegos tradicionales">Juegos tradicionales</option>
                    <option value="Juegos de rol">Juegos de rol</option>
                    <option value="Otro">Otro</option>
                </select></div>

                              
                <br><br>

                <button class="btn" type="submit" value="publicar" class="noticiavei"><a type="submit" value="publicar" class="noticiavei" style="text-decoration: none;" href="javascript:dospave()"><font color="black">PUBLICAR</font></a></button><br><br> <!-- class="emergenciasvei"-->

            </center>



        </form>

 </div>

<!-- TERMINA -->




<!-- PÁGINA WEB -->

    <header>
        <h1>ADMIN - OZUTECH 2024</h1>
    </header>

    <section>
    <div style="pointer-events: none;"><iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=Atlantic%2FCanary" width="100%" height="90" frameborder="0" seamless></iframe></div>
    </section>

    <section>
        <h2>ACTUALIZACIONES</h2>
        <p>Crear actualizaciones, editar, borrar o verlas.</p>
        <center><a style="text-decoration: none;" class="entrar"  href="javascript:abrir()">CREAR UNA NUEVA ACTUALIZACIÓN</a></center>
        <br>
        <center><a style="text-decoration: none;" class="entrar"   href="../php/actualizacionesadmin.php">ACTUALIZACIONES ABIERTAS</a></center>
    </section>

    <section>
        <h2>NOTICIAS - VIDEOJUEGOS</h2>
        <p>Crear noticias, edítalas, borrar o verlas.</p>
        <center><a style="text-decoration: none;" class="entrar"  href="javascript:bien()">PUBLICAR NOTICIA</a></center>
        <br>
        <center><a style="text-decoration: none;" class="entrar"  href="../php/noticiaspublicadasadmin.php">NOTICIAS PUBLICADAS</a></center>
    </section>

    <section>
        <h2>ENLACES IMPORTANTES</h2>
        <p>Ver enlaces importantes que sirven para OzuTech.</p>
        <center><a style="text-decoration: none;" class="entrar"   href="enlaces.php">ENLACES OZUTECH IMPORTANTES</a></center>
    </section>

   
    <section>
        <center><a style="text-decoration: none;"  href="../php/cerrarSesion.php"> <font color="blue">CERRAR SESIÓN</font></a></center>
    </section>

    <script src="java.js"></script>
</body>
</html>
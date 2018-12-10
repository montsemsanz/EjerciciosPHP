<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Primeros ejemplos con PHP</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    </head>
    <body>
        <div id="contenido">
            <h3>Primera aplicaci&oacute;n web PHP</h3>
            
            <form action="index.php" method="post">
                <div id="datos">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" 
                           value ="<?php  if (isset($nombre)) echo $nombre ?>"/><br />
                    <span class="error"> <?php if (isset($errores['nombre'])) echo $errores['nombre'] ?> </span><br />
                    <label>Apellido:</label>
                    <input type="text" name="apellido"
                           value ="<?php if (isset($apellido))echo $apellido?>"/><br />
                    <span class='error'> <?php if (isset($errores['apellido'])) echo $errores['apellido'] ?> </span><br />
                </div>

                <div id="botones">
                    <label>&nbsp;</label>
                    <input type="submit" name ="enviar" value="Enviar" /><br />
                </div>

            </form>
            <?php 
                if (isset($salida))   
                {
                     echo "<div id=\"resultado\"> $salida </div>";
                }
                   
            ?>
        </div>
    </body>
</html>

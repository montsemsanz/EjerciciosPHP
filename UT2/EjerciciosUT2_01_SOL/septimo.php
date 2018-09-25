<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros ejemplos con PHP</title>
    </head>
    <body>
        <div id="contenido">
            <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
            <div id="principal">
            <h3>Enlace a otro script PHP</h3><hr />
            <?php
                 echo "<p>Hora actual ".date("H:i:s")."<br />\n";
                 echo "Fecha actual ".date("d-m-Y")."<br /></p>\n";                 
                 
            ?>
            <p><a href="sexto.php" >Mostrar dado aleatorio</a></p>
         </div>
            <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>

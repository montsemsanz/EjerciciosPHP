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
             <?php
                // esto es un comentario
                /*
                 * Esto también es un comentario
                 */
                 echo "<p>Hola!, este es mi primer ejemplo en PHP</p> <hr />\n";
                 echo "<p>PHP es un lenguaje de script de servidor</p>\n";
                 echo '<p>Con la sentencia <span class=\'sentencia\'>echo</span>'
                 . ' mostramos informaci&oacute;n en el navegador</p>';
                 echo "\n<p>Si utilizo \\n puedo insertar saltos de l&iacute;nea "
                 . "en el c&oacute;digo fuente del navegador</p>\n";
                 echo "<p>pero solo funciona con las comillas dobles, no con las simples</p>\n", 
                         "<p>22 es un n&uacute;mero\n"; 
            ?>
            <h3>Ahora practicaremos con print</h3>
             <?php
                // vamos a practicar con print
                 print "<p>Hola!, este es mi primer ejemplo\n utilizando"
                   . " <span class='sentencia'>print</span> </p> \n ";
                 print '<p>Las comilas simples también funcionan con '
                 . '<span class=\'sentencia\'>print</span></p>';
                 
                  
             ?>     
            
              
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>

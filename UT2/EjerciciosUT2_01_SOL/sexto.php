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
            <h3>Mostrando una imagen</h3><hr />
            <?php
                // 
                 $dado = rand(1, 6);
                 $imagen = "images/".$dado.".gif";
                 //$resultado = "<img  src=\"$imagen \" alt = 'Imagen no disponible' />"; 
                 $resultado = "<img  src='$imagen' alt = 'Imagen no disponible' />\n"; 
                 echo $resultado;
                 
                 echo "<hr />";
                 echo "<img src='images/$dado.gif'  alt = 'No disponible' />\n";
                 
                 echo "<hr />";
                 echo '<img src=\'images/$dado.gif\'  alt = \'No disponible\' />'; // no se expande la variable ni funciona \n
                 
                 echo "<hr />";
                 echo '<img src=\'images/'.$dado.'.gif\'  alt = \'No disponible\' />'."\n";
                 
                 echo "<hr />";
            ?>
              <img src="<?php echo $imagen?>" alt="Imagen no disponible"/>
       </div>
            <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>

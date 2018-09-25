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
            <h3>Imágenes aleatorias</h3><hr />
            <?php
                 $dado1 = rand(1, 6);
                // $imagen1 = "images/".$dado1.".gif";
                 $imagen1 = "images/$dado1.gif";
                 $dado2 = rand(1, 6);
                 $imagen2 = "images/".$dado2.".gif";
                 $resultado1 = "<img  src=\"$imagen1 \" alt = 'Imagen no disponible'/>";                  
                 //$resultado2 = "<img  src=\"$imagen2 \" alt = 'Imagen no disponible' />"; 
                 $resultado2 = '<img  src = "'.$imagen2.'" alt = "Imagen no disponible" />'; 
                 echo $resultado1.$resultado2;
            ?>
            <!--  <p> <a href="" />Recargar</p> -->
            <p> <a href="octavo.php" >Recargar</a></p>  
         </div>
            <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>

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
            <h3>Variables y tipos de datos</h3><hr />
            <?php
                /*
                 * Ejercicio para que resuelvan los alumnos
                 */
                 define ("DESCUENTO", 25);
                 define ('IVA', 8);
                 
                 $precioProducto = 234.89;
                 $descuento = $precioProducto * DESCUENTO / 100;
                 $precioConDescuento = $precioProducto - $descuento;
                 $iva = $precioConDescuento * IVA / 100;
                 $precioFinal = $precioConDescuento + $iva;
                         
            
                echo "<table><caption>Datos de un producto</caption>\n";
                echo "<tr><td>Precio producto</td><td> ".$precioProducto."&euro;</td></tr>\n";
                echo "<tr><td>Descuento ".DESCUENTO."%</td><td> ".$descuento."&euro;</td></tr>\n";
                echo "<tr><td>Precio con descuento</td><td> ".$precioConDescuento."&euro;</td></tr>\n";
                echo "<tr><td>Iva ".IVA."%</td><td> $iva&euro;</td></tr>\n";
                echo "<tr><td>Precio final</td><td> ".$precioFinal."&euro;</td></tr>\n";
                echo "</table>"
                
            ?>
              
       </div>
            <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>

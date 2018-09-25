<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Ejemplo</title>
    </head>
    <body>
        <div id="contenido">
            <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
            <div id="principal">
                <?php
                      echo "<h4>Trabajando con variables</h4>\n";
                      $valor1 = 23;
                      echo "<p>El valor de \$valor1 es $valor1</p>\n";
                      $valor2 = 80;
                      echo '<p>El valor de $valor2 es ' . $valor2 . '</p>' . "\n";
                      $suma = $valor1 + $valor2;
                      $resta = $valor1 - $valor2;
                      $producto = $valor1 * $valor2;
                      $resto = $valor1 % $valor2;
                      echo "<p>La suma de $valor1 y $valor2 es $suma</p>\n";
                      echo "<p>La resta de $valor1 y $valor2 es $resta</p>\n";
                      echo "<p>El producto de $valor1 y $valor2 es $producto</p>\n";
                      echo "<p>El resto de $valor1 y $valor2 es $resto</p>\n";

                      $cantidadArticulos = 12;
                      echo "<p>Hay actualmente $cantidadArticulos art&iacute;culos</p>\n";
                      $cantidadArticulos++;
                      echo "<p>Ahora hay $cantidadArticulos art&iacute;culos</p>\n";
                      $cantidadArticulos--;
                      echo "<p>Ahora hay $cantidadArticulos art&iacute;culos</p>\n";
                      $cantidadArticulos += 10;
                      echo "<p>Ahora hay $cantidadArticulos art&iacute;culos</p>\n";
                ?>
            </div>
            <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>

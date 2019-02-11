<?php 
    $menu = "menu.php";
    include "cabecera.php";
 
    echo "<h2>Relaci&oacute;n de productos en orden descendente de precio </h2>";
    foreach ($productos as $producto) 
    {
        echo "<p>".filtrarDato($producto['nombre'])." -- ";
        echo filtrarDato($producto['precio'])."&euro;</p>";
        echo "<hr />";
    }
     
    include "pie.php";
?>
 

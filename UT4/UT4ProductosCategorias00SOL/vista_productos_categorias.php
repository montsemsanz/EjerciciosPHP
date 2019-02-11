<?php 
    $menu = "menu.php"; 
    include "cabecera.php";
   
    echo "<h2>Relaci&oacute;n de productos con sus categor&iacute;as </h2>";
    echo "<table><tr><th>Nombre Producto</th><th>Precio</th><th>Categor&iacute;a</th></tr>";
    foreach ($productos as $producto) 
    {
        echo "<tr><td>".filtrarDato($producto['nomProducto'])."</td><td> ";
        echo filtrarDato($producto['precio'])."&euro; </td><td>";
        echo filtrarDato($producto['nomCategoria'])."</td></tr>";
        
    }
    echo "</table>";
    include "pie.php";
     
?>
 

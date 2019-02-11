<?php 
    $menu = "menu.php";
    include "cabecera.php";
    
    //echo "Conexión establecida";
?>
   
    <table><tr><th>ID</th><th>Nombre</th><th>Precio</th></tr>
<?php
    foreach ($productos as $producto) 
    {
        echo "<tr><td>". filtrarDato( $producto['idProducto'])."</td>";
        echo "<td>".  filtrarDato($producto['nombre'])."</td>";
        echo "<td>".filtrarDato($producto['precio'])."&euro;</td>";
        echo "</tr>\n";
    }
    ?>
    </table> 
     <a href='index.php?opcion=nuevoprod'>Nuevo producto</a>
 <?php
    include "pie.php";
?>
 

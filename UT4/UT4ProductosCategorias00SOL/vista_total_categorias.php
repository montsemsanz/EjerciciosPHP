<?php 
    $menu = "menu.php";
    include "cabecera.php";
 
    echo "<h2>Total productos en cada categor&iacute;a </h2>";
    foreach ($categorias as $cat) 
    {
        echo "<p>".filtrarDato($cat['nomCategoria'])." -- ";
        echo filtrarDato($cat['Total productos'])." productos</p>";
        echo "<hr />";
    }
     
    include "pie.php";
?>
 

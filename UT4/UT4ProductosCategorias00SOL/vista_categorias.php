<?php 
    $menu = "menu.php";
    include "cabecera.php";
 
   
    
    echo "<h2>Categor&iacute;as </h2>";
    foreach ($categorias as $categoria) 
    {
        echo "<p>".filtrarDato($categoria['nombre'])."</p>\n";
        
    }

    echo "<br /><br />";
    echo "<hr />";
    echo "<a href='index.php?opcion=nuevacat'>Nuevo registro categor&iacute;as</a>";
    include "pie.php";
?>
 

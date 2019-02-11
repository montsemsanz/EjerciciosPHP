<?php 
    
    include "cabecera.php";
     
     
    foreach ($actores as $actor)
    {
        echo "<div class='actor'>";
        echo "<p>".strtoupper(filtrarDato($actor['apellido'])).", ".  filtrarDato($actor['nombre']). "  </p>";
        echo "</div>\n";
    }
     
    include "pie.php";
?>
 

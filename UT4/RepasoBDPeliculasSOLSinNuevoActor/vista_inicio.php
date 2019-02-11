<?php 
    
    include "cabecera.php";
     
    $num = 1;
    foreach ($peliculas as $pelicula)
    {
        echo "<div class='pelicula'>";
        echo "<p>$num - ".strtoupper(filtrarDato($pelicula['titulo']))."  </p>";
        $num++;
        echo "</div>\n";
    }
     
    include "pie.php";
?>
 

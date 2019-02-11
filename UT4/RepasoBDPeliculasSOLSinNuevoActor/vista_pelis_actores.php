<?php
    include "cabecera.php";
    
    echo "<h3>Pel&iacute;culas y actores que han intervenido en ellas </h3>";
    echo " <table><tr><th>Apellido</th><th>Nombre</th><th>T&iacute;tulo</th></tr>";
    foreach ($pelisActores as $p)
    {
            echo "<tr>";
            echo "<td>".strtoupper(filtrarDato($p['apellido'])).
                 " </td><td>".  filtrarDato($p['nombre']) . "</td><td> ".
                    strtoupper(filtrarDato($p['titulo'])) . " </td>";
            echo "</tr>\n ";
                          
          
    }
    
    echo " </table>";
    echo "<h3>Actores y n&ordm; de pel&iacute;culas en las que que han intervenido</h3>";
    foreach ($actoresTotalPeliculas as $a)
    {
           echo "<p>".filtrarDato($a['nombre']). " ".strtoupper(filtrarDato($a['apellido'])).
                " ha participado en ".strtoupper(filtrarDato($a['Total peliculas']))." pel&iacute;cula/s</p>";
          
    }
    include "pie.php";
?>

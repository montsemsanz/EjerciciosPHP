<?php
    include "cabecera.php";
    if (isset($mensaje))
    {
        echo "<h3>$mensaje</h3>";
    }
    
    foreach ($personas as $persona)
    {
        echo "<div class='persona'>";
        echo "<p> " . filtrarDato($persona['nombre']) . " " .
            strtoupper(filtrarDato($persona['apellido'])) . "</p>";
        echo "</div>\n";
    }
    include "pie.php";
?>

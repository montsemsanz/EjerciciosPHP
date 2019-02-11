<?php
    include "cabecera.php";
    
    echo "<h3>Personas y cursos que ha realizado </h3>";
    foreach ($personas as $persona)
    {
        echo "<div class='persona'>";
        echo "<p> " . filtrarDato($persona['nombre']) . " " .
            strtoupper(filtrarDato($persona['apellido'])) . " - ".
            strtoupper(filtrarDato($persona['nombreCurso']))." -  ".
            htmlspecialchars($persona['horas'])." horas</p>";
        echo "</div>\n";
    }
    
    echo "<h3>Personas y total cursos que ha realizado </h3>";
    foreach ($personas1 as $persona)
    {
        echo "<div class='persona'>";
        echo "<p> " . filtrarDato($persona['nombre']) . " " .
            strtoupper(filtrarDato($persona['apellido'])) . " - ".
            strtoupper(filtrarDato($persona['Total Cursos']));
        echo "</p></div>\n";
    }
    
    include "pie.php";
?>
